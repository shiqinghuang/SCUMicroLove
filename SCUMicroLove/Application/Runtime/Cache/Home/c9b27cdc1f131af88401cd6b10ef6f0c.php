<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>查看心愿</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/admin_index.css">

</head>

<body  style="background:#f7f7f7">
<div class="content">
    <div class="head">
        <a href="/SCUMicroLove/Home/LogIn/logOut">注销</a>
        <h1>微爱川大管理平台</h1>
    </div>
    <div class="nav">
        <a href="AdminIndex"><input type="reset" value="心愿审核"></a>
        <a href="AdminIndexAchieve"><input type="button" value="后期管理"></a>
    </div>
    <div class="con_chakan">
        <table width="800" border="1" cellspacing="2" cellpadding="0">
            <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td width="20%" bgcolor="#E3EBF4">姓 &nbsp;名：</td>
                <td width="30%"><span><?php echo ($vo["stu_name"]); ?></span></td>
                <td width="20%" bgcolor="#E3EBF4">民 &nbsp;族：</td>
                <td width="30%"><?php echo ($vo["stu_nation"]); ?></td>
            </tr>
            <tr>
                <td bgcolor="#E3EBF4">籍 &nbsp;贯：</td>
                <td><?php echo ($vo["stu_nativeplace"]); ?></td>
                <td bgcolor="#E3EBF4">年 &nbsp;级：</td>
                <td><?php echo ($vo["stu_grade"]); ?></td>
            </tr>
            <tr>
                <td bgcolor="#E3EBF4">学 &nbsp;院：</td>
                <td><?php echo ($vo["stu_academy"]); ?></td>
                <td bgcolor="#E3EBF4">专 &nbsp;业：</td>
                <td><?php echo ($vo["stu_major"]); ?></td>
            </tr>
            <tr>
                <td bgcolor="#E3EBF4">学 &nbsp;号：</td>
                <td><?php echo ($vo["stu_id"]); ?></td>
                <td bgcolor="#E3EBF4">联系方式：</td>
                <td><?php echo ($vo["stu_phone"]); ?></td>
            </tr>
            <tr>
                <td bgcolor="#E3EBF4">查询密码：</td>
                <td colspan="3">etfhnhfv</td>
            </tr>
            <tr bgcolor="#E3EBF4">
                <td colspan="4">心愿（物品及数值）：</td>
            </tr>
            <tr>
                <td height="51" colspan="4"><?php echo ($vo["wishstory_name"]); ?></td>
            </tr>
            <tr bgcolor="#E3EBF4">
                <td colspan="4">家庭基本情况：</td>
            </tr>
            <tr>
                <td height="86" colspan="4"><?php echo ($vo["stu_family"]); ?></td>
            </tr>
            <tr bgcolor="#E3EBF4">
                <td colspan="4">心愿故事：</td>
            </tr>
            <tr>
                <td height="90" colspan="4"><?php echo ($vo["stu_wishstory"]); ?></td>
            </tr>
            <tr style="color:#FFF" bgcolor="#999">
                <td colspan="2" style="font-weight: bold">心愿状态</td>
                <td colspan="2" style="font-weight: bold"><?php echo ($vo["stu_claimstate"]); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td colspan="2">认领人：</td>
                <td colspan="2"><?php echo ($vo["claimant_name"]); ?></td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#E3EBF4">联系方式：</td>
                <td colspan="2"><?php echo ($vo["claimant_phone"]); ?></td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#E3EBF4">地址：</td>
                <td colspan="2"><?php echo ($vo["claimant_address"]); ?></td>
            </tr>
            <tr bgcolor="#E3EBF4">
                <td colspan="4">爱心寄语：</td>
            </tr>
            <tr>
                <td height="84" colspan="4"><?php echo ($vo["claimant_word"]); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if(is_array($data3)): $i = 0; $__LIST__ = $data3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr bgcolor="#E3EBF4">
                <td colspan="4">感恩留言：</td>
            </tr>
            <tr>
                <td height="80" colspan="4"><?php echo ($vo["stu_word"]); ?></td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#E3EBF4">照片</td>
                <td colspan="2"><img src="<?php echo ($vo["picture_path"]); ?>" width="100" height="100"  alt=""/></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
</div>
</body>
</html>