//产生随机数
function RndNum(n) { var rnd = ""; for (var i = 0; i < n; i++) rnd += Math.floor(Math.random() * 10); return rnd; }


//验证码随机数
var strCode = "";

//是否第一次登录错误
var first_error = false;

//点击换一张的时候切换验证码
function verc() {
    strCode = RndNum(4);
    (!!document.getElementById("verifyimage")) && (document.getElementById("verifyimage").src = "/Handle/VerifyIMGt.aspx?id=" + strCode);
    $("#verifyimage").attr("data_code", strCode);
}


var tel_id = "#invi_tel";
var pwd_id = "#invi_pwd";
var check_id = "#ischeck";


//验证是否登录
function invite_login_state() {

    //帐号（手机号）
    var tel = $.trim($(tel_id).val());
    //密码
    var pwd = $.trim($(pwd_id).val());
    //是否一周内自动登录
    var check = $.trim($(".auto_login i").attr("class"));

    if (tel == "") {
        show_msg_val(tel_id, "手机号不能为空");
        $(tel_id).focus();
        return false;
    }

    if (!validate_reg(tel, reg_phone)) {
        show_msg_val(tel_id, "手机号格式不正确");
        $(tel_id).focus();
        return false;
    }

    var f = true;

    $.ajax({
        type: "post",
        url: "/templatecs/Handle/LoginHandle.ashx",
        data: "action=validate_invi_tel&tel=" + escape(tel) + "",
        async: false,
        success: (function(msg) {
            if (msg == "nouser") {
                f = false;
            }
        })
    })

    if (!f) {
        show_msg_val(tel_id, "该手机号不存在");
        $(tel_id).focus();
        return false;
    }

    if (pwd == "") {
        show_msg_val(pwd_id, "密码不能为空");
        $(pwd_id).focus();
        return false;
    }

    if (pwd.length < 6) {
        show_msg_val(pwd_id, "密码格式不正确");
        $(pwd_id).focus();
        return false;
    }

    var isseven = 0;
    if (check.indexOf("checked")) {
        isseven = 1;
    }

    //提交登录
    $.ajax({
        type: "post",
        url: "/templatecs/Handle/LoginHandle.ashx",
        data: "action=validate_invi_login&tel=" + escape(tel) + "&pwd=" + escape(pwd) + "&is7=" + isseven + "&utype=" + $("#hidltype").val(),
        async: false,
        success: (function(msg) {
            if (msg == "nouser") {
                show_msg_val(tel_id, "该手机号不存在");
                $(tel_id).focus();
            } else if (msg == "no") {
                show_msg_val(tel_id, "手机号或密码错误");
                $(tel_id).focus();
            } else if (msg == "nocheck") { //审核中或未审核通过
                //window.location.href = "/register_last";
                window.location.reload(true);
            } else if (msg == "noagree") { //未走到第二步或不同意
                window.location.href = "/register_second";
                //window.location.reload(true);
            } else if (msg == "nosecond") { //未走到第二步
                window.location.href = "/register_company_second";
                //window.location.reload(true);
            } else if (msg == "nothird") { //未走到第三步
                window.location.href = "/register_company_third";
                //window.location.reload(true);
            } else if (msg == "notype") {
                alert("登录身份不正确");
            } else if (msg == "nocompany") {
                alert("您不是兼职猎头");
            } else if (msg == "nohunter") {
                alert("您不是企业用户");
            } else if (msg == "nostate") {
                alert("您的账号已被锁定");
            } else {
                //window.location.reload(true);
                //window.location.href = "/invite/account_daily_detail";

                var isreload = $("#hidlhref").val();
                if (isreload == 0) {
                    window.location.href = msg;
                } else {
                    window.location.href = window.location.href;
                }
            }
        })
    })

}

function checklogin(id) {

};

//显示错误提示
function show_msg_val(id, msg) {
    $(".loging_box input").removeClass("Validform_error");
    $(".control .valid_info").hide();

    if (msg != "") {
        $(id).parents(".control").find(".Validform_checktip").html(msg);
        $(id).addClass("Validform_error");
        $(id).siblings(".valid_info").show().css("top", "-26px")
        $(id).siblings(".valid_info").show().find(".Validform_checktip").addClass("Validform_wrong")
    }
}


//通过回车触发事件
$(function() {

    $(".loging_box input").keypress(function(e) {
        var keyCode = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
        if (keyCode == 13) {
            invite_login_state();
        }
    });

});


//定位到登录输入框
function login_job() {
    $("#invi_tel").focus();
}