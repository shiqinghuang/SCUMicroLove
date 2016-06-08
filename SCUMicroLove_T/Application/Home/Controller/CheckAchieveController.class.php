<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/13
 * Time: 11:10
 */
namespace Home\Controller;
use Home\Model\ClaimantModel;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;

class CheckAchieveController extends Controller
{
    public function updateState(){
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $id = $_POST['wishstory_id'];
        $obj = new WishstoryApplicationModel();
            $ret = $obj->get_obj()->where("wishstory_id =$id and stu_claimstate=4" )->setField('stu_claimstate',5);//心愿申请审核通过
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
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $id = $_GET['wishstory_id'];
        $waObj = new WishstoryApplicationModel();
        $rows= $waObj->get_obj()->where('wishstory_id ='.$id)->select();
        $waObj2=new ClaimantModel();
        $rows2= $waObj2->get_obj()->where("wishstory_id =$id and claimant_applystate=1")->select();
        $this->assign('data1', $rows);
        $this->assign('data2', $rows2);
        $this->display();
    }

}
?>