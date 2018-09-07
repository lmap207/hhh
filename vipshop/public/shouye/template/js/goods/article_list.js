//翻页
function PageGo(page) {
    if (page < 1) {
        page = 1;
    }

    var stype = $.trim($("#hidstype").val());
    var wurl = stype;


    if (page > 1) {

        if (stype.indexOf(".html") >= 0) {
            wurl = stype.substring(0, stype.lastindexOf("_"));
        } else {
            wurl = stype + "index_";
        }

        wurl += page + ".html";
    }

    window.location.href = wurl;
}


//对特殊符号进行编码，+ – && || ! ( ) { } [ ] ^ ~ * ? : / .
function Get_Str_Ecode(obj) {


    if (obj.indexOf("+") >= 0) {
        obj = Replace_Str_Code(obj, "+", "%2B"); //将 + 号替换为十六进制
    }

    if (obj.indexOf("-") >= 0) {
        obj = Replace_Str_Code(obj, "-", "%2D"); //将 - 号替换为十六进制
    }

    if (obj.indexOf("&") >= 0) {
        obj = Replace_Str_Code(obj, "&", "%26"); //将 & 号替换为十六进制
    }

    if (obj.indexOf("|") >= 0) {
        obj = Replace_Str_Code(obj, "|", "%7C"); //将 | 号替换为十六进制
    }

    if (obj.indexOf("!") >= 0) {
        obj = Replace_Str_Code(obj, "!", "%21"); //将 ! 号替换为十六进制
    }

    if (obj.indexOf("(") >= 0) {
        obj = Replace_Str_Code(obj, "(", "%28"); //将 ( 号替换为十六进制
    }

    if (obj.indexOf(")") >= 0) {
        obj = Replace_Str_Code(obj, ")", "%29"); //将 ) 号替换为十六进制
    }

    if (obj.indexOf("{") >= 0) {
        obj = Replace_Str_Code(obj, "{", "%7B"); //将 { 号替换为十六进制
    }

    if (obj.indexOf("}") >= 0) {
        obj = Replace_Str_Code(obj, "}", "%7D"); //将 } 号替换为十六进制
    }

    if (obj.indexOf("[") >= 0) {
        obj = Replace_Str_Code(obj, "[", "%5B"); //将 [ 号替换为十六进制
    }

    if (obj.indexOf("]") >= 0) {
        obj = Replace_Str_Code(obj, "]", "%5D"); //将 ] 号替换为十六进制
    }

    if (obj.indexOf("^") >= 0) {
        obj = Replace_Str_Code(obj, "^", "%5E"); //将 ^ 号替换为十六进制
    }

    if (obj.indexOf("~") >= 0) {
        obj = Replace_Str_Code(obj, "~", "%7E"); //将 ~ 号替换为十六进制
    }

    if (obj.indexOf("*") >= 0) {
        obj = Replace_Str_Code(obj, "*", "%2A"); //将 * 号替换为十六进制
    }

    if (obj.indexOf("?") >= 0) {
        obj = Replace_Str_Code(obj, "?", "%3F"); //将 ? 号替换为十六进制
    }

    if (obj.indexOf(":") >= 0) {
        obj = Replace_Str_Code(obj, ":", "%3A"); //将 : 号替换为十六进制
    }

    if (obj.indexOf("/") >= 0) {
        obj = Replace_Str_Code(obj, "/", "%2F"); //将 / 号替换为十六进制
    }

    if (obj.indexOf(".") >= 0) {
        obj = Replace_Str_Code(obj, ".", "%2E"); //将 . 号替换为十六进制
    }


    //    if (obj.indexOf("%") >= 0) {
    //        obj = Replace_Str_Code(obj, "%", "%25"); //将 % 号替换为十六进制
    //    }

    //    if (obj.indexOf("=") >= 0) {
    //        obj = Replace_Str_Code(obj, "=", "&3D"); //将 = 号替换为十六进制
    //    }

    //    if (obj.indexOf("#") >= 0) {
    //        obj = Replace_Str_Code(obj, "#", "%23"); //将 # 号替换为十六进制
    //    }

    //    if (obj.indexOf(" ") >= 0) {
    //        obj = Replace_Str_Code(obj, " ", "%20"); //将 空格 号替换为十六进制
    //    }

    return obj;
}

//将特殊字符替换成编码，+ – && || ! ( ) { } [ ] ^ ~ * ? : / .
function Replace_Str_Code(obj, key, val) {
    while (obj.indexOf(key) >= 0) {
        obj = obj.replace(key, val);
    }
    return obj;
}