<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>微爱川大</title>
	<link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index.css">
	<link rel="stylesheet" href="/SCUMicroLove/Public/dist/slippry.css">

</head>
<body>
<!--总体布局S-->
<div class="container">
	<!--页眉设计S-->
	<div id="header">
		<div class="headbg"><h1>微爱川大</h1></div>
		<div class="adv">
			<div class="htmleaf-content">
				<ul id="pictures-demo">
					<li>
						<img src="/SCUMicroLove/Public/img/image-1.jpg">
					</li>
					<li>
						<img src="/SCUMicroLove/Public/img/image-2.jpg" >
					</li>
					<li>
						<img src="/SCUMicroLove/Public/img/image-3.jpg">
					</li>
					<li>
						<img src="/SCUMicroLove/Public/img/image-4.jpg">
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--页眉设计E-->

	<!--主要内容S-->
	<div id="content">
		<!--左边内容S-->
		<div id="part_left">
			<!--导航S-->
			<ul class="nav">
				<li><a href="Index" target="_self"><img src="/SCUMicroLove/Public/image/nav1.png" /></a></li>
				<li><a href="Introduction" target="_self"><img src="/SCUMicroLove/Public/image/nav2.png" /></a></li>
				<li><a href="WishstoryApplication" target="_self"><img src="/SCUMicroLove/Public/image/nav3.png" /></a></li>
				<li><a href="Inquire" target="_self"><img src="/SCUMicroLove/Public/image/nav4.png" /></a></li>
				<li><a href="PhotoandWord" target="_self"><img src="/SCUMicroLove/Public/image/nav5.png" /></a></li>
				<li><a href="ClaimantWord" target="_self"><img src="/SCUMicroLove/Public/image/nav6.png" /></a></li>
			</ul>
			<!--导航E-->
		</div>
		<!--左边内容E-->
		<div class="con">
			<a href="#" onclick="window.open('help.html','help', 'toolbar=no,location=no,width=600,height=300,top=200,left=400');return false;">
				<span class="help">?</span>
			</a>
        <span class="search">
			<form method="post" action="/SCUMicroLove/Home/InquireResult">
            <input style="width:165px;" type="text"  name='stuId' id=='stuId'  placeholder="请输入学号"  />
            <input style="width:165px;" type="password" name="queryToken" id="queryToken" placeholder="请输入查询密码" />
            <input class="search" type="submit" value="查询" /></a>
			</form>
        </span>


			<div class="con_left">
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="con_1">
						<div id="state_left">
							<h2>心愿内容</h2>
							<p><?php echo ($vo["stu_wishstory"]); ?>
							</p>
						</div>
						<table width="300" cellpadding="2" cellspacing="2">
							<tr height="25">
								<td width="150"><?php echo ($vo["wishstory_id"]); ?></td>
								<td width="100"><strong>【<?php echo ($vo["postdate"]); ?>】</strong></td>
							</tr>
							<tr height="25">
								<td><span id="tit_left"><?php echo ($vo["wishstory_name"]); ?></span></td>
								<td>如愿以偿</td>
							</tr>
						</table>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>

				<table class="page" cellpadding="5" align=center>
					<tr>
						<td align=right>
							<?php if(is_array($total)): $i = 0; $__LIST__ = $total;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["pageA"]); ?></font>/<?php echo ($td1["pageNumA"]); ?>&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
							<?php if(is_array($page)): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?pageA=<?php echo ($td2); ?>&&pageB=<?php echo ($td1["pageB"]); ?>"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
						</td>
					</tr>
				</table>

			</div>


			<div class="con_right">
				<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="con_1">
						<div id="state_right">
							<h2>心愿内容</h2>
							<p><?php echo ($vo["stu_wishstory"]); ?>
							</p>
						</div>
						<table width="300" cellpadding="2" cellspacing="2">
							<tr height="25">
								<td width="150"><?php echo ($vo["wishstory_id"]); ?></td>
								<td width="100"><strong>【<?php echo ($vo["postdate"]); ?>】</strong></td>
							</tr>
							<tr height="25">
								<td><span id="tit_right"><?php echo ($vo["wishstory_name"]); ?></span></td>
								<td><a href="Claimant?<?php echo ($vo["wishstory_id"]); ?>">我要认领</a></td>
							</tr>
						</table>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>

				<table class="page" cellpadding="5" align=center>
					<tr>
						<td align=right>
							<?php if(is_array($total2)): $i = 0; $__LIST__ = $total2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td3): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td3["pageB"]); ?></font>/<?php echo ($td3["pageNumB"]); ?>&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
							<?php if(is_array($page2)): $i = 0; $__LIST__ = $page2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td4): $mod = ($i % 2 );++$i;?>[<a href="?pageA=<?php echo ($td1["pageA"]); ?>&&pageB=<?php echo ($td4); ?>"><?php echo ($td4); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
						</td>
					</tr>
				</table>




			</div>
		</div>

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
		<select  onchange=mbar(this) name="select" id="select">
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
<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="/SCUMicroLove/Public/dist/slippry.min.js"></script>

<script>
	jQuery('#pictures-demo').slippry({
		//general elements & wrapper
		slippryWrapper: '<div class="sy-box pictures-slider" />', // wrapper to wrap everything, including pager

		// options
		adaptiveHeight: false, // height of the sliders adapts to current slide
		captions: false, // Position: overlay, below, custom, false

		// pager
		pager: false,

		// controls
		controls: false,
		autoHover: false,

		// transitions
		transition: 'kenburns', // fade, horizontal, kenburns, false
		kenZoom: 140,
		speed: 4000 // time the transition takes (ms)
	});
	//心愿内容提示框

	var len1=$(".con_left").find("span").length;
	var oSpan1=$(".con_left span");
	//alert(oSpan1);
	for(i=0; i<len1; i++){
		$(oSpan1[i]).hover(function(){
			//alert("edhl");

			$(this).closest('table').siblings('div').animate({height:"400px"},200);

		},function(){
			$(this).closest('table').siblings('div').animate({height:"0px"},400);
		});
	}

	var len2=$(".con_right").find("span").length;
	var oSpan2=$(".con_right span");
	//alert(len2);
	for(i=0; i<len2; i++){
		$(oSpan2[i]).hover(function(){
			//alert("edhl");
			$(this).closest('table').siblings('div').animate({height:"400px"},200);

		},function(){
			$(this).closest('table').siblings('div').animate({height:"0px"},300);
		});
	}


</script>
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