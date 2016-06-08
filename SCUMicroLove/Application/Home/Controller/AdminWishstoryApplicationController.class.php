<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/12
 * Time: 18:20
 */
namespace Home\Controller;
use \Think\Controller;
use Home\Model\WishstoryApplicationHistoryModel;

class AdminWishstoryApplicationController extends Controller{
    public function  index(){
        //判断用户是否登陆过
        if(!isset($_SESSION['username']) || $_SESSION['username'] =='') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $this->display();
    }

    public function add()
    {
        $data['stu_id'] = $_POST['stu_id'];
        $data['stu_name'] = $_POST['stu_name'];
        $data['stu_gender'] = $_POST['stu_gender'];
        $data['stu_phone'] = $_POST['stu_phone'];
        $data['stu_nation'] = $_POST['stu_nation'];
        $data['stu_nativeplace'] = $_POST['stu_nativeplace'];
        $data['stu_grade'] = $_POST['stu_grade'];
        $data['stu_academy'] = $_POST['stu_academy'];
        $data['stu_major'] = $_POST['stu_major'];
        $data['wishstory_name'] = $_POST['stu_wish'];
        $data['stu_wishstory'] = $_POST['stu_wishstory'];
        $data['stu_family'] = $_POST['stu_family'];
        $data['stu_claimstate'] = 0;
        $data['postdate'] = date('Y-m-d');

        if (empty($data) || empty($data['stu_id']) || empty($data['stu_name']) || empty($data['stu_gender'])
            || empty($data['stu_phone']) || empty($data['stu_nation']) || empty($data['stu_nativeplace']) || empty($data['stu_grade'])
            || empty($data['stu_academy']) || empty($data['wishstory_name']) || empty($data['stu_wishstory']) || empty($data['stu_family']))
        {
            $this->error("选项不能为空!");
        }

        $waObj = new WishstoryApplicationHistoryModel();
        $obj = $waObj->get_obj();//得到数据库对象
        $obj->create($data);     //添加数据
        $result =  $obj->add();
        var_dump($data);
        if($result == true){
            $this->success("提交成功",__ROOT__."/Home/AdminWishstoryApplication");
        }else{
            $this->error("提交失败!");
        }
    }
}
?>