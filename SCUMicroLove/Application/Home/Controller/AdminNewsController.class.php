<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/24
 * Time: 22:09
 */
namespace Home\Controller;
use \Home\Model\NewsModel;
use Think\Controller;

class AdminNewsController extends Controller
{
    public function index()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $this->display();
    }

    public function  add()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }

        if(empty($_POST['news_name']) || empty($_POST['news_address']))
        {
            $this->error("选项不能为空，提交失败!");
            exit;
        }

        $data = array();
        $data['news_name'] = $_POST['news_name'];
        $data['news_address'] = $_POST['news_address'];
        $data['postdate'] = date('Y-m-d');

        $newsObj = new NewsModel();
        $obj = $newsObj->get_obj();
        $obj->create($data);     //添加数据
        $result =  $obj->add();
        if($result == true){
            $this->success("提交成功",__ROOT__."/Home/AdminNews");
        }else{
            $this->error("提交失败!");
            exit;
        }

    }
}