<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="Generator" content="ECSHOP v2.7.3" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <title>用户登录</title>
    <link rel="shortcut icon" href="/zhuce/favicon.ico" />
    <link rel="icon" href="/zhuce/animated_favicon.gif" type="image/gif" />
    <link href="/zhuce/css/style_3.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/zhuce/js/common.js"></script>
    <script type="text/javascript" src="/zhuce/js/user.js"></script>
    <script type="text/javascript" src="/zhuce/js/transport_jquery.js"></script>
    <script type="text/javascript" src="/zhuce/js/jquery.min.js"></script>
</head>
    <body style="background:#fdfbfe;">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/amazeui.min.js"></script>
        <script src="assets/js/app.js"></script>
        <div class="body_user ">
            <div class="header">
                <div class="headBody">
                    <div class="headBox HeadBox" style="padding-top:40px;">
                        <div class="logo f_l"><a href="/zhuce/index.php" name="top"><img src="/zhuce/picture/logo.gif" /></a></div>
                        <div class="bannerHeader f_r"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content" style="padding-top:30px;">
            <div class="contentLogin" style="border:0;">
                <div class="content_login">
                    <div class="coLoginBody_left"><a href='/zhuce/affiche.php?ad_id=113&amp;uri=http%3A%2F%2Fwww.ecshop119.com' target='_blank'><img src='/zhuce/picture/1403227386901871933.jpg' width='542' height='309'
                    border='0' /></a>
                    </div>
                    <div class="coLoginBody_right" style="margin-top:20px;">
                        <div class="coLogin_title">欢迎回来！请登录</div>
                        <div class="coLogin_box_right">
                            <form name="formLogin" action="/home/dologin" method="post" onSubmit="return xs_userLogin()">
                                {{csrf_field()}}
                                <div class="coLogin_one">
                                    <div class="coLogin_txt_all">
                                        <input name="username" id="xs_username" type="text" size="17" class="coLogin_txt" />
                                        <label>用户名</label>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                                <div class="coLogin_one">
                                    <div class="coLogin_txt_all">
                                        <input name="password" id="xs_password" type="password" size="17" class="coLogin_txt" />
                                        <label>密码</label>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                                <div class="coLogin_one">
                                    <div class="coLogin_txt_all">
                                        <input name="captcha" type="text" placeholder="验证码" align="center">
                                        <a onclick="javascript:re_captcha();">
            <img src="{{URL('/captcha/1')}}"  alt="验证码" title="刷新图片" width="100" height="25" id="c2c98f0de5a04167a9e4 27d883690ff6" border="0" align="center">
        </a>
                                    </div>
                                </div>
                                <br>
                                <div class="coLogin_one">
                                    <input type="hidden" name="act" value="act_login" />
                                    <input type="hidden" name="back_act" value="user.php" />
                                    <input type="submit" name="submit" value="登录" class="smLogin_btn" />
                                </div>
                                <div class="coLogin_two">
                                    <input type="checkbox" value="1" name="remember" id="remember" class="checkbox_txt" />
                                    <label for="remember">记住用户名</label>
                                    <span style="padding:0 0 0 5px; float:right;"><a href="user.php?act=get_password">忘记密码了？</a><span> | </span><a href="/zhuce/user.php?act=register" style="color:#336699;">免费注册</a></span>
                                </div>
                                <div class="linkBox">
                                    <table width="130" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td height="30" colspan="4">合作网站账号登录：</td>
                                            </tr>
                                            <tr>
                                                <td><a href="/zhuce/user.php?act=oath&type=qq"><img src="/zhuce/picture/qq_login.gif"/></a></td>
                                                <td><a href="/zhuce/user.php?act=oath&type=weibo"><img src="/zhuce/picture/sina_login_logo.gif"/></a></td>
                                                <td><a href="/zhuce/user.php?act=oath&type=alipay"><img src="/zhuce/picture/alipay_login.png"/></a></td>
                                                <td><a href="/zhuce/user.php?act=oath&type=taobao"><img src="/zhuce/picture/taobao_login.gif"/></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <script>
                            function re_captcha() {
                                $url = "{{ URL('/captcha') }}";
                                $url = $url + "/" + Math.random();
                                document.getElementById('captchaid').src = $url;
                            }
                            </script>
                        </div>
                    </div>
                    <script type="text/javascript">
                    $(function() {
                        var oInput = $(".coLogin_txt");
                        var text = $(".coLogin_txt_all label");
                        text.click(function() {
                            $(this).siblings(oInput).focus();
                        });
                        oInput.focus(function() {
                            $(this).siblings("label").hide();
                        });
                        oInput.blur(function() {
                            if ($(this).val() == "") {
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
                <div class="footerBody">
                    <div style="background:#fdfbfe; padding-bottom:40px;">
                        <div style="width:1000px; text-align:center; line-height:24px;">
                            <p>Copyright © 2008-2018 ecshop.com，All Rights Reserved 粤ICP备xxxxx号-1 许可证：粤B2-88888999 使用本网站即表示接受ECSHOP模板屋用户协议。</p>
                            <p class="lightGrey">
                                版权所有 ECSHOP模板屋www.ecshop119.com
                            </p>
                        </div>
                    </div>
                </Div>
            </div>
        </div>
        </div>
        
    </body>

</html>