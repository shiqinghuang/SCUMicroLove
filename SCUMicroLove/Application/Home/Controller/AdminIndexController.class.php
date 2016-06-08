<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/8/20
 * Time: 14:35
 */
namespace Home\Controller;
use Home\Model\ClaimantModel;
use \Think\Controller;
use Home\Model\WishstoryApplicationModel;


class AdminIndexController extends Controller{
    public function index(){
        //判断用户是否登陆过
        if(!isset($_SESSION['username']) || $_SESSION['username'] =='') {
            $this->success('请先登录', __ROOT__ . '/Home/LogIn');
            exit;
        }


        static $num = 16;
        $keyword=$_GET['keyword'];
        if ($keyword!=null){

            $obj = new WishstoryApplicationModel();
            $sql="wishstory_id =$keyword and stu_claimstate <5" ;
 /* OR stu_id  like '%$keyword%' OR  stu_name  =%$keyword% OR stu_gender =$keyword
            OR stu_phone  = $keyword OR stu_nation =$keyword OR stu_nativeplace   =$keyword OR stu_grade  =$keyword
            OR stu_academy   =$keyword "
  */
            $page = isset($_GET['page '])? intval($_GET['page']) : 1;  //获取page的值，假如不存在page，那么页数就是1
            //获取相应页数所需要显示的数据
            $pageNum = ceil($obj->get_obj()->where( $sql)->count() / $num);   //总页数
            if($pageNum == 0) $pageNum = 1;
            //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
            If ($page > $pageNum || $page < 0) {
                Echo "Error : Can Not Found The page!";
                Exit;
            }
            //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
            $offset = ($page - 1) * $num;
            $rows = $obj->get_obj()->where( $sql)->order('wishstory_id asc')->limit($offset, $num)->select();
        }
        else {

            /*申请审核认领*/
            $obj = new WishstoryApplicationModel();
            $page = isset($_GET['page']) ? intval($_GET['page']) : 1;  //获取page的值，假如不存在page，那么页数就是1
            //获取相应页数所需要显示的数据
            $pageNum = ceil($obj->get_obj()->where("stu_claimstate<5")->count() / $num);   //总页数
            if ($pageNum == 0) $pageNum = 1;
            //假如传入的页数参数apge 大于总页数 pagenum，则显示错误信息
            If ($page > $pageNum || $page < 0) {
                Echo "Error : Can Not Found The page!";
                Exit;
            }
            //(传入的页数-1) * 每页的数据 得到limit第一个参数的值
            $offset = ($page - 1) * $num;
            $rows = $obj->get_obj()->where("stu_claimstate <5")->order('wishstory_id asc')->limit($offset, $num)->select();
        }
        $count_rows=count($rows);
        for ($i = 0; $i <$count_rows; $i++) {
            $wishstory_id=$rows[$i]["wishstory_id"];
            switch ($rows[$i]["stu_claimstate"]){
                case 0:
                    $rows[$i]['applyStatus']="<input type=\"button\" value=\"申请审核\"    onclick=\"window.open('CheckWish?wishstory_id=$wishstory_id','first', 'toolbar=no,location=no,width=500,height=300,top=200,left=400');return false;\">";
                    $rows[$i]['claimantStatus']="<input type=\"button\" value=\"认领审核\" disabled='disabled'>";
                    $rows[$i]['achieveStatus']="<input type=\"button\" value=\"如愿以偿\"  disabled='disabled'>";
                    break;
                case 1:
                case 2:
                    $rows[$i]['applyStatus']="<input type=\"button\" value=\"申请审核\"     disabled='disabled'>";
                    $rows[$i]['claimantStatus']="<input type=\"button\" value=\"认领审核\" disabled='disabled'>";
                    $rows[$i]['achieveStatus']="<input type=\"button\" value=\"如愿以偿\"  disabled='disabled'>";
                    break;
                case 3:
                    $obj=new ClaimantModel();
                 $claimrows = $obj->get_obj()->where("wishstory_id= $wishstory_id and claimant_applystate=0")->select();
                 if (count($claimrows)>0)
                    $rows[$i]['claimantname']=$claimrows[0]['claimant_name'];
                 else
                     $rows[$i]['claimantname']="";
                    $rows[$i]['applyStatus']="<input type=\"button\" value=\"申请审核\"   disabled='disabled'>";
                    $rows[$i]['claimantStatus']="<input type=\"button\" value=\"认领审核\" onclick=\"window.open('CheckClaimant?wishstory_id=$wishstory_id','second', 'toolbar=no,location=no,width=400,height=250,top=200,left=400');return false;\">";
                    $rows[$i]['achieveStatus']="<input type=\"button\" value=\"如愿以偿\" disabled='disabled'>";

                    break;
                case 4:
                     $claimrows = $obj->get_obj()->where("wishstory_id= $wishstory_id and claimant_applystate=1")->select();
                if (count($claimrows)>0)
                    $rows[$i]['claimantname']=$claimrows[0]['claimant_name'];
                else
                    $rows[$i]['claimantname']="";

                $rows[$i]['applyStatus']="<input type=\"button\" value=\"申请审核\"   disabled='disabled'>";
                $rows[$i]['claimantStatus']="<input type=\"button\" value=\"认领审核\" disabled='disabled'>";
                $rows[$i]['achieveStatus']="<input type=\"button\" value=\"如愿以偿\" onclick=\"window.open('CheckAchieve?wishstory_id=$wishstory_id&claimant_id=','first', 'toolbar=no,location=no,width=500,height=300,top=200,left=400');return false;\">";

                break;
            }
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
        $this->success("登录成功",__ROOT__."/Home/AdminIndex");
    }
}
?>