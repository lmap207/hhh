<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>好货_伊人私语女性社区</title>
    <meta content="伊人私语,女装,导购,网购,饰品,配饰,护肤,彩妆,数码,家居,礼物,私服" name="keywords">
    <meta content="伊人私语，最知女人心的女性社区。建立全球女性精品时尚社区.女装,护肤,饰品,配饰,彩妆,数码,礼物,私服应有尽有,更好的满足女性时尚消费需求." name="description">
    <link href="" type="image/x-icon" rel="shortcut icon">
    <!--当当前页面用手机打开的时候，跳转到手机端-->
    <script src="/yiren/js/common/Pc_Wap/uaredirect.js" type="text/javascript"></script>
    <script type="text/javascript">
    var rurls = window.location.href;

    if (rurls.indexOf("m.") < 0) {
        rurls = rurls.replace("www.yirenbbs.com", "m.yirenbbs.com");

        uaredirect(rurls);
    }
    </script>
    <!--END-->
    <!--QQ网站验证-->
    <meta property="qc:admins" content="15274755326025606375" />
    <!--END-->
    <!--新浪微博登录-->
    <meta property="wb:webmaster" content="b41067518b63985f" />
    <!--END-->
    <meta name="360-site-verification" content="8e21b217b2a73391e53483d67f5e8aed" />
    <meta name="baidu-site-verification" content="ajLkmbbPbJ" />
    <script src="/yiren/js/common/jQuery/1.8.3jquery.js"></script>
    <script type="text/javascript" src="/yiren/js/common/validate.js"></script>
    <!--公共项-->
    <link type="text/css" rel="Stylesheet" href="/yiren/template/style/common/group.css" />
    <link type="text/css" rel="Stylesheet" href="/yiren/template/style/common/weiba.css" />
    <!--公共项END-->
    <!--分页-->
    <link type="text/css" rel="Stylesheet" href="/yiren/template/style/common/shar_resume.css" />
    <!--分页END-->
    <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?def00fa0762eea76e100d2f03b33ab3c";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script>
    (function() {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        } else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
    </script>
</head>

<body>
    <div id="body_page" name="body_page">
        <div id="body-bg">
            <div id="header" name="header" class="app_fixdiv">
                <div class="header-wrap">
                    <div class="head-bd">
                        <!-- logo -->
                        <div class="logo">
                            <a href="http://yirenbbs.com" title="伊人私语"><img src="/yiren/template/images/goods/logo.png"  alt="伊人私语"></a>
                        </div>
                        <!-- logo -->
                        <div class="nav">
                            <ul>
                                <li><a href="/" title="首页">首页</a></li>
                                <li class="current"><a href="/shops" title="好货" class="app">好货</a></li>
                                <li><a href="/zhinan/" title="指南">指南</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height:64px;"></div>
            <!-- 登录弹层-->
            <link type="text/css" rel="Stylesheet" href="/yiren/template/style/userlogin/login_tc.css" />
            <!-- 登录弹层end-->
            <script type="text/javascript" src="/yiren/template/js/Userlogin/login_tc.js"></script>
            <script type="text/javascript" src="/yiren/template/js/Userlogin/login.js"></script>
            <link type="text/css" rel="Stylesheet" href="/yiren/template/style/Goods/goods.css" />
            <style type="text/css">
            .floor-nav {
                height: auto;
                width: 50px;
                text-align: center;
                position: fixed;
                top: calc(50% - 250px);

                z-index: 999;
                background: #eee;
            }

            .scroll-nav {
                display: inline-block;
                width: 50px;
                height: 50px;
                line-height: 50px;
                cursor: pointer;
            }

            .scroll-nav.active {
                color: #e85c69;
                background: yellow;
                font-weight: bold;
            }

            .scroll-floor {
                width: 100%;
                height: 500px;
                color: #fff;
                text-align: center;
                line-height: 500px;
                font-size: 50px;
            }
            </style>
            <div id="page-wrap">
                <div id="main-wrap">
                    <div class="weiba-list-box">
                        <div class="znfirstone">
                            
                            <ul>
                                @foreach ($shops as $v)
                                <li><a class="weiba-thumb" href="/{{$v['id']}}.html" target="_blank"><img src="{{$v['picture']}}"  alt="{{$v['title']}}" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/{{$v['id']}}.html" target="_blank" >{{$v['title']}}</a></h3>
                                        <p><a href='javascript:void(0)'><i><img src="{{$v['apic']}}" alt="{{$v['author']}}"></i>{{$v['author']}}</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                    <div id="pagelistsss">
                    </div>
                    <!--楼层效果-->
                    <nav class="floor-nav" style="left: 11.5px;">
                        @foreach ($cate as $v)
                        <span class="scroll-nav active"><a href="/shops?cate_id={{$v['id']}}">{{$v['cate']}}</a></span>
                        @endforeach
                    </nav>
                </div>
            </div>
            <div class="footer-wrap">
                <div class="footer">
                    <h4>友情链接</h4>
                    <ul class="friendlink">
                        <li><a href='http://bbs.xzhichang.com' title='猎头公司' target='_blank'>猎头公司</a></li>
                        <li><a href='http://www.58trz.com' title='58投融资' target='_blank'>58投融资</a></li>
                        <li><a href='http://www.xzhichang.com' title='X职场' target='_blank'>X职场</a></li>
                    </ul>
                </div>
            </div>
            <div class="public_footer">
                <div class="fb">
                    <div class="main">
                        <dl class="menu">
                            <dt>
                                <a href="javascript:void(0)" title="更多" rel="nofollow">
                                        <img src="/yiren/template/images/footerlogo.png" alt="伊人私语">
                                    </a>
                            </dt>
                            <dd>
                                <a href="/aboutus" title="关于我们" rel="nofollow">关于我们</a>
                                <a href="/linkus" title="联系我们" rel="nofollow">联系我们</a>
                                <a href="/zhinan/" title="搭配指南" rel="nofollow">搭配指南</a>
                                <a href="/zhinan/" title="穿衣搭配" rel="nofollow">穿衣搭配</a>
                                <a href="/healthyzn/scbaoyang/" title="女性健康" rel="nofollow">女性健康</a>
                            </dd>
                        </dl>
                        <div class="address">
                            <p>
                                地址：北京市朝阳区建设路27号紫檀大厦806室
                                <br> 邮编：100022
                                <br> 总机：010-85787760转811
                                <br>
                            </p>
                            <p class="p2">
                                <a href="http://www.miibeian.gov.cn/" title="京ICP证140433号" target="_blank" rel="nofollow">京ICP证140433号</a><a href="http://www.miibeian.gov.cn/" title="京ICP备14022266号-15" target="_blank" rel="nofollow">京ICP备17005817号-3</a> 北京市公安局朝阳分局备案编号：11010502021692
                                <a href="javascript:void(0)" title="广播电视节目制作经营许可证（京）字第05209号" rel="nofollow">广播电视节目制作经营许可证（京）字第05209号</a>
                            </p>
                            <p>Copyright © 2018 yirenbbs.com Inc, All rights reserved.<span></span>伊人私语 版权所有</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script name="baidu-koubei-verification" src="//ikoubei.baidu.com/embed/170ab6700c8654f288ac4f7bf7e4ee3b"></script>
</body>

</html>
<input type="hidden" id="hidtype" value="" />
<!--[if lt IE 9]>
        <script src="/yiren/js/css3-mediaqueries.js"></script>
    <![endif]-->
<script type="text/javascript" src="/yiren/template/js/index/jQueryColor.js"></script>
<!--这个插件是瀑布流主插件函数必须-->
<script type="text/javascript" src="/yiren/template/js/index/jquery.masonry.min.js"></script>
<!--这个插件只是为了扩展jquery的animate函数动态效果可有可无-->
<script type="text/javascript" src="/yiren/template/js/index/jQeasing.js"></script>
<script type="text/javascript" src="/yiren/template/js/index/index.js"></script>
<!-- <input type="hidden" id="hidstype" value="" /> -->
<script type="text/javascript" src="/yiren/template/js/goods/article_list.js"></script>
<script type="text/javascript" src="/yiren/template/js/goods/jquery.scroll.floor.js"></script>
<script type="text/javascript">
scrollFloor({
    floorClass: '.znfirstone', //楼层盒子class;默认为'.scroll-floor'
    navClass: '.scroll-nav', //导航盒子class;默认为'.scroll-nav'
    activeClass: 'active', //导航高亮class;默认为'active'
    delayTime: 300, //点击导航，滚动条滑动到该位置的时间间隔;默认为200
    activeTop: 200, //楼层到窗口的某个位置时，导航高亮（设置该位置）;默认为100
    scrollTop: -100 //点击导航，楼层滑动到窗口的某位置;默认为100
});

function left(classname) {
    let ww = $(window).width();
    let sw = $('#main-wrap').width();
    let dis = (ww - sw) / 2 - 70;
    $("." + classname + "").css("left", dis)
}
left("floor-nav")
</script>