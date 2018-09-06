$.fn.banqh = function(can) {
    can = $.extend({ box: null, pic: null, pnum: null, prev_btn: null, next_btn: null, prev: null, next: null, pop_prev: null, pop_next: null, autoplay: false, interTime: 5000, delayTime: 800, pop_delayTime: 800, order: 0, picdire: true, mindire: true, min_picnum: null, pop_up: false, pop_div: null, pop_pic: null, pop_xx: null, mhc: null }, can || {});
    var picnum = $(can.pic).find('ul li').length;
    var picw = $(can.pic).find('ul li').outerWidth(true);
    var pich = $(can.pic).find('ul li').outerHeight(true);
    var poppicw = $(can.pop_pic).find('ul li').outerWidth(true);
    var picminnum = $(can.pnum).find('ul li').length;
    var picpopnum = $(can.pop_pic).find('ul li').length;
    var picminw = $(can.pnum).find('ul li').outerWidth(true);
    var picminh = $(can.pnum).find('ul li').outerHeight(true);
    var pictime;
    var tpqhnum = 0;
    var xtqhnum = 0;
    var popnum = 0;
    $(can.pic).find('ul').width(picnum * picw).height(picnum * pich);
    $(can.pnum).find('ul').width(picminnum * picminw).height(picminnum * picminh);
    $(can.pop_pic).find('ul').width(picpopnum * poppicw);
    $(can.pnum).find('li').click(function() { tpqhnum = xtqhnum = $(can.pnum).find('li').index(this);
        show(tpqhnum);
        minshow(xtqhnum); }).eq(can.order).trigger("click");
    if (can.pop_up == true) {
        $(can.pic).find('ul li').click(function() { $(can.mhc).height($(document).height()).show();
            $(can.pop_div).show();
            popnum = $(this).index(); var gdjl_w = -popnum * poppicw;
            $(can.pop_pic).find('ul').css('left', gdjl_w);
            popshow(popnum); })
        $(can.pop_xx).click(function() { $(can.mhc).hide();
            $(can.pop_div).hide(); })
    }
    if (can.autoplay == true) {
        pictime = setInterval(function() {
            show(tpqhnum);
            minshow(tpqhnum)
            tpqhnum++;
            xtqhnum++;
            if (tpqhnum == picnum) { tpqhnum = 0 };
            if (xtqhnum == picminnum) { xtqhnum = 0 };
        }, can.interTime);
        $(can.box).hover(function() { clearInterval(pictime); }, function() {
            pictime = setInterval(function() {
                show(tpqhnum);
                minshow(tpqhnum)
                tpqhnum++;
                xtqhnum++;
                if (tpqhnum == picnum) { tpqhnum = 0 };
                if (xtqhnum == picminnum) { xtqhnum = 0 };
            }, can.interTime);
        });
    }
    $(can.prev_btn).click(function() { if (tpqhnum == 0) { tpqhnum = picnum }; if (xtqhnum == 0) { xtqhnum = picnum };
        xtqhnum--;
        tpqhnum--;
        show(tpqhnum);
        minshow(xtqhnum); })
    $(can.next_btn).click(function() {
        if (tpqhnum == picnum - 1) { tpqhnum = -1 };
        if (xtqhnum == picminnum - 1) { xtqhnum = -1 };
        xtqhnum++;
        minshow(xtqhnum)
        tpqhnum++;
        show(tpqhnum);
    })
    $(can.prev).click(function() { if (tpqhnum == 0) { tpqhnum = picnum }; if (xtqhnum == 0) { xtqhnum = picnum };
        xtqhnum--;
        tpqhnum--;
        show(tpqhnum);
        minshow(xtqhnum); })
    $(can.next).click(function() {
        if (tpqhnum == picnum - 1) { tpqhnum = -1 };
        if (xtqhnum == picminnum - 1) { xtqhnum = -1 };
        xtqhnum++;
        minshow(xtqhnum)
        tpqhnum++;
        show(tpqhnum);
    })
    $(can.pop_prev).click(function() { if (popnum == 0) { popnum = picnum };
        popnum--;
        popshow(popnum); })
    $(can.pop_next).click(function() { if (popnum == picnum - 1) { popnum = -1 };
        popnum++;
        popshow(popnum); })

    function minshow(xtqhnum) {
        var mingdjl_num = xtqhnum - can.min_picnum + 2
        var mingdjl_w = -mingdjl_num * picminw;
        var mingdjl_h = -mingdjl_num * picminh;
        if (can.mindire == true) {
            $(can.pnum).find('ul li').css('float', 'left');
            if (picminnum > can.min_picnum) {
                if (xtqhnum < 3) { mingdjl_w = 0; }
                if (xtqhnum == picminnum - 1) { mingdjl_w = -(mingdjl_num - 1) * picminw; }
                $(can.pnum).find('ul').stop().animate({ 'left': mingdjl_w }, can.delayTime);
            }
        } else {
            $(can.pnum).find('ul li').css('float', 'none');
            if (picminnum > can.min_picnum) {
                if (xtqhnum < 3) { mingdjl_h = 0; }
                if (xtqhnum == picminnum - 1) { mingdjl_h = -(mingdjl_num - 1) * picminh; }
                $(can.pnum).find('ul').stop().animate({ 'top': mingdjl_h }, can.delayTime);
            }
        }
    }

    function show(tpqhnum) {
        var gdjl_w = -tpqhnum * picw;
        var gdjl_h = -tpqhnum * pich;
        if (can.picdire == true) { $(can.pic).find('ul li').css('float', 'left');
            $(can.pic).find('ul').stop().animate({ 'left': gdjl_w }, can.delayTime); } else { $(can.pic).find('ul').stop().animate({ 'top': gdjl_h }, can.delayTime); }
        $(can.pnum).find('li').eq(tpqhnum).addClass("on").siblings(this).removeClass("on");
    };

    function popshow(popnum) { var gdjl_w = -popnum * poppicw;
        $(can.pop_pic).find('ul').stop().animate({ 'left': gdjl_w }, can.pop_delayTime); };
}