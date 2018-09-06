$(document).on('click', '.tabmenu li', function() {
    $(".tabmenu li").removeClass("selected");
    $(this).addClass("selected");
    $(".tabbox .lkogin").hide();
    $(".tabbox .lkogin").eq($(this).index()).show();

    var cindex = $(".tabmenu li").index(this) + 1;

    validate_cur_type(cindex);

})
$(".commonlogin").hover(function() {
    $(".tabmenu span").show();
}, function() {
    $(".tabmenu span").hide();
})
$(".tabmenu span").on("click", function() {
    $(".vdialog-modald,.commonlogin").hide()
})



//点击出现弹层
function login_tc(type) {
    $(".commonlogin").show();
    $(".vdialog-modald").show();

    validate_cur_type(type);
}


function validate_cur_type(type) {
    if (type == 1) {
        $("#Form_hunter_login").show();
        $("#Form_hunter_login .form_hunter_login_tel").attr("id", "invi_tel");
        $("#Form_hunter_login .form_hunter_login_pwd").attr("id", "invi_pwd");
        $("#Form_hunter_login .form_hunter_login_btn").attr("onclick", "invite_login_state()");

        $("#Form_company_login .form_company_login_tel").attr("id", "");
        $("#Form_company_login .form_company_login_pwd").attr("id", "");
        $("#Form_company_login .form_company_login_btn").attr("onclick", "");

        $("#Form_company_login").hide();

    } else {
        $("#Form_company_login").show();
        $("#Form_company_login .form_company_login_tel").attr("id", "invi_tel");
        $("#Form_company_login .form_company_login_pwd").attr("id", "invi_pwd");
        $("#Form_company_login .form_company_login_btn").attr("onclick", "invite_login_state()");

        $("#Form_hunter_login .form_hunter_login_tel").attr("id", "");
        $("#Form_hunter_login .form_hunter_login_pwd").attr("id", "");
        $("#Form_hunter_login .form_hunter_login_btn").attr("onclick", "");

        $("#Form_hunter_login").hide();

    }

    $("#hidltype").val(type);
}