<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/16
 * Time: 19:11
 */
namespace Home\Controller;
use Home\Model\ClaimantModel;
use \Think\Controller;
class AdminClaimantInfoController extends Controller
{
    public function index()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $id = isset($_GET['ID'])?$_GET['ID']:0;
        $obj = new ClaimantModel();
        $rows[0] = $obj->get_obj()->where('wishstory_id ='.$id)->select();
        $this->assign('data', $rows[0]);
        $this->display();
    }
}
?>