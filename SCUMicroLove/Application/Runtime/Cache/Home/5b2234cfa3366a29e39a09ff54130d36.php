<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>心愿申请审核</title>
    <style type="text/css">
        body{
            margin:0;
            padding:0;
            background:#CCC;
        }
        #xy_story{
            width:300px;
            height:200px;
            text-align:left;
            padding:20px;
            line-height:25px;
        }
        #xy_story .but{
            position:absolute;
            left:20%;
            bottom:10%;
        }
        #xy_story input{
            width:80px;
            height:25px;
            margin:5px 10px;
            bottom:10px;
        }
    </style>
</head>

<body>
<div id="xy_story">
    <form name="form1" method="post" action="/SCUMicroLove/Home/CheckClaimant/changeClaimantState">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
        <li>心愿编号：<span><?php echo ($vo["claimant_id"]); ?></span></li>
        <li>认领人：<span><?php echo ($vo["claimant_name"]); ?></span></li>
        <li>联系方式：<span><?php echo ($vo["claimant_phone"]); ?></span></li>
        <li>地址：<span><?php echo ($vo["claimant_address"]); ?></span></li>
    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
        <input type="hidden" name="claim_id" id="claim_id" value="<?php echo ($vo["claim_id"]); ?>">
        <input type="hidden" name="wishstory_id" id="wishstory_id" value="<?php echo ($vo["wishstory_id"]); ?>">
        <input type="hidden" name="result" id="result">
    <div class="but"><input type="button" value="通过" onclick="Submit(1)"><input type="button" value="不通过" onclick="Submit(0)"><input type="button" value="取消" onclick="Cancel();"></div>
    </form>
</div>
<script>
    window.onunload = function(){
        window.opener.location.reload();
    }
    function  Submit(i) {
        var form=document.form1;
        var Result=document.getElementById('result');
        Result.value=i;
        form.submit();
    }
    function  Cancel() {
        window.close();
    }
</script>
</body>
</html>