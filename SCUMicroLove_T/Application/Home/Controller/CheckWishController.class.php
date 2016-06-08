<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/13
 * Time: 11:10
 */
namespace Home\Controller;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;

class CheckWishController extends Controller
{
    public function changeStuApplyState(){
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $id = $_POST['wishstory_id'];
        $result=$_POST['result'];
        $obj = new WishstoryApplicationModel();
        if ($result==1) {
            $data=array("stu_claimstate"=>2,'postdate'=>date('Y-m-d'));
            $ret = $obj->get_obj()->where("wishstory_id =$id and stu_claimstate=0")->setField($data);//心愿申请审核通过
        }
        else
            $ret = $obj->get_obj()->where("wishstory_id =$id and stu_claimstate=0")->setField('stu_claimstate', 1);//心愿申请审核不通过
        if($ret) {
            $this->assign('jumpUrl', "javascript:window.parent.location.reload();");
            $this->assign('closeWin',true);
            $this->success("提交成功");
        }
        else{
            $this->assign('closeWin',true);
            $this->error("提交失败");

        }

        return false;
    }

    public function index()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $id = $_GET['wishstory_id'];
        $waObj = new WishstoryApplicationModel();
        $rows[0] = $waObj->get_obj()->where('wishstory_id ='.$id)->select();
        $this->assign('data', $rows[0]);
        $this->display();
    }

    public function add()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $id = $_POST['id'];
        $data['stu_id'] = $_POST['stu_id'];
        $data['stu_name'] = $_POST['stu_name'];
        $data['stu_gender'] = $_POST['stu_gender'];
        $data['stu_phone'] = $_POST['stu_phone'];
        $data['stu_nation'] = $_POST['stu_nation'];
        $data['stu_nativeplace'] = $_POST['stu_nativeplace'];
        $data['stu_grade'] = $_POST['stu_grade'];
        $data['stu_academy'] = $_POST['stu_academy'];
        $data['stu_major'] = $_POST['stu_major'];
        $data['wishstory_name'] = $_POST['wishstory_name'];
        $data['stu_wishstory'] = $_POST['stu_wishstory'];
        $data['stu_family'] = $_POST['stu_family'];
        $data['stu_claimstate'] = 0;
        $data['postdate'] = date('Y-m-d');

        if ($id == "审核通过" || empty($data) || empty($data['stu_id']) || empty($data['stu_name']) || empty($data['stu_gender'])
            || empty($data['stu_phone']) || empty($data['stu_nation']) || empty($data['stu_nativeplace']) || empty($data['stu_grade'])
            || empty($data['stu_academy']) || empty($data['wishstory_name']) || empty($data['stu_wishstory']) || empty($data['stu_family'])
        ) {
            $this->error("选项不能为空!");
        }

        $waObj = new WishstoryApplicationModel();
        $obj = $waObj->get_obj();//得到数据库对象
        $obj->create($data);     //添加数据
        $result = $obj->add();
        if ($result == true && $this->changeStuClaimstate(intval($id)) == true) {
            $this->success("提交成功", __ROOT__ . "/Home/AdminIndex");
        } else {
            $this->error("提交失败!");
        }
    }
}
?>