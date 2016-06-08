<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/8/11
 * Time: 21:52
 */
namespace Home\Controller;
use Think\Controller;
use Home\Model\PhotoandWordModel;
use Home\Model\ClaimantModel;
class LogInController extends Controller{ /**
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
    public function logIn()
    {
        $arr = array();
        $path = APP_PATH.'Home/Conf/admin.ini';
        $dh = fopen($path, 'r');
        if($dh === false)
        {
            $this->success("文件读取错误！",__ROOT__."/Home/LogIn");
            exit;
        }
        while (!feof($dh))
        {
            $arr[] = trim(fgets($dh));
        }
        fclose($dh);
        if($arr[0] == $_POST['username'] && $arr[1] == $_POST['password']){
            session('username', $arr[0]);
            $this->success("登录成功",__ROOT__."/Home/AdminIndex");
        }else{
            $this->error("用户名或密码错误");
        }
    }

    public   function logOut(){

         session_destroy();
        $this->success("注销成功",__ROOT__."/Home/AdminIndex");
        
    }

}
?>