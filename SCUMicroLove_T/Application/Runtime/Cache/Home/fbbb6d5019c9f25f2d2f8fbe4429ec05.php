<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>SCU MicroLove</title>
</head>
<body>
  <table height="107" width="780"  border="0" cellspacing="1" bgcolor="#cccccc">
      <tr>
          <td height="42" align="center" bgcolor="#ffffff">心愿编号</td>
          <td align="center" bgcolor="#ffffff">学号</td>
          <td align="center" bgcolor="#ffffff">姓名</td>
      </tr>
      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td height="62" align="center" bgcolor="#ffffff"><?php echo ($vo["wishstory_id"]); ?></td>
              <td align="center" bgcolor="#ffffff"><?php echo ($vo["stu_id"]); ?></td>
              <td align="center" bgcolor="#ffffff"><?php echo ($vo["stu_name"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
  <form action="/SCUMicroLove/index.php/Home/WishstoryApplication/upload" enctype="multipart/form-data" method="post" >
      <input type="text" name="name" />
      <input type="file" name="photo" />
      <input type="submit" value="提交" >
  </form>
</body>
</html>