<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>微爱川大</title>
    <link rel="stylesheet" type="text/css" href="/SCUMicroLove/Public/css/index.css">
    <link rel="stylesheet" href="/SCUMicroLove/Public/dist/slippry.css">
</head>

<body>
<!--总体布局S-->
<div class="container">
    <!--页眉设计S-->
    <div id="header">
        <div class="headbg"><h1>微爱川大</h1></div>
        <div class="adv">
            <div class="htmleaf-content">
                <ul id="pictures-demo">
                    <li>
                        <img src="/SCUMicroLove/Public/img/image-1.jpg">
                    </li>
                    <li>
                        <img src="/SCUMicroLove/Public/img/image-2.jpg" >
                    </li>
                    <li>
                        <img src="/SCUMicroLove/Public/img/image-3.jpg">
                    </li>
                    <li>
                        <img src="/SCUMicroLove/Public/img/image-4.jpg">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--页眉设计E-->

    <!--主要内容S-->
    <div id="content">
        <!--左边内容S-->
        <div id="part_left">
            <!--导航S-->
            <ul class="nav">
                <li><a href="Index" target="_self"><img src="/SCUMicroLove/Public/image/nav1.png" /></a></li>
                <li><a href="Introduction" target="_self"><img src="/SCUMicroLove/Public/image/nav2.png" /></a></li>
                <li><a href="WishstoryApplication" target="_self"><img src="/SCUMicroLove/Public/image/nav3.png" /></a></li>
                <li><a href="Inquire" target="_self"><img src="/SCUMicroLove/Public/image/nav4.png" /></a></li>
                <li><a href="PhotoandWord" target="_self"><img src="/SCUMicroLove/Public/image/nav5.png" /></a></li>
                <li><a href="ClaimantWord" target="_self"><img src="/SCUMicroLove/Public/image/nav6.png" /></a></li>
            </ul>
            <!--导航E-->
        </div>
        <!--左边内容E-->
        <form  id="form1" name="form1"  action = "/SCUMicroLove/Home/Claimant/add" method="post">
            <div class="claim">
                <h2>微爱 · 川大心愿认领</h2>

                <div class="text">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="text"  name="username" id="username" placeholder="请输入姓名" onkeydown="enter(this)" /><br/>
                    <input type="text" name="phone" id="phone"  maxlength="11" placeholder="请输入电话号码" onkeydown="enter(this)" />			 						<br/>
                    <input type="text" name="address"  id="address" maxlength="60" placeholder="请输入地址" onkeydown="enter(this)" /><br/>

                    <p>您的爱心寄语(100字之内)<br/></p>
                    <textarea name="claimant_word" id="claimant_word" maxlength="100" placeholder="请输入爱心寄语" onkeydown="enter(this)"></textarea>
                </div>
                <div class="btn">
                    <input type="reset" name="reset" id="reset" value="重&nbsp;&nbsp;&nbsp;&nbsp;置" />
                    <input type="button" onclick="Submit()"   value="认&nbsp;&nbsp;&nbsp;&nbsp;领" />
                </div>
            </div>
        </form>
    </div>
    <!--主要内容E-->

    <!--八张照片S-->
    <div class="rollBox">
        <div class="Cont" id="ISL_Cont">
            <div class="ScrCont">
                <!-- 图片列表 begin -->
                <div id="List1">
                    <?php if(is_array($picture)): $i = 0; $__LIST__ = $picture;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pic">
                            <?php echo ($vo["picture_path"]); ?>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!-- 图片列表 end -->
                <div id="List2"></div>
            </div>
        </div>
    </div>
    <!--八张照片E-->

    <!--页脚内容S-->
    <div id="footer">
        <!--页脚文字内容S-->
        <span><img src="/SCUMicroLove/Public/image/footlogo.jpg" height="70"></span>
        <div class="foot">
            <p>(望江校区)文化活动中心302室</p>
            <p>(江安校区)16舍对面学生资助中心办公室</p>
        </div>
        <!--页脚文字内容E-->
        <!--页脚友情链接内容S-->
        <div style="float:right; width:200px;padding:25px 0;">
            <select name="select" id="select">
                <option>----友情链接----</option>
                <option value="http://www.scu.edu.cn">----四川大学----</option>

                <option value="http://jwc.scu.edu.cn/jwc/frontPage.action">----四川大学教务处----</option>
                <option  value=value="http://xsc.scu.edu.cn">----四川大学学工部----</option>
            </select>
        </div>
        <!--页脚友情链接内容E-->
    </div>

    <!--页脚内容E-->
</div>
<!--总体布局E-->

<!--js特效-->
<script type="text/javascript" src="/SCUMicroLove/Public/js/jquery.js"></script>
<script type="text/javascript" src="/SCUMicroLove/Public/js/index.js"></script>
<script>
    function mbar(target) {
        var docurl =target.options[target.selectedIndex].value;
        if (docurl != "") {
            open(docurl,'_blank');
            sobj.selectedIndex=0;
            sobj.blur();
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

    function Submit()
    {

        var  id= document.getElementById('id');
        if(location.search != null)
        {
            var len = location.search.length;
            id.value = location.search.substring(1, len);
        }
        else location.value = "";


        if(  !check('username'))
            return;
        else if(!check('phone'))
            return ;
        else if(! check('address'))
            return;
        else if(! check('claimant_word'))
            return;
        else {
            var myform=document.form1;
            myform.action="/SCUMicroLove/Home/Claimant/add";
            myform.submit();
        }


    }
</script>
<script src="http://libs.useso.com/js/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="/SCUMicroLove/Public/dist/slippry.min.js"></script>
<script>
    jQuery('#pictures-demo').slippry({
        // general elements & wrapper
        slippryWrapper: '<div class="sy-box pictures-slider" />', // wrapper to wrap everything, including pager

        // options
        adaptiveHeight: false, // height of the sliders adapts to current slide
        captions: false, // Position: overlay, below, custom, false

        // pager
        pager: false,

        // controls
        controls: false,
        autoHover: false,

        // transitions
        transition: 'kenburns', // fade, horizontal, kenburns, false
        kenZoom: 140,
        speed: 4000 // time the transition takes (ms)
    });
</script>
</body>
</html>