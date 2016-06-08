<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/8/9
 * Time: 15:12
 */
namespace Home\Controller;
use Think\Controller;
use Home\Model\PhotoandWordModel;
use Home\Model\ClaimantModel;

class IntroductionController extends Controller{ /**
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
        $this->display();
    }
}
?>