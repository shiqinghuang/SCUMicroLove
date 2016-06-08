<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大——心愿详细查询</title>
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
    <!--主要内容S-->
    <div id="content">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="yulan">
            <h2><center>心愿内容</center></h2>
            <div class="title">
                <br>
                <ul>
                    <li>
                        心愿编号：
                    </li>
                    <span>  <?php echo ($vo["wishstory_id"]); ?> </span><br>
                    <li>
                        发表日期：
                    </li>
                    <span>【 <?php echo ($vo["postdate"]); ?> 】</span><br>
                    <li>
                        心愿名称：
                    </li>
                    <span>【 <?php echo ($vo["wishstory_name"]); ?> 】</span><br>
                </ul>
                </div>
            <div class="imgs"><img src= <?php echo ($vo["picture_path"]); ?>  width="300"; height="200"; /></div>
            <h3>心愿故事：</h3>
            <p>
                <?php echo ($vo["stu_wishstory"]); ?>
            </p>
            <span id="ztai"><?php echo ($vo["stu_claimstate"]); ?></span>

        </div><?php endforeach; endif; else: echo "" ;endif; ?>
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