<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>如愿以偿</title>
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
  <div class="con_later">
        <div class="con">
          <span class="search">
                  <form name="form1" method="GET" action="/SCUMicroLove/Home/AdminIndexAchieve">
                      <input style="width:165px; height:22px;" type="text"  name="keyword" id="keyword"/>
                      <input style="height:25px;" type="submit" value="查询" />
                  </form>
        </span>
          <table id="ruyuan_list" width="900" border="1" cellspacing="1">
          <tr>
            <th scope="col" width="20%">编号</th>
            <th scope="col" width="30%">心愿名称</th>
            <th scope="col" width="25%">日期</th>
            <th scope="col" width="25%">上传寄语图片</th>
          </tr>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["wishstory_id"]); ?></td>
            <td><?php echo ($vo["wishstory_name"]); ?></td>
            <td><?php echo ($vo["applydate"]); ?></td>
            <td><?php echo ($vo["upload"]); ?></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
          <div class="page" style="background:#C6DBFB">
            <table width="100%" align=center cellspacing=5 cellpadding=5>
              <tr>
                <td align=right>
                  <?php if(is_array($total)): $i = 0; $__LIST__ = $total;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td1): $mod = ($i % 2 );++$i;?>页次：<font color=red><?php echo ($td1["page"]); ?></font>/<?php echo ($td1["pageNum"]); ?>&nbsp;&nbsp;该页<b><?php echo ($td1["numPerPage"]); ?></b>条&nbsp;&nbsp;共<b><?php echo ($td1["pageNum"]); ?></b>页&nbsp;&nbsp;分页：<?php endforeach; endif; else: echo "" ;endif; ?>
                  <?php if(is_array($page)): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td2): $mod = ($i % 2 );++$i;?>[<a href="?page=<?php echo ($td2); ?>"><?php echo ($td2); ?></a>]<?php endforeach; endif; else: echo "" ;endif; ?>
                </td>
              </tr>
            </table>
          </div>
  </div>
</div>
</body>
<script type="text/javascript">
//ruayuan
window.onload= function(){
	var ali=document.getElementsByTagName('tr');

	for(var i=0;i<=ali.length;i++){
		if(i%2==0){
			ali[i].style.background='#efefef';
		}
		else{
			ali[i].style.background='';
		}
	}
}
</script>
</html>