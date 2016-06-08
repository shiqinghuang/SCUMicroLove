<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/8/20
 * Time: 14:35
 */
namespace Home\Controller;
use Boris\CLIOptionsHandler;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;
use Home\Model\ClaimantModel;


class CheckClaimantController extends Controller{
    private function integertoStr($rows)
    {
        for($i = 0; $i < count($rows); $i++)
        {
            $id = $rows[$i]['wishstory_id'];
            $rows[$i]['url'] = __ROOT__."/Home/AdminClaimantInfo?ID=$id";
            $rows[$i]['detailview'] = "认领人信息";
            switch($rows[$i]['stu_claimstate'])
            {
                case 0:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=gray>待认领</font>';
                    $rows[$i]['url'] = '';
                    $rows[$i]['detailview'] = "<font color='gray'>认领人信息</font>";
                    break;
                case 1:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=green>审核中</font>';
                    break;
                case 2:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=green>已认领</font>';
                    break;
                case 3:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=red>如愿以偿</font>';
                    break;
                default: break;
            }
        }
        return $rows;
    }

    public function index(){

        //判断用户是否登陆过
        if(!isset($_SESSION['username']) || $_SESSION['username'] =='') {
            $this->success('', __ROOT__.'/Home/LogIn');
            exit;
        }
        $id = $_GET['wishstory_id'];
        $waObj = new ClaimantModel();
        $rows[0] = $waObj->get_obj()->where("wishstory_id =$id and claimant_applystate=0")->select();
        $this->assign('data', $rows[0]);
         $this->display();
    }



    public function changeClaimantState()
    {
        //判断用户是否登陆过
        if(!isset($_SESSION['username']) || $_SESSION['username'] =='') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $obj = new ClaimantModel();
        $waObj = new WishstoryApplicationModel();
        $claim_id = $_POST['claim_id'];
        $wishstory_id=$_POST['wishstory_id'];
        $result=$_POST['result'];

        $res = false;
        if ($result==1)
        {
            $res = $obj->get_obj()->where("claim_id = ".$claim_id)->setField('claimant_applystate', 1);
            if ($res) {
                $res2 = $waObj->get_obj()->where("wishstory_id =$wishstory_id and stu_claimstate=3")->setField('stu_claimstate', 4);
                if ($res2){
                    $this->assign('closeWin',true);
                    $this->success("提交成功");
                }
                else{
                    $obj->get_obj()->where("claim_id = ".$claim_id)->setField('claimant_applystate',0);
                    $this->assign('closeWin',true);
                    $this->error("提交失败");
                }
            }
            else{
                $this->assign('closeWin',true);
                $this->error("提交失败");

            }
         }
        else
        {
            $res = $obj->get_obj()->where("claim_id = ".$claim_id)->setField('claimant_applystate',2);
            if ($res) {
                $res2 = $waObj->get_obj()->where("wishstory_id =$wishstory_id and stu_claimstate=3")->setField('stu_claimstate', 2);
                if ($res2){
                    $this->assign('closeWin',true);
                    $this->success("提交成功");
                }
                else{
                    $obj->get_obj()->where("claim_id = ".$claim_id)->setField('claimant_applystate',0);
                    $this->assign('closeWin',true);
                    $this->error("提交失败");
                }
            }
            else{
                $this->assign('closeWin',true);
                $this->error("提交失败");

            }
        }
    }

    public function delete($claim_id, $wishstory_id)
    {
        //判断用户是否登陆过
        if(!isset($_SESSION['username']) || $_SESSION['username'] =='') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $obj = new ClaimantModel();
        $waObj = new WishstoryApplicationModel();
        $res = $obj->get_obj()->where('claim_id = '.$claim_id)->delete();
        if($res == true)
        {
            $waObj->get_obj()->where("wishstory_id = $wishstory_id")->setField('stu_claimstate', 0);
            $this->success("删除成功",__ROOT__."/Home/AdminCheckClaimant");
        }
        else
        {
            $this->error("删除错误！");
        }
    }
}
?>