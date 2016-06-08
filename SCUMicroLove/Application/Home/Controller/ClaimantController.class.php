<?php
/**
 * Created by PhpStorm.
 * User: delll
 * Date: 2015/9/7
 * Time: 20:58
 */
namespace Home\Controller;
use \Think\Controller;
use Home\Model\ClaimantModel;
use Home\Model\WishstoryApplicationModel;
use Home\Model\PhotoandWordModel;

class ClaimantController extends Controller{
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

   public function index(){
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


    public function add(){
        $id = $_POST['id'];
        if($id == "认领" || $_POST['username'] == "请输入姓名" || $_POST['phone'] == "请输入电话号码" || $_POST['address'] == "请输入地址" )
        {
            $this->error("选项不能为空!");
            exit;
        }
        if($id == "" || $_POST['username'] == "" || $_POST['phone'] == "" || $_POST['address'] == "" )
        {
            $this->error("选项不能为空!");
            exit;
        }
        $data['claimant_name'] = $_POST['username'];
        $data['claimant_phone'] = $_POST['phone'];
        $data['claimant_address'] = $_POST['address'];
        $data['claimant_word'] = $_POST['claimant_word'];
        $data['claimant_applystate'] =0;   //认领审核中
        $data['wishstory_id'] = intval($id);

       // var_dump($data);

        $obj = new ClaimantModel();
        if($obj->get_obj()->where("wishstory_id = $id and claimant_applystate = 1")->select() != null)
        {//心愿有人认领
            $this->error("此心愿已被认领!");
            exit;
        }

        /*修改WishstoryApplication数据表的状态值*/
        $waobj = new WishstoryApplicationModel();
        if($waobj->get_obj()->where("wishstory_id = $id")->count() == 0)
        {
            //心愿有人认领
            $this->error("此心愿不存在!");
            exit;
        }

        $result = $obj->get_obj()->add($data); //添加数据

        if($result == true){
            $waobj->get_obj()->where("wishstory_id = $id")->setField('stu_claimstate', 3); //心愿认领审核中
            $this->success("提交成功",__APP__."/Home/Inquire");
        }else{
            $this->error("提交失败!");
        }
    }
}

?>