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
use Home\Model\PhotoandWordModel;
class InquireResultController extends Controller{
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

    private function getPicturePath($rows)
    {
        for($i = 0; $i < count($rows); $i++)
        {
            $path = $rows[$i]['picture_path'];
            $str = "Preview?id=".$rows[$i]['wishstory_id'];
            $rows[$i]['picture_path'] = "<a href=$str><img src=$path width='110' height='90' alt='图片' style='cursor:hand;'/></a>";
        }
        $pictureCount=count($rows);
        for ($i=$pictureCount;$i<8;$i++){
            $path =__ROOT__."/Public/image/$i.jpg";
            $rows[$i]['picture_path'] = "<img src=$path width='110' height='90' alt='图片' style='cursor:hand;'/>";
        }
        return $rows;
    }

    public function index()
    {
        /*滚动图片*/
        $obj = new PhotoandWordModel();
        $rows = $this->getPicturePath($obj->get_obj()->select());
        $this->assign('picture',$rows);

        /*查询结果 */

        $stuId=$_POST['stuId'];
        $queryToken=$_POST['queryToken'];
        static $num = 10;

        $obj = new WishstoryApplicationModel();

        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;  //获取page的值，假如不存在page，那么页数就是1。
        //获取相应页数所需要显示的数据
        $pageNum = ceil($obj->get_obj()->where("stu_id = '$stuId' AND querytoken='$queryToken'")->count() / $num);   //总页数
        if($pageNum == 0) $pageNum = 1;
        //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
        If ($page > $pageNum || $page < 0) {
            Echo "Error : Can Not Found The page!";
            Exit;
        }
        //获取limit的第一个参数的值 offset ，假如第一页则为(1-1)*10=0,第二页为(2-1)*10=10。
        //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
        $offset = ($page - 1) * $num;
        $rows = $this->integertoStr( $obj->get_obj()->where("stu_id = '$stuId' AND querytoken='$queryToken'")->order('wishstory_id desc')->limit($offset, $num)->select());
        //echo count($rows1), $pageNum1;

        if (count($rows)>0){
            session('stuId',$stuId);
            session('queryToken',$queryToken);
        }
        $arr = array();
        $arr[0]['page'] = $page;
        $arr[0]['pageNum'] = $pageNum;
        $arr[0]['numPerPage'] = count($rows);

        $pageArr = array();
        for ($i = 1; $i <= $pageNum; $i++) {
            $pageArr[] = $i;
        }
        $this->assign("data", $rows);
        $this->assign("total", $arr);
        $this->assign("page", $pageArr);

        $this->display();
    }
}

?>