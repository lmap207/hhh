//初始化编辑器
function editor() {
    var umeditor = UM.getEditor('myEditor', {
        initialFrameHeight: 140,
        initialFrameWidth: 585,
        toolbar: ['emotion', 'image', 'preview'] //设置显示项 （'source'HTML源码显示） 
    });
    umeditor.ready(function() {
        //初始化编辑器内容
        umeditor.setContent(""); //赋值给UEditor
    });
}
editor();

//翻页
function PageGo(page) {
    if (page < 1) {
        page = 1;
    }

    //获取文章回复列表
    init_reply_list(page);
}

//收藏、取消收藏文章
function collect_tiezi(obj) {

    var this_obj = $(obj);

    var tid = $.trim($("#hidtid").val());
    var collect = this_obj.attr("data-type");

    $.post("/templatecs/Handle/GoodsArticleHandle.ashx", { action: "Collect_Tiezi", id: tid }, function(data) {

        if (data == "nologin") {
            login_tc(1);
        } else if (data == "noid") {
            cancel_tcm("当前文章不存在");
        } else if (data == "no") {
            cancel_tcm("操作失败");
        } else if (data == "own") {
            cancel_tcm("自己不能收藏自己的文章");
        } else {
            cancel_tcm("操作成功");

            if (collect == 1) {
                this_obj.attr("data-type", "0");
                this_obj.html("<i class=\"i-store\" title=\"已收藏\"></i>已收藏");
            } else {
                this_obj.attr("data-type", "1");
                this_obj.html("<i class=\"i-store\" title=\"收藏\"></i>收藏");
            }

        }
    });

}

//添加评论、回复
function reply_tiezi(obj) {

    var tid = $.trim($("#hidtid").val());
    var rid = $(obj).attr("data-replyid");

    if (rid == "" || rid == undefined) {
        rid = 0;
    }

    var content = "";

    if (rid > 0) {
        content = $.trim($("#mini_editor_textarea").val());
        if (content == "") {
            if (content.indexOf("img") < 0) {
                cancel_tcm("内容必须填写");
                return false;
            }
        } else if (content.indexOf("：") >= 0) {
            content = content.substring(content.indexOf("：") + 1, content.length);
            if (content == "") {
                if (content.indexOf("img") < 0) {
                    cancel_tcm("内容必须填写");
                    return false;
                }
            }
        }
    } else {

        //获取纯文本
        var content_text = UM.getEditor('myEditor').getContentTxt();
        //获取带html标签的内容
        content = UM.getEditor('myEditor').getContent();

        if (content_text == "") {
            if (content.indexOf("img") < 0) {
                cancel_tcm("评论必须填写");
                return false;
            }
        }
    }

    $.post("/templatecs/Handle/GoodsArticleHandle.ashx", { action: "reply_tiezi", id: tid, rid: rid, rcontent: encodeURIComponent(content) }, function(data) {

        if (data == "nologin") {
            login_tc(1);
        } else if (data == "noid") {
            cancel_tcm("当前文章不存在");
        } else if (data == "less") {
            cancel_tcm("一分钟之内不能连续评论或回复");
        } else if (data == "no") {
            cancel_tcm("操作失败");
        } else {
            cancel_tcm("操作成功");

            $("#reply_box").remove();

            //初始化编辑器内容
            editor();

            //获取文章回复列表
            init_reply_list(1);
        }
    });

}

//喜欢评论、回复
function like_review_reply(obj) {

    var this_obj = $(obj);

    var tid = $.trim($("#hidtid").val());
    var rid = this_obj.attr("data-replyid");
    var like = this_obj.attr("data-like");

    $.post("/templatecs/Handle/GoodsArticleHandle.ashx", { action: "like_tiezi", id: tid, rid: rid }, function(data) {

        if (data == "nologin") {
            login_tc(1);
        } else if (data == "noid") {
            cancel_tcm("当前文章不存在");
        } else if (data == "norid") {
            cancel_tcm("当前评论或回复不存在");
        } else if (data == "no") {
            cancel_tcm("操作失败");
        } else {
            cancel_tcm("操作成功");

            if (like == 1) {
                this_obj.attr("data-like", "0");
                this_obj.addClass("digg-like-yes");
            } else {
                this_obj.attr("data-like", "1");
                this_obj.removeClass("digg-like-yes");
            }

            var likenum = data * 1;

            if (likenum > 0) {
                this_obj.find(".rnums").show();
            } else {
                this_obj.find(".rnums").hide();
            }
            this_obj.find(".rnums").html("(" + likenum + ")");
        }
    });

}

