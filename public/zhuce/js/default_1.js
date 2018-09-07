/* File Created: 八月 15, 2013 */

/****************/
function increment(d) {
    if (d.size() > 0) {
        var a = d.val();
        var c = /^[1-9]\d{0,2}$/g;
        if (!a.match(c)) {
            alert("输入的数量有误,应为[1-999]");
            d.val(1);
            a = 1
        }
        var b = parseInt(a) + 1;
        if (b > 999) {
            b = 999
        }
        //                if (jQuery("#perOrderQuotaNum").size() > 0) {
        //                    var e = jQuery("#perOrderQuotaNum").attr("value");
        //                    if (e != null) {
        //                        e = parseInt(e);
        //                        if (e > 0 && b > e) {
        //                            YHD.alert("该商品每单限购 [" + e + "] 件，请修改购物数量,若给您带来不便，我们深表歉意。");
        //                            b = e
        //                        }
        //                    }
        //                }
        d.val(b)
    }
}
function incrementAll() {
    increment(jQuery("#product_amount"));
    for (var a = 2; a <= 4; a++) {
        increment(jQuery("#product_amount" + a))
    }
    // UpdateCommodityDetailNum(jQuery("#product_amount")[0]);
}
function decrement(d) {
    if (d.size() > 0) {
        var a = d.val();
        var c = /^[1-9]\d{0,2}$/g;
        if (!a.match(c)) {
            alert("输入的数量有误,应为[1-999]");
            d.val(1);
            a = 1
        }
        var b = parseInt(a) - 1;
        if (b > 999) {
            b = 999
        }
        if (b <= 0) {
            alert("输入的数量有误,应为[1-999]");
            b = 1
        }
        d.val(b)
    }
}
function decrementAll() {
    decrement(jQuery("#product_amount"));
    for (var a = 2; a <= 4; a++) {
        decrement(jQuery("#product_amount" + a))
    }
    // UpdateCommodityDetailNum(jQuery("#product_amount")[0]);
}
function checkAmount(c, d) {
    if (c.size() > 0) {
        var a = c.val();
        var b = /^[1-9]\d{0,2}$/g;
        if (!a || !a.match(b)) {
            c.val(1);
            alert("输入的数量有误,应为[1-999]");
            return false
        }
        if (d && a < d) {
            c.val(d);
            alert("购买的数量不能低于<b>" + d + "</b>。");
            return false
        }
    }
    return true
}
function inputOnlyNum(c, b, a) {
    c.value = c.value.replace(/\D+/g, "");
    if (c.value > a) {
        c.value = a
    }
    if (c.value < b) {
        c.value = b

    }
}
function buyButtonNumChange(c) {
    var a = jQuery("#" + c).val();
    if (c != "product_amount") {
        jQuery("#product_amount").val(a)
    }
    for (var b = 2; b <= 4; b++) {
        if (c != "#product_amount" + b) {
            jQuery("#product_amount" + b).val(a)
        }
    }
}


