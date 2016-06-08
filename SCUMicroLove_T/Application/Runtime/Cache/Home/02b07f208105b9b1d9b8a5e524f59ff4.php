<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大管理平台——新闻管理</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index_adm.css">

</head>

<body>
<!--总体布局S-->
<div class="container">
    <!--页眉设计S-->
    <div id="header"><img src="/SCUMicroLove/Public/image/adm.jpg" width="960px" height="90px" />
        <p>微爱川大管理平台——新闻管理</p>
    </div>
    <!--页眉设计E-->
    <!--八张照片S-->
    <div id="top">
        <ul class="top_photos">
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
        </ul>
    </div>
    <!--八张照片E-->

    <!--主要内容S-->
    <div id="content">
        <!--选项按钮内容S-->
        <ul class="sel_btn">
            <li class="hover"><a href="AdminIndex">申请审核</a></li>
            <li><a href="AdminCheckClaimant">认领审核</a></li>
            <li><a href="AdminPhotoandWord">图片和寄语管理</a></li>
            <li><a href="AdminNews">新闻管理</a></li>
        </ul>
        <!--选项按钮内容E-->
        <div class="main">
            <!--申请管理内容S-->
            <div class="admincon">
                <!--选项按钮内容E-->
                <form  id="form" name="form" action="/SCUMicroLove/Home/AdminNews/add" method="post">
                    <p>
                        新闻名称:
                        <input type="text" name="news_name" id="textfield" />
                    </p>
                    <p>
                        新闻地址:
                        <input type="url" name="news_address"  id="url" />
                    </p>
                    <p class="button">
                        <input type="submit" name="button" id="button" value="提交" />
                    </p>
                </form>
            </div>
            <!--申请管理内容S-->
        </div>

    </div>
    <!--主要内容E-->

    <!--页脚内容S-->
    <div id="footer">
        <!--页脚文字内容S-->
        <span><img src="/SCUMicroLove/Public/image/footlogo.jpg" height="70"></span>
        <div class="footleft">
            <p>(望江校区)文华活动中心302室</p>
            <p>(江安校区)16舍对面学生资助中心办公室</p>
        </div>

        <div class="footcenter">
            <p>Copyright©2015学生工作部学生资助中心版权所有</p>
            <p>&nbsp电话：85401216 邮箱：xgb-zzzx@scu.edu.cn</p>
        </div>
        <!--页脚文字内容E-->
        <!--页脚友情链接内容S-->
        <div style="float:right; width:180px;padding:25px 0;">
            <select onchange=mbar(this) name="select" id="select">
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
<script type="text/javascript" src="/SCUMicroLove/Public/js/index_admin.js"></script>
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