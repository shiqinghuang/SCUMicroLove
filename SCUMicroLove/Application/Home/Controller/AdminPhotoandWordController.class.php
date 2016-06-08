<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/23
 * Time: 0:20
 */
namespace Home\Controller;
use \Home\Model\PhotoandWordModel;
use \Home\Model\WishstoryApplicationModel;
use Think\Controller;

class AdminPhotoandWordController extends Controller
{
    public function index()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $this->assign("wishatory_id", $_GET['wishstory_id']);
        $this->display();
    }

    public function add()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }

        $obj = new WishstoryApplicationModel();
        $rows = $obj->get_obj()->where('wishstory_id = ' . $_POST['wishstory_id'])->select();
        if (count($rows) == 0 || $rows[0]['stu_claimstate'] != 5) {//心愿不存在或者心愿没有被实现
            $this->error("心愿号错误！");
            exit;
        }

        $data = array();
        $data['wishstory_id'] = $_POST['wishstory_id'];
        $data['picture_path'] = '';
        $data['stu_word'] = $_POST['words'];
        $data['postdate'] = date('Y-m-d');
        //将图片和寄语插入到数据库
        $pwObj = new PhotoandWordModel();
        $rows = $pwObj->get_obj()->where('wishstory_id = ' . $_POST['wishstory_id'])->select();
        if (count($rows) == 0) {
            $obj = $pwObj->get_obj();
            $obj->create($data);
            $result = $obj->add();
            if ($result == true) {
                $this->success("提交成功", __ROOT__ . "/Home/AdminIndexAchieve");
            } else {
                $this->error("提交失败!");
                exit;
            }
        } else {
            $data = array('stu_word' => $_POST['words'], 'postdate' => date('Y-m-d'));
            $result = $pwObj->get_obj()->where('wishstory_id = ' . $_POST['wishstory_id'])->setField($data);
            if ($result == true) {
                $this->success("提交成功", __ROOT__ . "/Home/AdminIndexAchieve");
            } else {
                $this->error("提交失败!");
                exit;
            }
        }
    }

    public function uploadPicture()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $wishstory_id = explode('.', $_FILES['file']['name']);
        $upload = new \Think\Upload();                             //实例化上传类
        $upload->maxSize = 3145728;                           //设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); //设置附件上传类型
        $upload->rootPath = APP_PATH . "Picture/";                //设置附件上传根目录
        $upload->savePath = '';                                 //设置附件上传（子）目录
        $upload->subName = '';                                     //文件子目录
        $upload->saveName = $wishstory_id[0];                      //上传文件名称x
        $info = $upload->upload();                             //上传文件
        if ($wishstory_id[1] != 'jpg' && $wishstory_id[1] != 'jpeg' &&
            $wishstory_id[1] != 'png' && $wishstory_id[1] && 'gif'
        ) {
            // 上传错误提示错误信息
            $this->error('图片格式错误！');
            exit;
        }
        $obj = new WishstoryApplicationModel();//创建心愿申请模型对象
        $rows = $obj->get_obj()->where('wishstory_id = ' . $wishstory_id[0])->select();
        if (count($rows) == 0 || $rows[0]['stu_claimstate'] != 5) {//心愿不存在或者心愿没有被实现
            $this->error("心愿号错误（文件名错误），上传失败！");
            exit;
        }

        $obj = new PhotoandWordModel(); //创建图片寄语数据库模型对象
        $path = LOCALHOST . APP_NAME . "/Picture/" . $wishstory_id[0] . '.' . $wishstory_id[1];
        $pwObj = new PhotoandWordModel();
        $rows = $pwObj->get_obj()->where('wishstory_id = ' . $_POST['wishstory_id'])->select();
        if (count($rows) == 0) {
            $data = array();
            $data['wishstory_id'] = $_POST['wishstory_id'];
            $data['picture_path'] = $path;
            $data['stu_word'] = '';
            $data['postdate'] = date('Y-m-d');
            $obj = $pwObj->get_obj();
            $obj->create($data);
            $result = $obj->add();
            if ($result == true) {
                $this->success("上传成功", __ROOT__ . "/Home/AdminIndexAchieve");
            } else {
                $this->error("上传失败!");
                exit;
            }
        } else {
            $data = array('picture_path' => $path, 'postdate' => date('Y-m-d'));
            $res = $obj->get_obj()->where('wishstory_id = ' . $wishstory_id[0])->setField($data);
            if ($res == false) {
                $this->error("图片上传失败！");
                exit;
            }
            $this->success('上传成功！', __ROOT__ . "/Home/AdminIndexAchieve");

        }
    }
}
?>