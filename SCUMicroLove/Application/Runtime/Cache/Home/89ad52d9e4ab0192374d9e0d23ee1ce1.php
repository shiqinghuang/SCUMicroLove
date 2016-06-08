<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>微爱川大管理平台——认领人信息审核</title>
</head>
<body>
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style=" background:#f7f7f7; font-size:16px; color:#666; padding:20px">
       <p>姓名：   <?php echo ($vo["claimant_name"]); ?> </p>
       <p>联系方式:<?php echo ($vo["claimant_phone"]); ?> </p>
       <p>地址：   <?php echo ($vo["claimant_address"]); ?> </p>
       <p>状态：   <?php echo ($vo["claimant_applystate"]); ?> </p>
       <p>
           <a href="AdminCheckClaimant/updateClaimState/claim_id/<?php echo ($vo["claim_id"]); ?>/wishstory_id/<?php echo ($vo["wishstory_id"]); ?>/flag/2" onclick="return confirm('确定要更改次状态吗?')"><input type="button" name="button" id="button" value="已认领"></a>
           <a href="AdminCheckClaimant/updateClaimState/claim_id/<?php echo ($vo["claim_id"]); ?>/wishstory_id/<?php echo ($vo["wishstory_id"]); ?>/flag/3" onclick="return confirm('确定要更改次状态吗?')"><input type="button" name="button2" id="button2" value="如愿以偿"></a>
           <a href="AdminCheckClaimant/delete/claim_id/<?php echo ($vo["claim_id"]); ?>/wishstory_id/<?php echo ($vo["wishstory_id"]); ?>"><input type="button" name="button3" id="button3" onclick="return confirm('确定要删除此认领人吗?')" value="删除"></a>
       </p>
   </div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>