//删除评论、回复
function delete_review_reply(obj) {

    var tid = $.trim($("#hidtid").val());
    var rid = $(obj).attr("data-replyid");

    $.post("/templatecs/Handle/GoodsArticleHandle.ashx", { action: "delete_reply", id: tid, rid: rid }, function(data) {

        if (data == "nologin") {
            login_tc(1);
        } else if (data == "noid") {
            cancel_tcm("当前文章不存在");
        } else if (data == "norid") {
            cancel_tcm("当前评论或回复不存在");
        } else if (data == "no") {
            cancel_tcm("操作失败");
        } else {
            cancel_tcm("操作成功");

            var ccpage = $("#pagelistsss li.cur a").html();

            if (ccpage == undefined || ccpage == "") {
                ccpage = 1;
            }

            init_reply_list(ccpage);
        }
    });

}

//删除文章
function DelTiezi_Confirm() {

    confirm_tc("您是否要删除该文章，删除后其所有评论也会一并删除？", "DelTiezi()");
}

function DelTiezi() {

    var tid = $.trim($("#hidtid").val());

    $.post("/templatecs/Handle/GoodsArticleHandle.ashx", { action: "delete_article", id: tid }, function(data) {

        if (data == "nologin") {
            login_tc(1);
        } else if (data == "noid") {
            cancel_tcm("当前文章不存在");
        } else if (data == "no") {
            cancel_tcm("操作失败");
        } else if (data == "nouser") {
            cancel_tcm("发布人才能删除哦");
        } else {
            cancel_tcm("操作成功");
        }
    });

}

//获取回复弹层
function get_review_reply(obj) {

    var rid = $(obj).attr("data-replyid");
    var touserid = $(obj).attr("data-touserid");

    $.post("/templatecs/Handle/GoodsArticleHandle.ashx", { action: "Get_Reply_TextArea", rid: rid, touserid: touserid }, function(data) {

        if (data == "nologin") {
            login_tc(1);
        } else if (data == "noid") {
            cancel_tcm("当前文章不存在");
        } else if (data == "norid") {
            cancel_tcm("当前评论或回复不存在");
        } else if (data == "no") {
            cancel_tcm("操作失败");
        } else {
            $(body).append(data);
        }
    });

}

//获取表情弹层
$(document).on("click", ".face-block", function() {
    $(".faceDiv").show();
    $(".faceDiv").html($(".pic_bqtc").html());
});

//关闭表情弹层
$(document).on("click", ".faceDiv .close", function() {
    $(".faceDiv").hide();
});

//点击表情将图片添加到
$(document).on("click", ".faceDiv li", function() {
    var biaoqing_title = $(this).find("img").attr("alt");
    var rcontent = $("#mini_editor_textarea").val();

    rcontent = rcontent + "[" + biaoqing_title + "]";

    $("#mini_editor_textarea").val(rcontent);
});

//关闭回复列表
$(document).on("click", "#reply_box .ico-close", function() {
    $("#reply_box").remove();
});


//获取文章回复列表
function init_reply_list(page) {
    var tid = $.trim($("#hidtid").val());

    $(".weiba-sort").hide();
    $("#commentlist_2150").hide();
    $("#pagelistsss").hide();

    $.post("/templatecs/Handle/GoodsArticleHandle.ashx", { action: "Init_Tiezi_Reply_List", id: tid, page: page }, function(data) {

        var arr = data.split("¤");

        var rcnt = arr[0] * 1;

        if (rcnt > 0) {
            $(".weiba-sort").show();
            $("#commentlist_2150").show();
            $("#pagelistsss").show();

            $(".weiba-sort").html("<span>共有<span id=\"reply_count\">" + rcnt + "</span>条评论</span>");
            $("#commentlist_2150").html(arr[1]);
            $("#pagelistsss").html(arr[2]);
        }

    });

}

init_reply_list(1);