<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/7
 * Time: 15:58
 */
namespace Home\Controller;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;

class DetailViewController extends Controller{
    public function index()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $id = $_GET['id'];
        $waObj = new WishstoryApplicationModel();
        $rows[0] = $waObj->get_obj()->where('wishstory_id ='.$id)->select();
        $this->assign('data', $rows[0]);
        $this->display();
    }
}
?>