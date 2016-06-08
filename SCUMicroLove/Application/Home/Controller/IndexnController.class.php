<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/7/30
 * Time: 20:45
 */
namespace Home\Controller;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;
use Home\Model\ClaimantModel;
use Home\Model\PhotoandWordModel;

class IndexnController extends Controller
{
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
        /* ---------滚动文字---------- */
        //感恩有你
        $this->assign("data1", $rows);
        //爱心寄语
        $obj = new ClaimantModel();
        $rows = $obj->get_obj()->select();
        $this->assign("data2", $rows);

        /*未认领*/
        static $num = 10;
        $obj = new WishstoryApplicationModel();
        /*未认领*/
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;  //获取page的值，假如不存在page，那么页数就是1。
        //获取相应页数所需要显示的数据
        $pageNum = ceil($obj->get_obj()->where('stu_claimstate = 5')->count() / $num);   //总页数
        if($pageNum == 0) $pageNum = 1;
        //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
        If ($page > $pageNum || $page < 0) {
            Echo "Error : Can Not Found The page!";
            Exit;
        }
        //获取limit的第一个参数的值 offset ，假如第一页则为(1-1)*10=0,第二页为(2-1)*10=10。
        //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
        $offset = ($page - 1) * $num;
        $rows = $obj->get_obj()->where('stu_claimstate =5')->order('wishstory_id desc')->limit($offset, $num)->select();
        //echo count($rows1), $pageNum1;
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