<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大管理平台</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index_adm.css">

</head>

<body>
<!--总体布局S-->
<div class="container">
    <!--页眉设计S-->
    <div id="header"><img src="/SCUMicroLove/Public/image/adm.jpg" width="960px" height="90px"/>
        <p>微爱川大管理平台</p>
    </div>
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

    <!--主要内容S-->
    <div id="content">
        <!--选项按钮内容S-->
        <ul class="sel_btn">
            <li class="hover">申请审核</li>
            <li>认领审核</li>
            <li>图片和寄语管理</li>
        </ul>
        <!--选项按钮内容E-->

        <div class="main">
            <!--申请管理内容S-->
            <div class="admincon">
                <ul>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><strong>未审核&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布日期&nbsp;&nbsp;</strong>【<?php echo ($vo["postdate"]); ?>】&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["detailview"]); ?></span>心愿编号 &nbsp; No.<?php echo ($vo["wishstory_id"]); ?>&nbsp; <a href="CheckWish?id=<?php echo ($vo["wishstory_id"]); ?>"><?php echo ($vo["wishstory_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <!--选页内容S-->
                <div class="page">
                    <table width="100%" align=center cellspacing=5 cellpadding=5>
                        <tr>
                            <td align="right">
                                <a href="AdminWishstoryApplication">添加心愿</a>
                            </td>
                        </tr>
                        <tr>
                            <td align=right>
                                <?php if(is_array($total)): $i = 0; $__LIST__ = $total;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["page"]); ?></font>/<?php echo ($td1["pageNum"]); ?>&nbsp;&nbsp;该页<b><?php echo ($td1["numPerPage"]); ?></b>条&nbsp;&nbsp;共<b><?php echo ($td1["pageNum"]); ?></b>页&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php if(is_array($page)): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?page=<?php echo ($td2); ?>&page1=1&page2=1"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
                            </td>
                    </table>
                </div>
            </div>
            <!--申请管理内容S-->

            <!--认领管理内容E-->
            <div class="admincon">
                <ul>
                    <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><strong><?php echo ($vo["stu_claimstate"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布日期&nbsp;&nbsp;</strong>【<?php echo ($vo["postdate"]); ?>】&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["detailview"]); ?></span>心愿编号 &nbsp; No.<?php echo ($vo["wishstory_id"]); ?>&nbsp; <a href="DetailView?id=<?php echo ($vo["wishstory_id"]); ?>"><?php echo ($vo["wishstory_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <!--选页内容S-->
                <div class="page">
                    <table width="100%" align=center cellspacing=5 cellpadding=5>
                        <tr>
                            <td align=right>
                                <?php if(is_array($total1)): $i = 0; $__LIST__ = $total1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["page"]); ?></font>/<?php echo ($td1["pageNum"]); ?>&nbsp;&nbsp;该页<b><?php echo ($td1["numPerPage"]); ?></b>条&nbsp;&nbsp;共<b><?php echo ($td1["pageNum"]); ?></b>页&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php if(is_array($page1)): $i = 0; $__LIST__ = $page1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?page=1&page1=<?php echo ($td2); ?>&page2=1"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
                            </td>
                    </table>
                </div>
                <!--选页内容E-->
            </div>
            <!--认领管理内容S-->

            <!--图片和寄语内容S-->
            <div class="admincon">
                <table width="960" border="1">
                    <tr>
                        <td width="480">
                            <ul>
                                <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                            </ul>
                        </td>
                        <td width="480">
                            <ul>
                                <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
                                    <li><p style="line-height: 150%">心愿编号&nbsp;&nbsp;<a href="#">理查德怀斯曼：《正能量》</a><span><a href="#">照片和寄语</a>&nbsp;【7月21日】</span><br/>
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
            <!--图片和寄语内容E-->
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