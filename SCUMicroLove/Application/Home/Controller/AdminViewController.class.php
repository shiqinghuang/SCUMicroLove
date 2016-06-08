<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/24
 * Time: 22:09
 */
namespace Home\Controller;
use Home\Model\WishstoryApplicationModel;
use Home\Model\ClaimantModel;
use Home\Model\PhotoandWordModel;
use Think\Controller;

class AdminViewController extends Controller
{

    private function integertoStr($rows)
    {
        for($i = 0; $i < count($rows); $i++)
        {
            switch($rows[$i]['stu_claimstate'])
            {
                case 0:
                    $rows[$i]['stu_claimstate'] = '申请审核中';
                    break;
                case 1:
                    $rows[$i]['stu_claimstate'] = '申请不通过';
                    break;
                case 2:
                    $rows[$i]['stu_claimstate'] = "待认领";
                    break;
                case 3:
                    $rows[$i]['stu_claimstate'] = '认领审核中';
                    break;
                case 4:
                    $rows[$i]['stu_claimstate'] = '已认领';
                    break;
                case 5:
                    $rows[$i]['stu_claimstate'] = '如愿以偿';
                    break;
                default: break;
            }
        }
        return $rows;
    }


    public function index()
    {
        //判断用户是否登陆过
        if (!isset($_SESSION['username']) || $_SESSION['username'] == '') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }
        $wishstory_id=$_GET['wishstory_id'];
        $claim_id=$_GET['claim_id'];
        $objA = new WishstoryApplicationModel();
        $objB = new ClaimantModel();
        $objC = new PhotoandWordModel();
        $rowsA = $objA->get_obj()->where("wishstory_id=$wishstory_id")->select();

        $rowsB =array();
        $rowsC =array();

        switch ($rowsA[0]['stu_claimstate']){
            case 0:
            case 1:
            case 2:
                break;
            case 3:
                $rowsB = $objB->get_obj()->where("wishstory_id=$wishstory_id and claimant_applystate=0")->select();
                break;
            case 4:
                $rowsB = $objB->get_obj()->where("wishstory_id=$wishstory_id and claimant_applystate=1")->select();
                break;
            case 5:
                $rowsB = $objB->get_obj()->where("wishstory_id=$wishstory_id and claimant_applystate=1")->select();
                $rowsC = $objC->get_obj()->where("wishstory_id=$wishstory_id")->select();
        }

        $this->assign("data1", $this->integertoStr($rowsA));
        $this->assign("data2", $rowsB);
        $this->assign("data3", $rowsC);

        $this->display();
    }
    
}