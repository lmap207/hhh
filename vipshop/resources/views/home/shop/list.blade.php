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
                                <li><a href="http://yirenbbs.com" title="首页">首页</a></li>
                                <li class="current"><a href="/haohuo/" title="好货" class="app">好货</a></li>
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
                            <div class="listitle">
                                <dl>
                                    <dt><a href="/haohuo/270/" title="衣服" target='_blank'>衣服</a></dt>
                                </dl>
                            </div>
                            <ul>
                                @foreach ($shops as $v) @if($v['cate_id'] == $v->cate['id'])
                                <li><a class="weiba-thumb" href="/{{$v['id']}}.html" target="_blank"><img src="{{$v['picture']}}"  alt="{{$v['title']}}" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/{{$v['id']}}.html" target="_blank" >{{$v['title']}}</a></h3>
                                        <p><a href='javascript:void(0)'><i><img src="{{$v['apic']}}" alt="{{$v['author']}}"></i>{{$v['author']}}</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                @endif @endforeach
                            </ul>
                        </div>
                        <div class="znfirstone">
                            <div class="listitle">
                                <dl>
                                    <dt><a href="/haohuo/273/" title="护肤" target='_blank'>护肤</a></dt>
                                </dl>
                            </div>
                            <ul>
                                <li><a class="weiba-thumb" href="/haohuo/1884.html" title=雅诗兰黛&#183;dw持妆粉底液 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822030009482380.jpg"  alt="雅诗兰黛&#183;dw持妆粉底液" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1884.html" title=雅诗兰黛&#183;dw持妆粉底液 target="_blank" >雅诗兰黛&#183;dw持妆粉底液</a></h3>
                                        <p><a title='编织美梦。' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041228946391.jpg" alt="编织美梦。"></i>编织美梦。</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1883.html" title=美宝莲妆前乳 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822025752002490.jpg"  alt="美宝莲妆前乳" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1883.html" title=美宝莲妆前乳 target="_blank" >美宝莲妆前乳</a></h3>
                                        <p><a title='从未°' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041209816193.jpg" alt="从未°"></i>从未°</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1846.html" title=UNO&#183;男士净肤调理乳 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/21/small_180821035035669357.jpg"  alt="UNO&#183;男士净肤调理乳" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1846.html" title=UNO&#183;男士净肤调理乳 target="_blank" >UNO&#183;男士净肤调理乳</a></h3>
                                        <p><a title='Bing' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041316486319.jpg" alt="Bing"></i>Bing</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1813.html" title=膜法世家绿豆冰沙修复舒缓补水保湿面膜 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/20/small_180820042145461661.jpg"  alt="膜法世家绿豆冰沙修复舒缓补水保湿面膜" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1813.html" title=膜法世家绿豆冰沙修复舒缓补水保湿面膜 target="_blank" >膜法世家绿豆冰沙修复舒缓补水保湿面膜</a></h3>
                                        <p><a title='浅忆' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041144858122.jpg" alt="浅忆"></i>浅忆</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1812.html" title=EVE LOM亮采洁净面膜补水保湿 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/20/small_180820041326872346.jpg"  alt="EVE LOM亮采洁净面膜补水保湿" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1812.html" title=EVE LOM亮采洁净面膜补水保湿 target="_blank" >EVE LOM亮采洁净面膜补水保湿</a></h3>
                                        <p><a title='浮浅' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041144847698.jpg" alt="浮浅"></i>浮浅</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1811.html" title=百雀羚三生花补水保湿面膜 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/20/small_180820034708297362.jpg"  alt="百雀羚三生花补水保湿面膜" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1811.html" title=百雀羚三生花补水保湿面膜 target="_blank" >百雀羚三生花补水保湿面膜</a></h3>
                                        <p><a title='悸动' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041144836698.jpg" alt="悸动"></i>悸动</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1809.html" title=可莱丝补水面膜 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/20/small_180820033822578835.jpg"  alt="可莱丝补水面膜" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1809.html" title=可莱丝补水面膜 target="_blank" >可莱丝补水面膜</a></h3>
                                        <p><a title='守侯' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041144826376.jpg" alt="守侯"></i>守侯</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1808.html" title=Whoo后&#183;白善土保湿滋润面膜泥 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/20/small_180820033423022472.jpg"  alt="Whoo后&#183;白善土保湿滋润面膜泥" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1808.html" title=Whoo后&#183;白善土保湿滋润面膜泥 target="_blank" >Whoo后&#183;白善土保湿滋润面膜泥</a></h3>
                                        <p><a title='苍白' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041144817523.jpg" alt="苍白"></i>苍白</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1805.html" title=韩后&#183;熬夜达人面膜 补水保湿提亮肤色 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/20/small_180820032848641829.jpg"  alt="韩后&#183;熬夜达人面膜 补水保湿提亮肤色" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1805.html" title=韩后&#183;熬夜达人面膜 补水保湿提亮肤色 target="_blank" >韩后&#183;熬夜达人面膜 补水保湿提亮肤色</a></h3>
                                        <p><a title='浮云*' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041144803200.jpg" alt="浮云*"></i>浮云*</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1802.html" title=skinfood&#183;黑糖光彩补水保湿面膜 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/20/small_180820031723233652.jpg"  alt="skinfood&#183;黑糖光彩补水保湿面膜" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1802.html" title=skinfood&#183;黑糖光彩补水保湿面膜 target="_blank" >skinfood&#183;黑糖光彩补水保湿面膜</a></h3>
                                        <p><a title='相遇*' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041144790200.jpg" alt="相遇*"></i>相遇*</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="znfirstone">
                            <div class="listitle">
                                <dl>
                                    <dt><a href="/haohuo/274/" title="彩妆" target='_blank'>彩妆</a></dt>
                                </dl>
                            </div>
                            <ul>
                                <li><a class="weiba-thumb" href="/haohuo/1904.html" title=雅诗兰黛倾慕哑光丝绒系列干枫叶色，一抹红唇，优雅女神范 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/09/04/180904033256901451.jpg"  alt="雅诗兰黛倾慕哑光丝绒系列干枫叶色，一抹红唇，优雅女神范" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1904.html" title=雅诗兰黛倾慕哑光丝绒系列干枫叶色，一抹红唇，优雅女神范 target="_blank" >雅诗兰黛倾慕哑光丝绒系列干枫叶色，一抹红唇，优雅...</a></h3>
                                        <p><a title='白竹1993' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041508540342.jpg" alt="白竹1993"></i>白竹1993</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1688.html" title=三色偏光珠光变色龙彩虹人鱼姬眼影 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/15/small_180815032440369402.jpg"  alt="三色偏光珠光变色龙彩虹人鱼姬眼影" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1688.html" title=三色偏光珠光变色龙彩虹人鱼姬眼影 target="_blank" >三色偏光珠光变色龙彩虹人鱼姬眼影</a></h3>
                                        <p><a title='背叛' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_34.jpg" alt="背叛"></i>背叛</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1686.html" title=星空18色眼影盘珠光哑光大地人鱼姬 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/15/small_180815031643257913.jpg"  alt="星空18色眼影盘珠光哑光大地人鱼姬" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1686.html" title=星空18色眼影盘珠光哑光大地人鱼姬 target="_blank" >星空18色眼影盘珠光哑光大地人鱼姬</a></h3>
                                        <p><a title='夺爱' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_33.jpg" alt="夺爱"></i>夺爱</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1682.html" title=苏卡娜 嫁接纤维睫毛膏 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/15/small_180815030600270257.jpg"  alt="苏卡娜 嫁接纤维睫毛膏" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1682.html" title=苏卡娜 嫁接纤维睫毛膏 target="_blank" >苏卡娜 嫁接纤维睫毛膏</a></h3>
                                        <p><a title='怀抱' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_32.jpg" alt="怀抱"></i>怀抱</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1678.html" title=孔雀羽翼开屏绿管睫毛膏浓密纤长卷翘 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/15/small_180815025724638109.jpg"  alt="孔雀羽翼开屏绿管睫毛膏浓密纤长卷翘" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1678.html" title=孔雀羽翼开屏绿管睫毛膏浓密纤长卷翘 target="_blank" >孔雀羽翼开屏绿管睫毛膏浓密纤长卷翘</a></h3>
                                        <p><a title='暗恋' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_31.jpg" alt="暗恋"></i>暗恋</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1675.html" title=糖果染唇液不脱色咬唇妆唇彩防水不沾杯 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/15/small_180815024511282692.jpg"  alt="糖果染唇液不脱色咬唇妆唇彩防水不沾杯" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1675.html" title=糖果染唇液不脱色咬唇妆唇彩防水不沾杯 target="_blank" >糖果染唇液不脱色咬唇妆唇彩防水不沾杯</a></h3>
                                        <p><a title='揣测' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_30.jpg" alt="揣测"></i>揣测</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1535.html" title=彩虹璀璨星空星辰钻石滋润水润哑光口红 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/10/small_180810050046425239.jpg"  alt="彩虹璀璨星空星辰钻石滋润水润哑光口红" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1535.html" title=彩虹璀璨星空星辰钻石滋润水润哑光口红 target="_blank" >彩虹璀璨星空星辰钻石滋润水润哑光口红</a></h3>
                                        <p><a title='暗恋' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_31.jpg" alt="暗恋"></i>暗恋</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1532.html" title=Holdlive冰激凌眼影 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/10/small_180810045201928478.jpg"  alt="Holdlive冰激凌眼影" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1532.html" title=Holdlive冰激凌眼影 target="_blank" >Holdlive冰激凌眼影</a></h3>
                                        <p><a title='揣测' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_30.jpg" alt="揣测"></i>揣测</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1531.html" title=cosplay贝壳色爱心星星闪粉钻眼部贴片 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/10/small_180810044421638976.jpg"  alt="cosplay贝壳色爱心星星闪粉钻眼部贴片" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1531.html" title=cosplay贝壳色爱心星星闪粉钻眼部贴片 target="_blank" >cosplay贝壳色爱心星星闪粉钻眼部贴片</a></h3>
                                        <p><a title='可若' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_3.jpg" alt="可若"></i>可若</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1528.html" title=火烈鸟丝羽流畅硬头眼线液笔 密羽纤长浓密睫毛膏 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/10/small_180810043118458334.jpg"  alt="火烈鸟丝羽流畅硬头眼线液笔 密羽纤长浓密睫毛膏" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1528.html" title=火烈鸟丝羽流畅硬头眼线液笔 密羽纤长浓密睫毛膏 target="_blank" >火烈鸟丝羽流畅硬头眼线液笔 密羽纤长浓密睫毛膏</a></h3>
                                        <p><a title='冷面' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Think_UserHead/2016/07/12/small_29.jpg" alt="冷面"></i>冷面</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="znfirstone">
                            <div class="listitle">
                                <dl>
                                    <dt><a href="/haohuo/276/" title="礼物" target='_blank'>礼物</a></dt>
                                </dl>
                            </div>
                            <ul>
                                <li><a class="weiba-thumb" href="/haohuo/1871.html" title=新疆网红天润酸奶 整箱装 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822115139034225.jpg"  alt="新疆网红天润酸奶 整箱装" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1871.html" title=新疆网红天润酸奶 整箱装 target="_blank" >新疆网红天润酸奶 整箱装</a></h3>
                                        <p><a title='∝雅泽' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041208784534.jpg" alt="∝雅泽"></i>∝雅泽</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1869.html" title=可口可乐 日本限量樱花可乐收藏版*3瓶 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822114642706221.jpg"  alt="可口可乐 日本限量樱花可乐收藏版*3瓶" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1869.html" title=可口可乐 日本限量樱花可乐收藏版*3瓶 target="_blank" >可口可乐 日本限量樱花可乐收藏版*3瓶</a></h3>
                                        <p><a title='穷词' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041256429841.jpg" alt="穷词"></i>穷词</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1867.html" title=谷耐 西瓜恋上牛奶雨*5瓶 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822105650458151.jpg"  alt="谷耐 西瓜恋上牛奶雨*5瓶" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1867.html" title=谷耐 西瓜恋上牛奶雨*5瓶 target="_blank" >谷耐 西瓜恋上牛奶雨*5瓶</a></h3>
                                        <p><a title='金迷纸醉。' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041227390365.jpg" alt="金迷纸醉。"></i>金迷纸醉。</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1865.html" title=好利来 半熟芝士蛋糕 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822105352815680.jpg"  alt="好利来 半熟芝士蛋糕" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1865.html" title=好利来 半熟芝士蛋糕 target="_blank" >好利来 半熟芝士蛋糕</a></h3>
                                        <p><a title='无话不说。' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041227354190.jpg" alt="无话不说。"></i>无话不说。</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1864.html" title=百事 巴厘岛限定蓝色可乐 450ml*4瓶 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822105131202525.jpg"  alt="百事 巴厘岛限定蓝色可乐 450ml*4瓶" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1864.html" title=百事 巴厘岛限定蓝色可乐 450ml*4瓶 target="_blank" >百事 巴厘岛限定蓝色可乐 450ml*4瓶</a></h3>
                                        <p><a title='契约' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041149058799.jpg" alt="契约"></i>契约</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1862.html" title=StarBurst星爆 果汁抓糖机 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822104332708127.jpg"  alt="StarBurst星爆 果汁抓糖机" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1862.html" title=StarBurst星爆 果汁抓糖机 target="_blank" >StarBurst星爆 果汁抓糖机</a></h3>
                                        <p><a title='空心人' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041152177997.jpg" alt="空心人"></i>空心人</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1859.html" title=台湾进口KAKA 龙虾饼 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822102911081297.jpg"  alt="台湾进口KAKA 龙虾饼" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1859.html" title=台湾进口KAKA 龙虾饼 target="_blank" >台湾进口KAKA 龙虾饼</a></h3>
                                        <p><a title='让他给05' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041411524271.jpg" alt="让他给05"></i>让他给05</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1858.html" title=韩国三养 变态辣火鸡面 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822102408632578.jpg"  alt="韩国三养 变态辣火鸡面" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1858.html" title=韩国三养 变态辣火鸡面 target="_blank" >韩国三养 变态辣火鸡面</a></h3>
                                        <p><a title='ヽ |童话破灭' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041207152587.jpg" alt="ヽ |童话破灭"></i>ヽ |童话破灭</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1857.html" title=网红脏脏包巧克力早餐提拉米苏 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822102111603536.jpg"  alt="网红脏脏包巧克力早餐提拉米苏" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1857.html" title=网红脏脏包巧克力早餐提拉米苏 target="_blank" >网红脏脏包巧克力早餐提拉米苏</a></h3>
                                        <p><a title='素花吟' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041305774752.jpg" alt="素花吟"></i>素花吟</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                                <li><a class="weiba-thumb" href="/haohuo/1856.html" title=农心 辛拉面*8连包组合 target="_blank"><img src="http://image01.xzhichang.com/goods_article/2018/08/22/small_180822100707424148.jpg"  alt="农心 辛拉面*8连包组合" ></a>
                                    <div class="goosdetail">
                                        <h3><a  href="/haohuo/1856.html" title=农心 辛拉面*8连包组合 target="_blank" >农心 辛拉面*8连包组合</a></h3>
                                        <p><a title='可有可无' href='javascript:void(0)'><i><img src="http://image01.xzhichang.com/Yirensiyu_UserHead/2018/08/08/small_180808041206956969.jpg" alt="可有可无"></i>可有可无</a><span class="likenum" style='display:none;'>0</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="pagelistsss">
                    </div>
                    <!--楼层效果-->
                    <nav class="floor-nav" style="left: 11.5px;">
                        @foreach ($cate as $v)
                        <span class="scroll-nav active">{{$v['cate']}}</span> @endforeach
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
                                <!--<a href="/dapei/" title="搭配" rel="nofollow">搭配</a>
                                    <a href="/zhuanti/hanxi.html" title="韩系" rel="nofollow">韩系</a>
                                    <a href="/zhuanti/rixi.html" title="日系" rel="nofollow">日系</a>
                                    <a href="/zhuanti/oumeiz.html" title="欧美" rel="nofollow">欧美</a>
                                    <a href="/zhuanti/agez.html" title="矮个子" rel="nofollow">矮个子</a>-->
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