<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/14
 * Time: 22:02
 */
namespace Home\Controller;
use Home\Model\PhotoandWordModel;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;
use Home\Model\ClaimantModel;

class PreviewController extends Controller{
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
                    $rows[$i]['stu_claimstate'] = "<a href=\"$str\"> 待认领</a>";
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
        $id = isset($_GET['id'])?intval($_GET['id']):0;  //获取page的值，假如不存在page，那么页数就是0
        $wa = new WishstoryApplicationModel();
        $obj = new PhotoandWordModel();
        /*滚动图片*/
        $arr = $this->getPicturePath($obj->get_obj()->select());
        $this->assign('picture',$arr);
        /* ---------滚动文字---------- */
        

        $rows = $this->integertoStr($wa->get_obj()->where('wishstory_id ='.$id)->select());
        $picture_path = $obj->get_obj()->where('wishstory_id ='.$id)->select();
        if(!empty($picture_path))
        {
            $path = explode('.', $picture_path[0]['picture_path']);
            $length = count($path);
            $picture_path = __ROOT__.'/'.APP_NAME."/Picture/".$id.'.'.$path[$length - 1];
        }
        else $picture_path = __ROOT__."/Public/image/1.jpg";
        $rows[0]['picture_path'] = $picture_path;
        $this->assign('data', $rows);
        $this->display();
    }
}
?>