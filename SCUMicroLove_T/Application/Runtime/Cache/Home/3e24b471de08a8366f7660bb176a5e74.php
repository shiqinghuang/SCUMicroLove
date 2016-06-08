<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index.css">

</head>

<body>
<!--总体布局S-->
<div class="container">
    <!--页眉设计S-->
    <div id="header"></div>
    <!--页眉设计E-->
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
    <!--左边内容S-->
    <div id="part_left">
        <!--导航S-->
        <ul class="nav">
            <li><a href="Index" target="_self">首&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
            <li><a href="Introduction" target="_self">项目介绍</a></li>
            <li><a href="WishstoryApplication" target="_self">心愿申请</a></li>
            <li><a href="Inquire" target="_self">心愿列表</a></li>
            <li><a href="News" target="_self">新闻公告</a></li>
        </ul>
        <!--导航E-->
        <!--爱心寄语S-->
        <div class="love_word">
            <a href="PhotoandWord" target="_self"><img src="/SCUMicroLove/Public/image/love.jpg" width="178" /></a>
            <div class="txt">
                <ul id="scroll_txt">
                    <p><li> 非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                    非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                </li> </p>
                    <P><li>在学校里安心地追求自己的理想和目标，努力实现自己的人生定航
                    非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                </li></P>
                    <p><li> 非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                    非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                </li> </p>
                    <p><li> 在学校里安心地追求自己的理想和目标，努力实现自己的人生定航
                    非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                </li> </p>
                    <p><li> 非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                    非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
                </li> </p>
                </ul>
            </div>
        </div>
        <!--爱心寄语E-->
        <!--联系我们S-->
        <div class="us">
        <div class="zhuban">主办单位 </div>

        <p>学生资助中心：<br />
            电话：85401216<br />
            邮箱：xgb-zzzx<br />@scu.edu.cn<br />
            （ 周一至周五 <br />8:30—12:00   14:30-18:00 ）
        </p>
        <div class="admin"><a href="/SCUMicroLove/Home/LogIn" target="_self">管理员登陆</a></div>
    </div>
        <!--联系我们E-->
    </div>
    <!--左边内容E-->

    <!--主要内容S-->
    <div id="content">
        <div class="news_con">
            <table width="760px" border="0" cellpadding="1" cellspacing="3" bgcolor="#F7F7F7">
                <tr><td><font size="+1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;新闻公告</strong></font></td></tr>
                <tr>
                    <td>
                        <ul>
                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <p style="line-height: 150%"><a href="" title=<?php echo ($vo["news_name"]); ?> target =<?php echo ($vo["news_address"]); ?> onclick="jump(this)">【<?php echo ($vo["postdate"]); ?>】&nbsp;&nbsp; <?php echo ($vo["news_name"]); ?></a><br></p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <table width="95%" align=center cellspacing=3 cellpadding=3>
            <tr>
                <td align=right>
                    <?php if(is_array($total)): $i = 0; $__LIST__ = $total;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["page"]); ?></font>/<?php echo ($td1["pageNum"]); ?>&nbsp;&nbsp;该页<b><?php echo ($td1["numPerPage"]); ?></b>条&nbsp;&nbsp;共<b><?php echo ($td1["pageNum"]); ?></b>页&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php if(is_array($page)): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?page=<?php echo ($td2); ?>"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
                </td>
            </tr>
        </table>
    </div>
    <!--主要内容E-->

    <!--页脚内容S-->
    <div id="footer">
        <!--页脚文字内容S-->
        <span><img src="/SCUMicroLove/Public/image/footlogo.jpg" height="70"></span>
        <div class="foot">
            <p>(望江校区)文化活动中心302室</p>
            <p>(江安校区)16舍对面学生资助中心办公室</p>
        </div>
        <!--页脚文字内容E-->
        <!--页脚友情链接内容S-->
        <div style="float:right; width:200px;padding:25px 0;">
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

    function jump(obj)
    {
        window.open(obj.target, '_blank');
    }
</script>
</body>
</html>