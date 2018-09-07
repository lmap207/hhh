$(function(){
	//判断是否IE6
	var isIE6 = false;
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIE6 = true;
	}
	
	//头部关注MIQI伸缩	   
	$(".background_pay").mouseenter(function(){
		$(this).find(".bookmail_more").show();
	  	$(this).addClass("background_pay_hover");
	});
	
	$(".background_pay").mouseleave(function(){
		$(this).find(".bookmail_more").hide();
	  	$(this).removeClass("background_pay_hover");
	});
	
	//头部主导航鼠标经过效果	   
	$(".subNav ul li ").mouseenter(function(){
		$(this).find(".sub_nav").show();
	});
	
	$(".subNav ul li ").mouseleave(function(){
		$(this).find(".sub_nav").hide();
	});
	
	//购物车切换效果
	$("#ECS_CARTINFO").mouseenter(function(){
		$(this).find(".shopBody").fadeIn(0);
	  	$(this).find(".shop_txt").addClass("shop_txt_hover");
	});
	
	$("#ECS_CARTINFO").mouseleave(function(){
		$(this).find(".shopBody").fadeOut(0);
	  	$(this).find(".shop_txt").removeClass("shop_txt_hover");
	});
	
		
	
	//商品分类树
	$(".leftNav ul li").mouseenter(function(){
		$(this).find(".leftSubNav_list").show();
	  	$(this).addClass("current");
	});
	
	$(".leftNav ul li").mouseleave(function(){
		$(this).find(".leftSubNav_list").hide();
	  	$(this).removeClass("current");
	});
	
	//商品分类树右侧切换效果
	$(".slideBox").mouseenter(function(){
		$(this).find(".banner_btn_left").show();
	  	$(this).addClass("banner_btn_left_hover");
	});
	
	$(".slideBox").mouseleave(function(){
		$(this).find(".banner_btn_left").hide();
	  	$(this).removeClass("banner_btn_left_hover");
	});
	
	$(".slideBox").mouseenter(function(){
		$(this).find(".banner_btn_right").show();
	  	$(this).addClass("banner_btn_right_hover");
	});
	
	$(".slideBox").mouseleave(function(){
		$(this).find(".banner_btn_right").hide();
	  	$(this).removeClass("banner_btn_right_hover");
	});
     
	  //除首页商品分类鼠标移上去效果
	 $(".classNav ").mouseenter(function(){
		$(this).find(".left_nav").show();
	  	
	}); 
	
	$(".classNav ").mouseleave(function(){
		$(this).find(".left_nav").hide();
	  	
	});
	  
	  
	 //轮播广告下侧图片上下浮动
	 
    $("#banner_01 .big_txt ").mouseenter(function(){
		$("#banner_01 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_01 .big_txt ").mouseleave(function(){
		$("#banner_01 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})
	
	 $("#banner_02 .big_txt ").mouseenter(function(){
		$("#banner_02 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_02 .big_txt ").mouseleave(function(){
		$("#banner_02 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})
	
	$("#banner_03 .big_txt ").mouseenter(function(){
		$("#banner_03 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_03 .big_txt ").mouseleave(function(){
		$("#banner_03 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})
	
	$("#banner_04 .big_txt ").mouseenter(function(){
		$("#banner_04 .big_txt  ").stop();
		$(this).animate({top: '173px'}, 300);
	})
	
	$(" #banner_04 .big_txt ").mouseleave(function(){
		$("#banner_04 .big_txt  ").stop();
		$(this).animate({top: '153px'}, 300);
	})


//本周热推鼠标移上去的效果	   
	$(".hot_list01 dd").mouseenter(function(){
		$(this).find(".hot_btn").show();
		$(this).find(".hot_line").show();
	});
	
	$(".hot_list01 dd").mouseleave(function(){
		$(this).find(".hot_btn").hide();
		$(this).find(".hot_line").hide();
	});
	
	
	$(".hot_list02 dt").mouseenter(function(){
		$(this).find(".hot_btn").show();
		$(this).find(".hot_line").show();
	});
	
	$(".hot_list02 dt").mouseleave(function(){
		$(this).find(".hot_btn").hide();
		$(this).find(".hot_line").hide();
	});
	
	$(".hot_list02 dd").mouseenter(function(){
		$(this).find(".hot_btn").show();
		$(this).find(".hot_line").show();
	});
	
	$(".hot_list02 dd").mouseleave(function(){
		$(this).find(".hot_btn").hide();
		$(this).find(".hot_line").hide();
	});


	//列表页商品分类左侧导航点击切换
	$("#cate h1").click(function(){
		if($(this).next("ul").is(":visible"))
		{
			$(this).next("ul").hide();	
		}
		else
		{
			$("#cate ul").hide();	
			$(this).next("ul").show();	
		}
	})
	
	//列表页商品分类	   
	$(".y_searchList .li").mouseenter(function(){
		$(this).find(".y_hide").show();
	  	$(this).addClass("li_hover");
	});
	
	$(".y_searchList .li").mouseleave(function(){
		$(this).find(".y_hide").hide();
	  	$(this).removeClass("li_hover");
	});
	
	//详情页会员等级弹出框	   
	$(".center_collect_help ").mouseenter(function(){
		$(this).find(".center_collect_pop").show();
	  	
	});
	
	$(".center_collect_help ").mouseleave(function(){
		$(this).find(".center_collect_pop").hide();
	  	
	});
	
	 
	//详情页切换点击事件
	var ProDetailBox=$(".ProDetailBox");
	var ProDetailBox_li=$(".inLeft_btn").find("li");
	ProDetailBox_li.click(function(){
		
		var index=ProDetailBox_li.index(this);
		if(index==ProDetailBox_li.length-1){
			return;
		}
		ProDetailBox_li.removeClass("current");
		$(this).addClass("current");
		var top=ProDetailBox.eq(index).offset().top;
		$(document).scrollTop(top-41);
	});


	//详情页放大镜切换
	$(".imgInfo").slide({mainCell:".imgInfo_img ul",effect:"left",titCell:".picture img",titOnClassName:"onbg",prevCell:"#goodsPicPrev",nextCell:"#goodsPicNext",trigger:"click"});
	
	//详情页添加购物车弹出层点击关闭
	$("#addtocartdialog .center_pop_close a").click(function(){
		$("#addtocartdialog").hide();	
	})
	
	
	//商品详情页评价弹出层关闭
	$("#commentform .close").click(function(){
		$("#commentform").hide();
		$("#boxOverlay").hide();
	})
	
	
	//商品详情页评价弹出层显示
	
	$("#showcommentform").click(function(){
		$("#commentform").show();
		$("#boxOverlay").show();
		if(isIE6)
		{	
			$("#boxOverlay").css({height:$(window).height(),width:$(window).width(),left:-$(".inDetail_box").offset().left});	
		}
	})
	
	//IE6下商品详情页评价弹出层以及半透明遮罩层兼容设置
	
	$(window).scroll(function(){
		if($(".inDetail_box").length > 0)
		{
			if(isIE6)
			{	
				var a = $(window).scrollTop();
				var b = $(".inDetail_box").offset();
				var c = b.top;
				var d = a-c;
				var e = d+150;
	
				$("#commentform").css({position:"absolute",top:e});	
				$("#boxOverlay").css({position:"absolute",top:d});	
			}
		}
	})
	 setInterval(function(){
      $(".s_time_icon2").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
		
				var str = myD+'天'+myH_show+'时'+myM+'分'+myS+'秒'
				//var str = '还剩<strong class="tcd-d">'+myD+'</strong>天<strong class="tcd-h">'+myH_show+'</strong>小时<strong class="tcd-m">'+myM+'</strong>分<strong class="tcd-s">'+myS+'</strong>秒';
			}
			else
			{
		
				var str = '<span>还剩：</span><span class="num">'+myH+'</span>小时<span class="num">'+myM+'</span>分<span class="num">'+myS+'</span>秒';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);	
	
	setInterval(function(){
      $(".pro_item_count").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
		
				var str = '剩余： '+myD+'天'+myH_show+'时'+myM+'分'+myS+'秒'
				//var str = '还剩<strong class="tcd-d">'+myD+'</strong>天<strong class="tcd-h">'+myH_show+'</strong>小时<strong class="tcd-m">'+myM+'</strong>分<strong class="tcd-s">'+myS+'</strong>秒';
			}
			else
			{
		
				var str = '<span>还剩：</span><span class="num">'+myH+'</span>小时<span class="num">'+myM+'</span>分<span class="num">'+myS+'</span>秒';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);
	
	
	setInterval(function(){
      $(".s_time_icon").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('value')) * 1000);
		var show_day =  obj.attr('showday');
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + 28800000;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
		var myH_show=Math.floor(nMS/(1000*60*60) % 24);
        var myH=Math.floor(nMS/(1000*60*60));
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
		var a = myH+myM+myS+myMS;
        if(a>0){
			if(show_day == 'show')
			{
		
				//var str = '剩余： '+myD+'天'+myH_show+'时'+myM+'分'+myS+'秒'
				var str = '<span>'+myD+'</span>天<span>'+myH_show+'</span>时<span>'+myM+'</span>分<span>'+myS+'</span>秒';
			}
			else
			{
		
				var str = '<span>还剩：</span><span class="num">'+myH+'</span>小时<span class="num">'+myM+'</span>分<span class="num">'+myS+'</span>秒';
			}
        }else{
			var str = "已结束！";	
		}
		obj.html(str);
      });
    }, 100);	
	
	
	var flaotBox=$(".specification_boxCon");
	var flaotW=flaotBox.width()/2;
	var flaotH=flaotBox.height()/2;
	flaotBox.css({"marginTop":-flaotH,"marginLeft":-flaotW});
	$("#detail_store .Sub").click(function(){
		
		$("#specification_box").show();
	})
	
	$("#close_spec_box").click(function(){
		$("#specification_box").hide();
	})
	
	//addToCartShowDiv({$goods.goods_id},1,'promotion')

})





/****************************函数部分***************************/

//首页页添加购物车弹出层点击关闭
function close_div(goods_id,goods_recommend)
{
	if(goods_recommend && goods_recommend!='')
	{
		$("#addtocartdialog_retui_"+goods_id+"_"+goods_recommend).hide();
	}
	else
	{
		$("#addtocartdialog_retui_"+goods_id).hide();
	}
}

//商品评论
function showrank(obj,num,rankid,commentrank){
	$(obj).parent().removeClass();
	$(obj).parent().addClass("cmtRank");
	$(obj).parent().addClass("fen"+num);
	$(rankid).html(num+".0分");
	if($(commentrank))
	{
		 $(commentrank).val(num);
	}
}
function hiddenrank(obj,rankid,commentrank){
	if($(commentrank).val())
	{
		showrank(obj,$(commentrank).val(),'#Rank','#commentrank');
	}
	else 
	{
		showrank(obj,1,'#Rank','#commentrank');
	}
}
function show_del(a)
{
	$(a).removeClass("shopWhite");
	$(a).addClass("shopGray");
}

function hide_del(a)
{
	$(a).removeClass("shopGray");
	$(a).addClass("shopWhite");
}