<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/8/11
 * Time: 20:49
 */
namespace Home\Controller;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;
use Home\Model\ClaimantModel;
use Home\Model\PhotoandWordModel;
class InquireController extends Controller{
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
    /**
     *index
     */
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


        static $numA = 5;
        $obj = new WishstoryApplicationModel();
        $pageA=isset($_GET['pageA'])?intval($_GET['pageA']):1;  //获取page的值，假如不存在page，那么页数就是1。
        $pageNumA = ceil($obj->get_obj()->where('stu_claimstate =5')->count()/$numA);                 //总页数
        if($pageNumA== 0) $pageNumA = 1;
        //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
        If($pageA>$pageNumA || $pageA < 0){
            Echo "Error : Can Not Found The page .";
            Exit;
        }
        $offsetA=($pageA-1)*$numA;         //获取limit的第一个参数的值 offset ，假如第一页则为(1-1)*10=0,第二页为(2-1)*10=10。
        //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
        //获取相应页数所需要显示的数据
        $rowsA = $this->integertoStr($obj->get_obj()->where('stu_claimstate = 5')->order('wishstory_id desc')->limit($offsetA, $numA)->select());
        $this->assign("data",$rowsA);

        $arr = array();
        $arr[0]['pageA'] = $pageA;
        $arr[0]['pageNumA'] = $pageNumA;
        $arr[0]['numPerPage'] = count($rowsA);

        $pageArr = array();
        for($i = 1; $i <= $pageNumA; $i++)
        {
            $pageArr[] = $i;
        }
        $this->assign("page", $pageArr);



        static $numB= 5;
        $obj = new WishstoryApplicationModel();
        $pageB=isset($_GET['pageB'])?intval($_GET['pageB']):1;  //获取page的值，假如不存在page，那么页数就是1。
        $pageNumB = ceil($obj->get_obj()->where('stu_claimstate=2')->count()/$numB);                 //总页数
        if($pageNumB== 0) $pageNumB = 1;
        //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
        If($pageB>$pageNumB || $pageB < 0){
            Echo "Error : Can Not Found The page .";
            Exit;
        }
        $offsetB=($pageB-1)*$numB;         //获取limit的第一个参数的值 offset ，假如第一页则为(1-1)*10=0,第二页为(2-1)*10=10。
        //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
        //获取相应页数所需要显示的数据
        $rowsB = $this->integertoStr($obj->get_obj()->where('stu_claimstate = 2')->order('wishstory_id desc')->limit($offsetB, $numB)->select());
        $this->assign("data2",$rowsB);

        $arr[0]['pageB'] = $pageB;
        $arr[0]['pageNumB'] = $pageNumB;
        $arr[0]['numPerPageB'] = count($rowsB);

        $this->assign("total", $arr);
        $this->assign("total2", $arr);

        $pageArr = array();
        for($i = 1; $i <= $pageNumB; $i++)
        {
            $pageArr[] = $i;
        }
        $this->assign("page2", $pageArr);
        $this->display();
    }
}
?>