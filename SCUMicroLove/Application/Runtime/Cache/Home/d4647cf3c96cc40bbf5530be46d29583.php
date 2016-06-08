<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大管理平台——认领审核</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index_adm.css">

</head>

<body>
<!--总体布局S-->
<div class="container">
    <!--页眉设计S-->
    <div id="header"><img src="/SCUMicroLove/Public/image/adm.jpg" width="960px" height="90px"/>
        <p>微爱川大管理平台——认领审核</p>
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
            <!--认领管理内容E-->
            <div class="admincon">
                <ul>
                    <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><strong><?php echo ($vo["stu_claimstate"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布日期&nbsp;&nbsp;</strong>【<?php echo ($vo["postdate"]); ?>】&nbsp;&nbsp;&nbsp;&nbsp;<a href= "<?php echo ($vo["url"]); ?>"><?php echo ($vo["detailview"]); ?></a></span>心愿编号 &nbsp; No.<?php echo ($vo["wishstory_id"]); ?>&nbsp; <a href="DetailView?id=<?php echo ($vo["wishstory_id"]); ?>"><?php echo ($vo["wishstory_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <!--选页内容S-->
                <div class="page">
                    <table width="100%" align=center cellspacing=5 cellpadding=5>
                        <tr>
                            <td align=right>
                                <?php if(is_array($total1)): $i = 0; $__LIST__ = $total1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["page"]); ?></font>/<?php echo ($td1["pageNum"]); ?>&nbsp;&nbsp;该页<b><?php echo ($td1["numPerPage"]); ?></b>条&nbsp;&nbsp;共<b><?php echo ($td1["pageNum"]); ?></b>页&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php if(is_array($page1)): $i = 0; $__LIST__ = $page1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?page1=<?php echo ($td2); ?>"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
                            </td>
                    </table>
                </div>
                <!--选页内容E-->
            </div>
            <!--认领管理内容S-->
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

   /* function MM_openBrWindow(obj) { //v2.0
        if(obj.target != '')
        {
            window.open(obj.target,"认领人信息","resizable=no,width=400,height=300,top=150,left=200,toolbar=no," +
            "menubar=no, scrollbars=no, resizable=no, location=no, status=no");
        }
    }*/
</script>
</body>
</html>