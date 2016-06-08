<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微爱川大</title>
<style type="text/css">
body {
	padding: 0 0;
	font-family: "宋体";
	font-size: 12px;
	color:#666;
	background-color: #FFF;
	background: url(image/green.jpg) fixed;
	background-repeat: no-repeat;
}
img{ border:0}
    .container {width: 960px;background-color:#FFF; margin:10px auto; }
	.header{ height:124px;}
	.photo_1{height:100px; padding-top:10px; padding-left:2px;}
	.photo_1 td{width:109px;height:90px; border:#CCC solid 3px}
	.nav{width:160px; margin:10px 0; float:left;}
	.nav_1 ul{list-style:none; margin-left:-42px; margin-top:-5px;}
	.nav_1 li{padding-top:5px; text-align:center; font-family:"微软雅黑"; font-size:17px;}
	.nav_1 a,.nav a:visited {padding:5px 0px; display: block;  width: 160px; text-decoration: none; background: #C6D580}
	.nav_1 a:hover, .nava:active, .nav a:focus {text-decoration: none;}
	.nav_1 a:link {color: #42413C;text-decoration: none;}
	.nav_1 a:hover, .nav a:active, .nav a:focus { background: #ADB96E;color: #FFF;}
	.nav .love{height:180px; border:#CCC solid 2px; margin-bottom:10px;overflow:hidden; }
	.us{ width:156px; border-left:#CCC solid 2px;border-right:#CCC solid 2px;}
	.us .zhuban, .us .admin{ width:156px; height:30px; text-align:center; line-height:30px; background-color:#FC0;font-family:  "微软雅黑";font-size:16px; border-top:#CCC solid 2px;border-bottom:#CCC solid 2px}
	.content{ background:#F7F7F7; width:780px; float:left; margin:10px 0 10px 20px;ont-family:  "微软雅黑";font-size:14px; color:#333}
	.content .apply{height:40px; line-height:40px; background:url(image/111.jpg) no-repeat; text-align:center; font-family:  "微软雅黑";font-size:20px; color:#333; border:1px #999999 solid; border-bottom:0;}
	
	.footer{ width:960px; height:70px; background:url(image/foot.jpg) no-repeat center; margin-top:10px; clear:left; border:# CF6 dotted 1px }
	.footer .foot{ width:250px;  margin:5px 150px ;;float:left; }
</style> 
</head>

<body>
 <div class="container">
   <div class="header"><img src="image/11.jpg"/></div>
   <div class="photo_1">
     <table>
     <tr>
       <td>109*70</td>
       <td>照片</td>
       <td>照片</td>
       <td>照片</td>
       <td>照片</td>
       <td>照片</td>
       <td>照片</td>
       <td>照片</td>
     </tr>
     </table>
   </div>
   <div class="nav">
     <div class="nav_1">
       <ul >
         <li><a href="index.html" target="_self">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
         <li><a href="introduction.html" target="_self">项目介绍</a></li>
         <li><a href="apply.html" target="_self">心愿申请</a></li>
         <li><a href="inquire.html" target="_self">心愿查询</a></li>
         <li><a href="news.html" target="_self">新闻公告</a></li>
         <li><a href="thanks_heart .html" target="_self">感恩的心</a></li>
       </ul>
     </div>
     <div class="love"><a href="heart_word.html" target="_self"><img src="image/love.jpg"/></a>
       <ul style="list-style: inside; padding:0px; margin-left:-2px; margin-top:3px;">
         <p><li> 非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
         </li> </p>
         <P><li>在学校里安心地追求自己的理想和目标，努力实现自己的人生定航</li></P>
         
       </ul>
     </div>
     <div class="us">
       <div class="zhuban">主办单位 </div>
     
        <p>学生资助管理中心：<br />
          电话：85401216<br />
 		  邮箱：xgb-zzzx@scu.edu.cn<br />
 		 （ 周一至周五 8:00—12:00   14:00-18:00 ）
        </p>
       <div class="admin"><a href="administrator/login.html" target="_self">管理员登陆</a></div>
     </div>
   </div>
   
   <div class="content">
     <div class="apply">“微爱川大”心愿申请表</div>
     <form id="form1" name="form1" method="post" action="">
       <table width="780" border="1">
         <tr>
           <td width="73">姓名</td>
           <td width="168">
           <input type="text" name="textfield" style="border-style:none; border:0;" /></td>
           <td width="82">性别;</td>
           <td width="168">
           <input type="text" name="textfield" style="border:0"/></td>
           <td width="81">民族</td>
           <td width="168">
           <input type="text" name="textfield" style="border:0" /></td>
         </tr>
         <tr>
           <td>籍贯</td>
           <td>
           <input type="text" name="textfield" style="border:0" /></td>
           <td>年级</td>
           <td>
           <input type="text" name="textfield" style="border:0" /></td>
           <td>学院</td>
           <td>
           <input type="text" name="textfield" style="border:0" /></td>
         </tr>
         <tr>
           <td>专业</td>
           <td>
           <input type="text" name="textfield" style="border:0" /></td>
           <td>学号</td>
           <td><label for="textfield"></label>
           <input type="text" name="textfield" style="border:0" /></td>
           <td>联系方式</td>
           <td><label for="textfield"></label>
           <input type="text" name="textfield" style="border:0" /></td>
         </tr>
       </table>
       <table style="width:780px;" border="1">
         <tr height="20px">
           <td>家庭基本情况：</td>
         </tr>
         <tr>
           <td><textarea name="textarea" id="textarea" cols="105" rows="10" style=" width:760px;height:150px;border: 0; overflow: auto;resize:none; text-indent:20px;"></textarea></td>
         </tr>
         <tr>
           <td height="20px">心愿（物品及数值）：</td>
         </tr>
         <tr>
           <td><textarea name="textarea2" id="textarea2" cols="105" rows="10" style=" width:760px;height:100px;border: 0; overflow: auto;resize:none; resize:none; text-indent:20px;"></textarea></td>
         </tr>
         <tr>
           <td height="20px">心愿故事（400—800字）：</td>
         </tr>
         <tr>
           <td><textarea name="textarea3" id="textarea3" cols="105" rows="10" style="width:760px;height:250px;border: 0; overflow: auto; resize:none; text-indent:20px;"></textarea></td>
         </tr>
         <tr>
           <td style=" text-align:right"><input type="button" name="button" id="button" value="保存" />
           <input type="submit" name="submit2" id="submit2" value="提交" /></td>
         </tr>
       </table>
     </form>
   </div>
   
   <div class="footer">
     <div class="foot">
       <p>(望江校区)文化活动中心302室</p>
          <p>(江安校区)16舍对面学生资助中心办公室</p>
     </div>
     <div style="float:right; width:200px;padding:25px 0;">
        <select name="select" id="select">
          <option selected="selected">----友情链接----</option>
          <option value="http://www.scu.edu.cn">----四川大学----</option>
        
          <option value="http://jwc.scu.edu.cn/jwc/frontPage.action">----四川大学教务处----</option>
          <option  value=value="http://xsc.scu.edu.cn">----四川大学学工部----</option>
        </select>
      </div>
   </div>
 </div>
</body>
</html>