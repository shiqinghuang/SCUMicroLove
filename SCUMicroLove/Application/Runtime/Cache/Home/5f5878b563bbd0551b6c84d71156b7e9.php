<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>微爱川大</title>
	<link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index.css">
</head>
<body>
<!--总体布局S-->
<div class="container">
	<!--页眉设计S-->
	<div id="header">
		<img class="logo" src="/SCUMicroLove/Public/image/logo.png" />
		<div class="title">微爱&nbsp;川大</div>
		<img class="water" src="/SCUMicroLove/Public/image/water.png">
	</div>
	<!--页眉设计E-->
	<!--左边内容S-->
	<div id="part_left">
		<!--导航S-->
		<ul class="nav">
			<li><a href="Index" target="_self">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
			<li><a href="Introduction" target="_self">项目介绍</a></li>
			<li><a href="WishstoryApplication" target="_self">心愿申请</a></li>
			<li><a href="Inquire" target="_self">心愿查询</a></li>
			<li><a href="PhotoandWord" target="_self">感恩的心</a></li>
			<li><a href="ClaimantWord" target="_self">爱心寄语</a></li>
		</ul>
		<!--导航E-->

		<!--联系我们
        <div class="us">
          <div class="zhuban">主办单位 </div>

           <p>学生资助管理中心：<br />
             电话：85401216<br />
              邮箱：xgb-zzzx<br />@scu.edu.cn<br />
             （ 周一至周五 <br />8:00—12:00   14:00-18:00 ）
           </p>
        </div>
       联系我们E -->
   </div>
   <!--左边内容E-->

   <!--主要内容S-->
   <div id="content">
	 <!--图片轮播内容S-->
     <div class="adv_photos">
	   <!--图片-->
       <div class="ph">
         <div class="con_ph">
			 <a href="/SCUMicroLove/Home/index" title = "微爱川大" class="ph2" target="_blank"><img src="/SCUMicroLove/Public/image/home_slider_1.jpg"/></a>
			 <a href="/SCUMicroLove/Home/Introduction" title = "微爱川大" class="ph2" target="_blank"><img src="/SCUMicroLove/Public/image/home_slider_2.jpg"/></a>
			 <a href="/SCUMicroLove/Home/WishstoryApplication" title = "微爱川大" class="ph2" target="_blank"><img src="/SCUMicroLove/Public/image/home_slider_3.jpg"/></a>
			 <a href="/SCUMicroLove/Home/Inquire" title = "微爱川大" class="ph2" target="_blank"><img src="/SCUMicroLove/Public/image/home_slider_4.jpg"/></a>
		 </div>
       </div>
	   
	   <!--按钮-->
       <ul class="btn">
         <li class="hover"></li>
         <li></li>
         <li></li>
         <li></li>
       </ul>		
     </div>
     <!--图片轮播内容E-->

	 <!--心愿内容S-->
     <div class="main">
	   <!--选择按钮内容S-->
       <ul class="sel_btn">
		   <a href="Index"> <li class="hover">未认领</li></a>
		   <a href="Indexn"><li>已认领</li></a>
	   </ul>

	   <!--选择内容S-->
       <div class="con">
		 <!--未认领心愿内容S-->
		 <div class="sel_con">
			<ul>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><strong><a href="Claimant?<?php echo ($vo["wishstory_id"]); ?>">【认领】</a> 【未经申核】&nbsp;&nbsp;&nbsp;&nbsp;</strong>【<?php echo ($vo["postdate"]); ?>】</span>心愿编号:<?php echo ($vo["wishstory_id"]); ?><a href="Preview?id=<?php echo ($vo["wishstory_id"]); ?>"><?php echo ($vo["wishstory_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<!--选页内容S-->
			 <div class="page">
				 <table width="100%" align=center cellspacing=5 cellpadding=5>
					 <tr>
						 <td align=right>
							 <?php if(is_array($total)): $i = 0; $__LIST__ = $total;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["page"]); ?></font>/<?php echo ($td1["pageNum"]); ?>&nbsp;&nbsp;该页<b><?php echo ($td1["numPerPage"]); ?></b>条&nbsp;&nbsp;共<b><?php echo ($td1["pageNum"]); ?></b>页&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
							 <?php if(is_array($page)): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?page=<?php echo ($td2); ?>"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
						 </td>
				 </table>
			 </div>
			<!--选页内容E-->
		 </div>
		 <!--未认领心愿内容E-->

		 <!--已认领心愿内容S-->
		   <div class="sel_con">
			   <ul>
				   <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><strong>【通过审核】&nbsp;&nbsp;</strong>【<?php echo ($vo["postdate"]); ?>】</span>心愿编号No.<?php echo ($vo["wishstory_id"]); ?><a href="Preview?id=<?php echo ($vo["wishstory_id"]); ?>"><?php echo ($vo["wishstory_name"]); ?></a>
					   </li><?php endforeach; endif; else: echo "" ;endif; ?>
			   </ul>
			   <!--选页内容S-->
			   <div class="page">
				   <table width="100%" align=center cellspacing=5 cellpadding=5>
					   <tr>
						   <td align=right>
							   <?php if(is_array($total)): $i = 0; $__LIST__ = $total;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["page"]); ?></font>/<?php echo ($td1["pageNum"]); ?>&nbsp;&nbsp;该页<b><?php echo ($td1["numPerPage"]); ?></b>条&nbsp;&nbsp;共<b><?php echo ($td1["pageNum"]); ?></b>页&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
							   <?php if(is_array($page)): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?page=<?php echo ($td2); ?>"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
						   </td>
				   </table>
			   </div>
			   <!--选页内容E-->
		   </div>
		 <!--已认领心愿内容E-->
       </div>
	   <!--选择内容E-->
     </div>
	 <!--心愿内容E-->
   </div>
   <!--主要内容E-->
	<!--八张照片S-->
	<div class="rollBox">
		<div class="Cont" id="ISL_Cont">
			<div class="ScrCont">
				<!-- 图片列表 begin -->
				<div id="List1">
					<?php if(is_array($picture)): $i = 0; $__LIST__ = $picture;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pic">
							<?php echo ($vo["picture_path"]); ?>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<!-- 图片列表 end -->
				<div id="List2"></div>
			</div>
		</div>
	</div>
	<!--八张照片E-->
   
   
   <!--页脚内容S-->
   <div id="footer">
     <!--页脚文字内容S-->
	 <span><img src="/SCUMicroLove/Public/image/footlogo.jpg" height="70"></span>
     <div class="foot">
       <p>(望江校区)文化活动中心302室</p>
       <p>(江安校区)16舍对面学生资助中心办公室</p>
     </div>
	   <div class="footcenter">
		   <p>Copyright©2015学生工作部学生资助中心版权所有</p>
		   <p>&nbsp电话：85401216 邮箱：xgb-zzzx@scu.edu.cn</p>
	   </div>
	 <!--页脚文字内容E-->
	 <!--页脚友情链接内容S-->
     <div style="float:right; width:200px;padding:25px 0;">
        <select onchange=mbar(this) name="select" id="select">
          <option>----友情链接----</option>
          <option value="http://www.scu.edu.cn">----四川大学----</option>
          <option value="http://jwc.scu.edu.cn/jwc/frontPage.action">----四川大学教务处----</option>
          <option  value=value="http://xsc.scu.edu.cn">----四川大学学工部----</option>
        </select>
     </div>
	 <!--页脚友情链接内容E-->
   </div>
   <!--页脚内容E-->
</div>
<!--总体布局E-->

<!--js特效-->
<script type="text/javascript" src="/SCUMicroLove/Public/js/jquery.js"></script>
<script type="text/javascript" src="/SCUMicroLove/Public/js/index.js"></script>
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
</body>
</html>