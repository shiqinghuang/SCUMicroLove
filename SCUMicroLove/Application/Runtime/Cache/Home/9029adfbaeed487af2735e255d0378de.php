<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大——心愿详细查询</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index.css">

</head>

<body>
<!--总体布局S-->
<div class="container">
    <!--页眉设计S-->
    <div id="header"></div>
    <!--页眉设计E-->
    <!--八张照片S-->
    <div id="top">
        <ul class="top_photos">
            <li><img src="/SCUMicroLove/Public/image/logo.jpg" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/" width='110' height="90" />
                <p>图片介绍</p>
            </li>
            <li><img src="/SCUMicroLove/Public/image/" width='110' height="90" />
                <p>图片介绍</p>
            </li>
        </ul>
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
            <li><a href="ThanksHeart" target="_self">感恩的心</a></li>
        </ul>
        <!--导航E-->
        <!--爱心寄语S-->
        <div class="love_word">
            <a href="HeartWord" target="_self"><img src="/SCUMicroLove/Public/image/love.jpg" width="180px"/></a>
            <ul>
                <p><li> 非常感谢您们对我们贫困在校大学生的关心和爱护，对我们学习的支持和鼓励
            </li> </p>
                <P><li>在学校里安心地追求自己的理想和目标，努力实现自己的人生定航</li></P>
            </ul>
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
            <div class="detail_back" style="padding-top:20px;background:#F7F7F7">
                <div class="detail_con">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table width="740px" border="0" cellpadding="1" cellspacing="3" bgcolor="#F7F7F7">
                            <tr>
                                <td align="center"><font size="+1"><strong>&nbsp;&nbsp;&nbsp;&nbsp;心愿详细信息</strong></font></td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>
                                            <h3>心愿编号：</h3>
                                        </li>
                                        <span style="text-align:left; float:left; padding-left:30px;">   No.<?php echo ($vo["wishstory_id"]); ?> </span><br>
                                        <li>
                                            <h3>发表日期：</h3>
                                        </li>
                                        <span style="text-align:left; float:left; padding-left:25px;">【 <?php echo ($vo["postdate"]); ?> 】</span><br>
                                        <li>
                                            <h3>心愿名称：</h3>
                                        </li>
                                        <span style="text-align:left; float:left; padding-left:25px;">【 <?php echo ($vo["wishstory_name"]); ?> 】</span><br>
                                        <li>
                                            <h3>心愿内容：</h3>
                                        </li>
                           <span style="text-align:left; float:left; padding-left:25px;">
                               <textarea style= "background:transparent;border-style:none; border: 0px; resize: none; font-size: 15px " readonly rows="15" cols="70"><?php echo ($vo["stu_wishstory"]); ?>
                               </textarea>
                           </span>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                        <div style="float:right;background:#f7f7f7;width:740px;height:35px;text-align:right; margin-left:20px;padding-right:20px; font-size:14px;line-height:25px">
                            <?php echo ($vo["stu_claimstate"]); ?>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
        </div>
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
</script>
</body>
</html>