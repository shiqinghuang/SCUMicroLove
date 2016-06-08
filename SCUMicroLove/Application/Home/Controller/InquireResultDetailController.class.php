<?php
/**
 * Created by PhpStorm.
 * User: shiqinghuang
 * Date: 2016/5/19
 * Time: 17:10
 */

namespace Home\Controller;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;
use Home\Model\ClaimantModel;
class  InquireResultDetailController extends Controller{
    private function integertoStr($rows)
    {
        for($i = 0; $i < count($rows); $i++)
        {
            $id = $rows[$i]['wishstory_id'];
            $str = "Claimant?$id";
            switch($rows[$i]['stu_claimstate'])
            {
                case 0:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=green>申请审核中</font>';
                    break;
                case 1:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=green>申请不通过</font>';
                    break;
                case 2:
                    $rows[$i]['stu_claimstate'] = "<font size=\"2px\" color=green>待认领</font>";
                    break;
                case 3:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=green>认领审核中</font>';
                    break;
                case 4:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=green>已认领</font>';
                    break;
                case 5:
                    $rows[$i]['stu_claimstate'] = '<font size="2px" color=green>如愿以偿</font>';
                    break;
                default: break;

            }
        }
        return $rows;
    }

    public function index()
    {

        $stuId=session('stuId');
        $queryToken=session('queryToken');
        $wishstory_id=$_GET['wishstory_id'];

        if($stuId!=null && $queryToken!=null){
        $obj = new WishstoryApplicationModel();

        $rowsA= $this->integertoStr($obj->get_obj()->where("stu_id='$stuId' AND wishstory_id = '$wishstory_id'" )->select());
            if (count($rowsA)>0) {
                $obj = new ClaimantModel();
                $rowsB = $obj->get_obj()->where("wishstory_id = '$wishstory_id'")->select();
                $rowsB[0]['claimant_name']=mb_substr( $rowsB[0]['claimant_name'],0,1,"utf-8")."**";
                $this->assign("data2",$rowsB);
            }
            else{
                $this->error("错误");
            }
        $this->assign("data1", $rowsA);

        }
        else{
            $this->error("错误");
        }

        $this->display();

    }
}

?>