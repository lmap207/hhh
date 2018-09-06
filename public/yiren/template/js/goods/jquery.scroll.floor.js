(function(window) {
    var defaults = { floorClass: '.scroll-floor', navClass: '.scroll-nav', activeClass: 'active', activeTop: 100, scrollTop: 100, delayTime: 200 };
    var $body = $('body'),
        floorList = null,
        navList = null;

    function getItem(_list, newOptions) { var data = [];
        _list.each(function() { var item = {};
            item.$obj = $body.find(this);
            item.$activeTop = $body.find(this).offset().top - newOptions.activeTop;
            item.$scrollTop = $body.find(this).offset().top + newOptions.scrollTop;
            data.push(item); }); return data; }

    function scrollActive(_list, newOptions) { var nowScrollTop = $(window).scrollTop(); var data = getItem(floorList, newOptions);
        $.each(data, function(i, item) { if (nowScrollTop > item.$activeTop) { _list.removeClass(newOptions.activeClass).eq(i).addClass(newOptions.activeClass); } }); }

    function clickActive(_index, newOptions) { var data = getItem(floorList, newOptions);
        $('html,body').animate({ 'scrollTop': data[_index].$scrollTop }, newOptions.delayTime); }
    var scroll_floor = window.scrollFloor = function(options) { var newOptions = $.extend({}, defaults, options);
        floorList = $body.find(newOptions.floorClass);
        navList = $body.find(newOptions.navClass);
        scrollActive(navList, newOptions);
        $(window).bind('scroll', function() { scrollActive(navList, newOptions); });
        navList.bind('click', function() { var _index = $body.find(this).index();
            clickActive(_index, newOptions); }); }
})(window);