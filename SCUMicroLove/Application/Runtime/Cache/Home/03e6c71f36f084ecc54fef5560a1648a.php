<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大</title>
	<link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index.css">
	<link rel="stylesheet" href="/SCUMicroLove/Public/dist/slippry.css">
</head>
<body onLoad="HidePasswordFail()">
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

		 <div class="apply_con">
			<div class="apply">“微爱川大”心愿申请表</div>
			<form id="form1" name="form1" method="post" action="">
				<table>
					<tr>
						<td width="10%">姓名:</td>
						<td width="20%"><input type="text"  name="stu_name" id = "stu_name"  /></td>
						<td width="8%">性别:</td>
						<td width="50%">
							<select name="stu_gender">
								<option value="男" selected="selected">男</option>
								<option value="女">女</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>民族:</td>
						<td><input type="text" name="stu_nation" id="stu_nation" /></td>
						<td>籍贯:</td>
						<td><input type="text" name="stu_nativeplace" id="stu_nativeplace" /></td>
					</tr>
					<tr>
						<td>年级:</td>
						<td><input type="text" name="stu_grade" /></td>
						<td>学院:</td>
						<td><input type="text" name="stu_academy" id="stu_academy"  /></td>
					</tr>
					<tr>
						<td>专业:</td>
						<td><input type="text" name="stu_major" id="stu_major" /></td>
						<td>学号:</td>
						<td><input type="text" name="stu_id" id="stu_id" /></td>
					</tr>
					<tr>
						<td>联系方式:</td>
						<td><input type="text" name="stu_phone" id="stu_phone" /></td>
					</tr>
					<tr>
						<td>查询密码:</td>
						<td><input type="password" name="querytoken" id="querytoken" calss="querytoken" /></td>		
					</tr>
					<tr>
						<td>确认密码:</td>
						<td><input type="password" name="requerytoken" id="requerytoken" calss="requerytoken" /></td>
						<td colspan="2" style="color:red"><div id="passwordfail">密码输入不一致</div></td>
					</tr>
					<tr><td colspan="4">心愿（物品及数值）:</td></tr>
					<tr>
						<td colspan="4"><textarea style="height:50px;" name="wishstory_name" id="wishstory_name"></textarea></td>
					</tr>
					<tr><td colspan="4">家庭基本情况:</td></tr>
					<tr>
						<td colspan="4"><textarea style="height:120px;" name="stu_family" id="stu_family" ></textarea></td>
					</tr>
					<tr><td colspan="4">心愿故事:</td></tr>
					<tr>
						<td colspan="4"><textarea style="height:120px;"  name="stu_wishstory" id="stu_wishstory"></textarea></td>
					</tr>
					<tr>
						<td colspan="2"> <input type="reset" class="but" name="button"   value="重置" /></td>
						<td colspan="2"> <input type="button" class="but" name="button" id="button"   onclick="Submit()"   value="提交" /></td>
					</tr>
				</table>
			</form>
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
          <option  value="http://xsc.scu.edu.cn">----四川大学学工部----</option>
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
        // general elements & wrapper
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
</script>

 <script type="text/javascript">


   function HidePasswordFail(){

          $("#passwordfail").hide();
   }
	$(function(){
		$("#requerytoken").blur(function(){
			if($(this).val()==$("#querytoken").val()){
				$("#passwordfail").hide();
			} else {
				$("#passwordfail").show();
			}
		})	
	})

	 function mbar(sobj) {
		 var docurl =sobj.options[sobj.selectedIndex].value;
		 if (docurl != "") {
			 open(docurl,'_blank');
			 sobj.selectedIndex=0;
			 sobj.blur();
		 }
	 }

	 function textCounter(field, countfield, maxlimit) {
		 // 函数，3个参数，表单名字，表单域元素名，限制字符；
		 if (field.value.length > maxlimit) {
			 //如果元素区字符数大于最大字符数，按照最大字符数截断
			 //event.returnValue = false;
			 fieldfield.value = field.value.substring(0, maxlimit);
		 }
		 else {
			 //在记数区文本框内显示剩余的字符数；
			 countfield.value = maxlimit - field.value.length;
		 }
	 }
	 
	 

	 function Submit() {
		var myform=document.form1;
		 if(  !check('stu_name'))
				 return;
		 else if(!check('stu_nation'))
				 return ;
		  else if(! check('stu_nativeplace'))
				 return;
		 else if(! check('stu_academy'))
			 return;
		 else if(! check('stu_major'))
			 return;
		 else if(!check("querytoken"))
				 return;
		 else if(!  check('stu_id'))
			 return;
		 else if(! check('stu_phone'))
			 return;
		 else if(! check('stu_family'))
			 return;
		 else if(! check('wishstory_name'))
			 return;
		 else if(! check('stu_wishstory'))
				return ;
         else if(!checkToken())
                 return;
		 else {
			 myform.action="/SCUMicroLove/Home/WishstoryApplication/add";
			 myform.submit();
		 }


	 }
	 
	 function check(str)
	 {
		 var strReg="";
		 var r;
		 var strText= document.getElementById(str).value;
		 if(strText=="" || strText==null)
		 {
			 alert("选项不能为空！");
			 return false;
		 }
		 return true;
	 }
     function checkToken() {
         var strToken= document.getElementById("querytoken").value;
         var strreToken=document.getElementById("requerytoken").value
         if(strToken!==strreToken)
         {
             alert("密码输入不一致！");
             return false;
         }
         return true;
     }

 </script>

</body>
</html>