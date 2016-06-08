<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查询心愿</title>
<style type="text/css">
body{ padding:0; margin:0; background:rgba(255,255,230,1)}
ul li{line-height:30px;font-size:18px;color:#333;font-weight: bold;padding-top: 10px;}
ul span{text-align:left;font-size:16px; color:#666; line-height:30px; padding-left:30px;}

</style>
</head>

<body>
<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="self">
  <ul>
      <li>
          心愿编号：           
      </li>        
      <span>No.<?php echo ($vo["wishstory_id"]); ?></span><br>
      <li>
          发表日期：            
      </li>              
      <span>【 <?php echo ($vo["postdate"]); ?> 】</span><br>
      <li>
          心愿名称：
      </li>
      <span>【 <?php echo ($vo["wishstory_name"]); ?> 】</span><br>
      <li>
          心愿内容：
      </li>
       <p>
          <?php echo ($vo["stu_wishstory"]); ?>
      </p>
      <li>
          状态：<span><?php echo ($vo["stu_claimstate"]); ?></span><br>
      </li>
  </ul>	
</div><?php endforeach; endif; else: echo "" ;endif; ?>
<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="renl_info">
          <ul>
              <li>
                  认领人： <span><?php echo ($vo["claimant_name"]); ?></span><br>
              </li>
          </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>