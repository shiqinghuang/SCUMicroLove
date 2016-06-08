<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大管理平台</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index_adm.css">

</head>

<body>
<!--总体布局S-->
<div class="admincontainer">
    <!--页眉设计S-->
    <div id="header"><img src="/SCUMicroLove/Public/image/adm.jpg" width="760px" height="100px"/>
        <p>微爱川大管理平台</p>
    </div>
    <!--页眉设计E-->

    <!--主要内容S-->
    <div id="admincontent">
        <!--主要内容S-->
        <div class="adminapply">“微爱·川大”心愿申请表</div>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="adminapply_con">
                    <table width="760" border="1">
                        <tr>
                            <td width="73">姓名</td>
                            <td width="168">
                                <input type="text" value="<?php echo ($vo["stu_name"]); ?>" name="stu_name" id = "stu_name" maxlength="60" style="border-style:none; border:0;" onblur = "check('stu_name')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            <td width="82">性别;</td>
                            <td width="168">
                                <input type="text" value="<?php echo ($vo["stu_gender"]); ?>" name="stu_gender" id = "stu_gender" maxlength="60" style="border-style:none; border:0;" onblur = "check('stu_gender')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            <td width="81">民族</td>
                            <td width="168">
                                <input type="text" value="<?php echo ($vo["stu_nation"]); ?>" name="stu_nation" id="stu_nation" maxlength="20"  style="border:0"  onblur = "check('stu_nation')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                        </tr>
                        <tr>
                            <td>籍贯</td>
                            <td>
                                <input type="text" value="<?php echo ($vo["stu_nativeplace"]); ?>" name="stu_nativeplace" id="stu_nativeplace" maxlength="100" style="border:0" onblur = "check('stu_nativeplace')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            <td>年级</td>
                            <td>
                                <input type="text" value="<?php echo ($vo["stu_grade"]); ?>" name="stu_grade" id="stu_grade" maxlength="100" style="border:0" onblur = "check('stu_grade')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            </td>
                            <td>学院</td>
                            <td>
                                <input type="text" value="<?php echo ($vo["stu_academy"]); ?>" name="stu_academy" id="stu_academy" maxlength="50" style="border:0" onblur = "check('stu_academy')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                        </tr>
                        <tr>
                            <td>专业</td>
                            <td>
                                <input type="text" value="<?php echo ($vo["stu_major"]); ?>" name="stu_major" id="stu_major" maxlength="50" style="border:0" onblur = "check('stu_major')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            <td>学号</td>
                            <td><label for="textfield"></label>
                                <input type="text" value="<?php echo ($vo["stu_id"]); ?>" name="stu_id" id="stu_id" maxlength="13" style="border:0" onblur = "check('stu_id')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            <td>联系方式</td>
                            <td><label for="textfield"></label>
                                <input type="text" value="<?php echo ($vo["stu_phone"]); ?>" name="stu_phone" id="stu_phone" maxlength="11" style="border:0" onblur = "check('stu_phone')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                        </tr>
                    </table>
                    <table style="width:760px;" border="1">
                        <tr height="20px">
                            <td>家庭基本情况：</td>
                        </tr>
                        <tr>
                            <td><textarea  name="stu_family" id="textarea" cols="20" rows="5" maxlength="100"  style=" width:740px;height:150px;border: 0; overflow: auto;resize:none;text-indent:20px;font-size: 15px;"><?php echo ($vo["stu_family"]); ?></textarea></td>
                        </tr>
                        <tr>
                            <td height="20px">心愿（物品及数值）：</td>
                        </tr>
                        <tr>
                            <td><textarea name="wishstory_name" id="textarea2" cols="20" rows="5" maxlength="60"  style=" width:740px;height:100px;border: 0; overflow: auto;resize:none; resize:none;text-indent:20px;font-size: 15px;"><?php echo ($vo["wishstory_name"]); ?></textarea></td>
                        </tr>
                        <tr>
                            <td height="20px">心愿故事：
                                </td>
                        </tr>
                        <tr>
                            <td><textarea maxlength="800"  name="stu_wishstory" id="textarea3" cols="20" rows="10" style="width:740px;height:250px;border: 0; overflow: auto; resize:none;text-indent:20px;font-size: 15px;"><?php echo ($vo["stu_wishstory"]); ?></textarea></td>
                        </tr>
                        <tr>

                            <td style=" text-align:right">
                                <a href="AdminIndex"><input type="button" value="返回"/></a>
                            </td>
                        </tr>
                    </table>

            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--主要内容E-->
</div>
<!--总体布局S-->

<!--js特效-->
<script type="text/javascript" src="/SCUMicroLove/Public/js/jquery.js"></script>
<script type="text/javascript" src="/SCUMicroLove/Public/js/index_admin.js"></script>
</body>
</html>