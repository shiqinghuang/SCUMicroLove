<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>如愿以偿后期处理</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/admin_index.css">
</head>

<body style="background:#f7f7f7">
<div class="content">
    <div class="head">
        <a href="/SCUMicroLove/Home/LogIn/logOut">注销</a>
        <h1>微爱川大管理平台</h1>
    </div>
    <div class="nav">
        <a href="AdminIndex"><input type="reset" value="心愿审核"></a>
        <a href="AdminIndexAchieve"><input type="button" value="后期管理"></a>
    </div>
    <div class="con_onload">

            <form  id="form" name="form" action="/SCUMicroLove/Home/AdminPhotoandWord/add" method="post">
            <p>
                心愿编号:
                <input type="text" name="wishstory_id" id="textfield" value="<?php echo ($wishatory_id); ?>" >
            </p>
            <p>
                感恩有你:
                <textarea name="words" cols="100" rows="20" id="textarea"></textarea>
            </p>
            <p class="button">
                <input type="submit" name="button" id="button" value="提交数据" />
            </p>
        </form>

        <form  enctype="multipart/form-data" action="/SCUMicroLove/Home/AdminPhotoandWord/uploadPicture" method="post">
            <p>
                图片路径:
                <input name="file" type="file" style="border: 1px solid #ccc;background:#fff;" id="file">
                <input type="submit" value="上传" />
                <br>
                (格式:'jpg', 'gif', 'png', 'jpeg' 图片按照心愿编号命名)
            </p>
        </form>

    </div>
</div>
</body>
</html>