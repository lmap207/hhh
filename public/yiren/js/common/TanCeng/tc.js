//加载带有确定按钮的弹层
function confirm_tc(msg, function_name) {

    $(".vdialog-modal,#dvMsgBox").show();

    $("#dvMsgCT").html(msg);

    $("#confirm_btns").attr("onclick", function_name);
}

//加载几秒之后能够消失的弹层
function cancel_tc(msg) {
    $("#dvMsgBox").find("#dvMsgBottom").remove()
    $(".vdialog-modal,#dvMsgBox").show();

    $("#dvMsgCT").html(msg);

    setTimeout(function() {
        $(".vdialog-modal,#dvMsgBox").hide();

    }, 2000);
}

function cancel_tcm(msg) {

    $(".vdialog-modal1,#dvMsgBox1").show();

    $("#dvMsgCT1").html(msg);

    setTimeout(function() {
        $(".vdialog-modal1,#dvMsgBox1").hide();
    }, 2000);
}

//加载几秒之后能够消失的弹层
function cancel_tc_time(msg, t) {
    $("#dvMsgBox").find("#dvMsgBottom").remove()
    $(".vdialog-modal,#dvMsgBox").show();

    $("#dvMsgCT").html(msg);

    setTimeout(function() {
        $(".vdialog-modal,#dvMsgBox").hide();
    }, t * 1000);
}

function cancel_tc_time1(msg, t) {
    $("#dvMsgBox").find("#dvMsgBottom").remove()
    $(".vdialog-modal1,#dvMsgBox").show();

    $("#dvMsgCT").html(msg);

    setTimeout(function() {
        $(".vdialog-modal1,#dvMsgBox").hide();
    }, t * 1000);
}

//点击取消进行操作
$(document).on("click", "#dele", function() {
    $(".vdialog-modal,#dvMsgBox").hide();
})


//点击确定按钮进行操作
$(document).on("click", "#confirm_btns", function() {
    var fname = $(this).attr("onclick");
    fname;

    $("#dele").click();
})