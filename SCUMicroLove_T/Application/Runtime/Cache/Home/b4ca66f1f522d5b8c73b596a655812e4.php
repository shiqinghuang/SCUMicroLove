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
                <div class="adminapply_con">
                    <form id="form1" name="form1" method="post" action="/SCUMicroLove/Home/AdminWishstoryApplication/add">
                        <table width="760" border="1">
                            <tr>
                                <td width="73">姓名</td>
                                <td width="168">
                                    <input type="text" name="stu_name" id = "stu_name" maxlength="60" style="border-style:none; border:0;" onblur = "check('stu_name')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                                <td width="82">性别;</td>
                                <td width="168">
                                    <input type="radio" name="stu_gender" value="男" />男
                                    <input type="radio" name="stu_gender" value="女" />女</td>
                                <td width="81">民族</td>
                                <td width="168">
                                    <input type="text" name="stu_nation" id="stu_nation" maxlength="20"  style="border:0"  onblur = "check('stu_nation')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            </tr>
                            <tr>
                                <td>籍贯</td>
                                <td>
                                    <input type="text" name="stu_nativeplace" id="stu_nativeplace" maxlength="100" style="border:0" onblur = "check('stu_nativeplace')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                                <td>年级</td>
                                <td>
                                    <select type="text" name="stu_grade" value="" style="border:0 ">
                                        <option style="width:200px" selected="selected">2015</option>
                                        <option style="width:200px">2014</option>
                                        <option style="width:200px">2013</option>
                                        <option style="width:200px">2012</option>
                                        <option style="width:200px">2011</option>
                                        <option style="width:200px">2010</option>
                                        <option style="width:200px">2009</option>
                                        <option style="width:200px">2008</option>
                                        <option style="width:200px">2007</option>
                                        <option style="width:200px">2006</option>
                                        <option style="width:200px">2005</option>
                                        <option style="width:200px">2004</option>
                                        <option style="width:200px">2003</option>
                                        <option style="width:200px">2002</option>
                                        <option style="width:200px">2001</option>
                                        <option style="width:200px">2000</option>
                                        <option style="width:200px">1999</option>
                                        <option style="width:200px">1998</option>
                                    </select>
                                </td>
                                <td>学院</td>
                                <td>
                                    <input type="text" name="stu_academy" id="stu_academy" maxlength="50" style="border:0" onblur = "check('stu_academy')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            </tr>
                            <tr>
                                <td>专业</td>
                                <td>
                                    <input type="text" name="stu_major" id="stu_major" maxlength="50" style="border:0" onblur = "check('stu_major')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                                <td>学号</td>
                                <td><label for="textfield"></label>
                                    <input type="text" name="stu_id" id="stu_id" maxlength="13" style="border:0" onblur = "check('stu_id')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                                <td>联系方式</td>
                                <td><label for="textfield"></label>
                                    <input type="text" name="stu_phone" id="stu_phone" maxlength="11" style="border:0" onblur = "check('stu_phone')" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/></td>
                            </tr>
                        </table>
                        <table style="width:760px;" border="1">
                            <tr height="20px">
                                <td>家庭基本情况：(还可以输入<input name="remLen1" value="100" size="1" disabled="true" readonly="true" />个字符)</td>
                            </tr>
                            <tr>
                                <td><textarea name="stu_family" id="textarea" cols="20" rows="5" maxlength="100" onkeydown="textCounter(stu_family,remLen1,100)" style=" width:740px;height:150px;border: 0; overflow: auto;resize:none;text-indent:20px;font-size: 15px;"></textarea></td>
                            </tr>
                            <tr>
                                <td height="20px">心愿（物品及数值）：(还可以输入<input name="remLen2" value="60" size="1" disabled="true" readonly="true"/>个字符)</td>
                            </tr>
                            <tr>
                                <td><textarea name="stu_wish" id="textarea2" cols="20" rows="5" maxlength="60" onkeydown="textCounter(stu_wish,remLen2,60)" style=" width:740px;height:100px;border: 0; overflow: auto;resize:none; resize:none;text-indent:20px;font-size: 15px;"></textarea></td>
                            </tr>
                            <tr>
                                <td height="20px">心愿故事：
                                    (还可以输入<input name="remLen3" value="800" size="1" disabled="true" readonly="true"/>个字符)</td>
                            </tr>
                            <tr>
                                <td><textarea maxlength="800" onkeydown="textCounter(stu_wishstory,remLen3,800)" name="stu_wishstory" id="textarea3" cols="20" rows="10" style="width:740px;height:250px;border: 0; overflow: auto; resize:none;text-indent:20px;font-size: 15px;"></textarea></td>
                            </tr>
                            <tr>

                                <td style=" text-align:right">
                                    <a href="AdminIndex"><input type="button" value="返回"/></a>
                                    <input type="submit" name="submit2" id="submit2" onclick="return confirm('确定添加此心愿吗?')" value="提交" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
    </div>
    <!--主要内容E-->
</div>
<!--总体布局S-->

<!--js特效-->
<script type="text/javascript" src="/SCUMicroLove/Public/js/jquery.js"></script>
<script type="text/javascript" src="/SCUMicroLove/Public/js/index_admin.js"></script>
<script type="text/javascript">
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

</script>
</body>
</html>