<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微爱川大——申请审核</title>
<style type="text/css">
body {
	padding: 0 0;
	font-family: "宋体";
	font-size: 14px;
	color:#666;
	background-color: #FFF;
	background: url(/SCUMicroLove/Public/image/green.jpg) fixed;
	background-repeat: no-repeat;
}
img{ border:0px}
    .container {width: 960px;background-color:#FFF; margin:10px auto; }
	.header{ height:124px;}
	
	.photo_1{height:100px; padding-top:10px; padding-left:2px;}
	.photo_1 td{width:109px;height:90px; border:#CCC solid 3px;}
	.content{ width:960px;height:660px;}
	.content .nav ul{width:960px; height:60px; list-style:none;.nav a,.nav a:visited; background: #999}
	.content .nav li{width:160px;height:50px; line-height:50px; float:left;font-family:"微软雅黑";font-size:18px; border-right:groove #FFF 2px; text-align:right; font-weight:200;}
	.content .nav a,.nav a:visited {padding:5px;display: block;text-decoration:none; cursor:pointer;}
	
	.nav a:hover, .nava:active, .nav a:focus {text-decoration: none;}
	.nav a:link {color:#1b1b1b;text-decoration: none;}
	.nav a:hover, .nav a:active, .nav a:focus { background: #4d4d4d;color: #FFF;}
	
	.content .con{ background-color:#F7F7F7}
	.content .con ul{ list-style:none;}
	.content .con a{width:200px}
	.content .con span{ float:right}
	
	.footer{ width:960px; height:70px; background:url(/SCUMicroLove/Public/image/adm2.jpg) no-repeat center; margin-top:10px; clear:left; border:#CF6 dotted 1px }
	.footer .foot{ width:260px;  margin:2px 150px ;color:#CCC;float:left; }
</style> 
</head>

<body>
 <div class="container">
   <div class="header"><img src="/SCUMicroLove/Public/image/adm1.jpg"/></div>
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
   
   <div class="content">
     <div class="nav">
       <ul>
         <li><a href="index.html">申请审核</a></li>
         <li><a href="../CheckClaim/index.html">认领审核</a></li>
         <li><a href="../PhotoAndWord/index.html">图片和寄语管理</a></li>
       </ul>
     </div>
     <div class="con">
       <table width="960" border="1">
           <tr>
             <td width="480">
               <ul>
                   <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<?php echo ($vo["wishstory_id"]); ?><a href="#"><?php echo ($vo["wishstory_name"]); ?></a><span>【已认领】&nbsp;【 <?php echo ($vo["postdate"]); ?> 】</span><br/><?php endforeach; endif; else: echo "" ;endif; ?>
               </ul>
             </td>
           </tr>
         </table>
         
         <table width="95%" align=center cellspacing=3 cellpadding=3>
       <tr> 
         <td align=right>
              页次：<font color=red>1</font>/19&nbsp;&nbsp;每页<b>30</b>&nbsp;&nbsp;共<b>100</b>&nbsp;&nbsp;分页：
              [<font color=red><b>1</b></font>]
              [<a href="">2</a>][<a href="">3</a>]
              [<a href="">4</a>]
              [<a href="#">5</a>]
              [<a href="#">6</a>]
              [<a href="#">7</a>]
              [<a href="#">8</a>]
              [<a href="#">9</a>]
              [<a href="#">10</a>]
              <a href="#">[>>]</a>
              [<a href="#">尾页</a>]
           </td>
    
        </table>
     </div>
   </div>



     <div class="footer">
         <div class="foot">
             <p>(望江校区)文化活动中心302室</p>
             <p>(江安校区)16舍对面学生资助中心办公室</p>
         </div>
         <div style="float:right; width:200px;padding:25px 0;">
             <select onchange=mbar(this) name="select" id="select">
                 <option>----友情链接----</option>
                 <option value="http://www.scu.edu.cn">----四川大学----</option>
                 <option value="http://jwc.scu.edu.cn/jwc/frontPage.action">----四川大学教务处----</option>
                 <option  value="http://xsc.scu.edu.cn">----四川大学学工部----</option>
             </select>
         </div>
     </div>
 </div>
</body>
</html>

<script type="text/javascript">

    function mbar(sobj) {
        var docurl =sobj.options[sobj.selectedIndex].value;
        if (docurl != "") {
            open(docurl,'_blank');
            sobj.selectedIndex=0;
            sobj.blur();
        }
    }

</script>