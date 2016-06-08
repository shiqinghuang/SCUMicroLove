<?php
namespace Home\Controller;
use Home\Model\WishstoryApplicationModel;
use Home\Model\PhotoandWordModel;
use Think\Controller;
use Home\Model\ClaimantModel;

class WishstoryApplicationController extends Controller {
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
        $this->display();
    }
    public function add()
    {
        $data['stu_id'] = $_POST['stu_id'];
        $data['stu_name'] = $_POST['stu_name'];
        $data['stu_gender'] = $_POST['stu_gender'];
        $data['stu_phone'] = $_POST['stu_phone'];
        $data['stu_nation'] = $_POST['stu_nation'];
        $data['stu_nativeplace'] = $_POST['stu_nativeplace'];
        $data['stu_grade'] = $_POST['stu_grade'];
        $data['stu_academy'] = $_POST['stu_academy'];
        $data['stu_major'] = $_POST['stu_major'];
        $data['wishstory_name'] = $_POST['wishstory_name'];
        $data['stu_wishstory'] = $_POST['stu_wishstory'];
        $data['stu_family'] = $_POST['stu_family'];
        $data['stu_claimstate'] = 0; 
        $data['applydate'] = date('Y-m-d');
        $data['querytoken']=$_POST['querytoken'];


        if (empty($data) || empty($data['stu_id']) || empty($data['stu_id']) || empty($data['stu_name']) || empty($data['stu_gender'])
            || empty($data['stu_phone']) || empty($data['stu_nation']) || empty($data['stu_nativeplace']) || empty($data['stu_grade'])
            || empty($data['stu_academy']) || empty($data['wishstory_name']) || empty($data['stu_wishstory']) || empty($data['stu_family']) ||empty($data['querytoken']))
        {
            $this->error("选项不能为空!");
        }


       /*提交至数据库*/
        $waObj = new WishstoryApplicationModel();
        $obj = $waObj->get_obj();//得到数据库对象
        $obj->create($data);     //添加数据
        $result =  $obj->add();




        if($result == true){
            $this->success("提交成功",__ROOT__."/Home/WishstoryApplication");
        }else{
            var_dump($obj);
            $this->error("提交失败!");
            exit;
        }
        /*存入word文档*/
        $dirPath = APP_PATH.'Uploads/'.date('Y-m-d');
        if(!is_dir($dirPath)) mkdir($dirPath);
        $fileName = $dirPath.'/'.date('YmdHis').'.doc';
        $fp = fopen($fileName, 'wb');
        fwrite($fp, "微爱川大申请表\r\n\r\n");
        fwrite($fp, "学号： ".$data['stu_id']."\r\n");
        fwrite($fp, "学生姓名： ".$data['stu_name']."   ");
        fwrite($fp, "性别： ".$data['stu_gender']."   ");
        fwrite($fp, "手机号： ".$data['stu_phone']."\r\n");
        fwrite($fp, "民族： ".$data['stu_nation']."    ");
        fwrite($fp, "出生地： ".$data['stu_nativeplace']."\r\n");
        fwrite($fp, "年级： ".$data['stu_grade']."    ");
        fwrite($fp, "学院： ".$data['stu_academy']."    ");
        fwrite($fp, "专业： ".$data['stu_major']."\r\n");
        fwrite($fp, "家庭情况： ".$data['stu_family']."\r\n");
        fwrite($fp, "心愿名称： ".$data['wishstory_name']."\r\n");
        fwrite($fp, "心愿： \r\n".$data['stu_wishstory']."\r\n");
        fclose($fp);
    }

}

?>