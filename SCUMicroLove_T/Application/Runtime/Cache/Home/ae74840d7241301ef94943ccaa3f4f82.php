<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理员登录</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/admin_index.css">
</head>

<body onload="createCode();" background="/SCUMicroLove/Public/image/looginbg.png">
<div class="login">
    <h1>微爱川大管理平台</h1>
    <form name="form1" id="form1"  method="post"  action="/SCUMicroLove/Home/LogIn/logIn">
        <table width="320" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
                <td colspan="2"><h3>管理员登录</h3></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="username" id="username"  placeholder="请输入用户名"  /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="password" id="password" placeholder="请输入密码" /></td>
            </tr>
            <tr>
                <td width="60"><input type="text" class="check" id="checkNum" placeholder="验证码"  /></td>

                <td><a href="javascript:void(0);"><div id="checkCode" onclick="createCode()";></td>
            </tr>
        </table>
        <input class="but" type="reset"><input class="but" type="button" value="登录" onclick="Submit();">
    </form>
</div>
<script type="text/javascript" src="/SCUMicroLove/Public/js/admin_index.js"></script>
<script>

    function  Submit() {
        var  form1=document.form1;
        if(validate()==true) {
            form1.submit();
            return true;
        }
    }
</script>
</body>
</html>