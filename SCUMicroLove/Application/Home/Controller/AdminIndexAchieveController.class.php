<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/8/20
 * Time: 14:35
 */
namespace Home\Controller;
use Home\Model\ClaimantModel;
use Home\Model\PhotoandWordModel;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;


class AdminIndexAchieveController extends Controller{
    public function index(){
        //判断用户是否登陆过
        if(!isset($_SESSION['username']) || $_SESSION['username'] =='') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }

        static $num = 16;
        $keyword=$_GET['keyword'];
        if ($keyword!=null){
            /*申请审核认领*/
            $obj = new WishstoryApplicationModel();
            $page = isset($_GET['page']) ? intval($_GET['page']) : 1;  //获取page的值，假如不存在page，那么页数就是1
            //获取相应页数所需要显示的数据
            $pageNum = ceil($obj->get_obj()->where("wishstory_id =$keyword and stu_claimstate=5")->count() / $num);   //总页数
            if($pageNum == 0) $pageNum = 1;
            //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
            If ($page > $pageNum || $page < 0) {
                Echo "Error : Can Not Found The page!";
                Exit;
            }
            //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
            $offset = ($page - 1) * $num;
            $rows = $obj->get_obj()->where("wishstory_id =$keyword and stu_claimstate=5")->order('wishstory_id asc')->limit($offset, $num)->select();
        }
        else{
            /*申请审核认领*/
            $obj = new WishstoryApplicationModel();
            $page = isset($_GET['page']) ? intval($_GET['page']) : 1;  //获取page的值，假如不存在page，那么页数就是1
            //获取相应页数所需要显示的数据
            $pageNum = ceil($obj->get_obj()->where("stu_claimstate=5")->count() / $num);   //总页数
            if($pageNum == 0) $pageNum = 1;
            //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
            If ($page > $pageNum || $page < 0) {
                Echo "Error : Can Not Found The page!";
                Exit;
            }
            //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
            $offset = ($page - 1) * $num;
            $rows = $obj->get_obj()->where("stu_claimstate =5")->order('wishstory_id asc')->limit($offset, $num)->select();

        }
        $count=count($rows);
        for ($i=0;$i<$count;$i++){
            $wishstory_id=$rows[$i]["wishstory_id"];
            $obj2=new PhotoandWordModel();
            $photoandwordrows=$obj2->get_obj()->where("wishstory_id=$wishstory_id")->select();
            if($photoandwordrows[0]['stu_word'] ==null || $photoandwordrows[0]['picture_path']==null)
                $rows[$i]['upload']= " <a href=\"AdminPhotoandWord?wishstory_id=$wishstory_id\"><input type=\"button\" value=\"上传\"></a>";
            else
                $rows[$i]['upload']= "<input type=\"button\" value=\"上传\"  disabled='disabled'>";
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

    public   function logOut(){
        session_destroy();
        $this->success("注销成功",__ROOT__."/Home/AdminIndex");
    }
}
?>