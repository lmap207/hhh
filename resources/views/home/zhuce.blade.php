<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title>用户注册</title>

<link rel="shortcut icon" href="/zhuce/favicon.ico" />
<link rel="icon" href="/zhuce/animated_favicon.gif" type="image/gif" />
<link href="/zhuce/css/style_4.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/zhuce/js/common.js"></script><script type="text/javascript" src="/zhuce/js/user.js"></script><script type="text/javascript" src="/zhuce/js/transport_jquery.js"></script><script type="text/javascript" src="/zhuce/js/jquery.min.js"></script>
<body style="background:#fdfbfe;">
<div class="body_user ">

<div class="header">
    <div class="headBody">
        <div class="headBox HeadBox" style="padding-top:40px;">
            <div class="logo f_l"><a href="index.php" name="top"><img src="/zhuce/picture/logo.gif" /></a></div>
            <div class="bannerHeader f_r"></div>
        </div>
    </div>    
</div></div>
<div class="content" style="padding-top:30px;">
<div class="contentLogin" style="border:0;">
<div class="content_login">




<script type="text/javascript" src="/zhuce/js/utils.js"></script><div class="coLoginBody_left"><a href='affiche.php?ad_id=113&amp;uri=http%3A%2F%2Fwww.ecshop119.com'
                    target='_blank'><img src='/zhuce/picture/1403227386901871933.jpg' width='542' height='309'
                    border='0' /></a>

</div>
<div class="coLoginBody_right">
    <div class="coLogin_title">不是会员？请注册 <span style=" height:16px; border-right:1px solid #bfbdbf; padding-left:12px; display:inline-block; vertical-align:top;"></span><span class="f_r" style="font-size:12px;">已注册？<a href="/home/login">登录</a></span></div>
    <div class="coLogin_box_right">
        <form action="/home/zhuce" method="post">
            {{csrf_field()}}
            <div class="coLogin_one">
                <div class="coLoginTxt">
                    <div class="coLogin_txt_all"><input name="username" type="text" size="17" id="username" class="coLogin_txt"/><label>用户名</label></div>
                </div>
                <span id="username_notice" style="color:#FF0000; padding:0 0 0 5px;">&nbsp;</span>
            </div>
            
            <div class="coLogin_one">
                <div class="coLoginTxt">
                    <div class="coLogin_txt_all"><input name="password" type="password" id="password1" class="coLogin_txt" /><label>密码</label></div>
                </div>
                <span style="color:#FF0000; padding:0 0 0 5px;" id="password_notice">&nbsp;</span>
            </div>

            <div class="coLogin_one">
                <div class="coLoginTxt">
                    <div class="coLogin_txt_all"><input name="tel" type="text" id="password1" class="coLogin_txt" /><label>手机号</label></div>
                </div>
                <span style="color:#FF0000; padding:0 0 0 5px;" id="password_notice">&nbsp;</span>
            </div>

            <div class="coLogin_two">
                <p>&nbsp;</p>
                <input name="act" type="hidden" value="act_register" >
                <input type="hidden" name="back_act" value="" />
                <input name="Submit" type="submit" value="注册" class="biLogin_btn2">
            </div>
            <div class="coLogin_two">
                <p>&nbsp;</p>
                <input name="agreement" type="checkbox" value="1" checked="checked"  class="checkbox_txt" />
                <b>我已阅读并接受<a href=\"article.php?cat_id=-1\" target=\"_blank\" style=\"color:#f10180;\">服务条款</a>。</b>
            </div>
            <div class="coLogin_one" style="display:block;">
                <p></p>
                <a href="user.php?act=login">我已有账号，我要登录</a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=get_password">您忘记密码了吗？</a>
            </div>
        </form>
    </div>
</div>

  
<script type="text/javascript">
    $(function(){
        var oInput=$(".coLogin_txt");
        var text=$(".coLogin_txt_all label");
        text.click(function(){
            $(this).siblings(oInput).focus();
        });
        oInput.focus(function(){
            $(this).siblings("label").hide();
        });
        oInput.blur(function(){
            if($(this).val()==""){
                $(this).siblings("label").show();
            }
        });
    });
</script>


</div>
</div>
</div>
<div class="blank5"></div>
<div class="flow">
<div class="footer">
<div class="footerBody"><div style="background:#fdfbfe; padding-bottom:40px;">
    <div style="width:1000px; text-align:center; line-height:24px;">
  <p>Copyright © 2008-2018 ecshop.com，All Rights Reserved 粤ICP备xxxxx号-1 许可证：粤B2-88888999 使用本网站即表示接受ECSHOP模板屋用户协议。</p>
  <p class="lightGrey">
版权所有 ECSHOP模板屋www.ecshop119.com 
</p>
       
    </div>
</div></Div>
</div>
</div>
</div>
</body>
