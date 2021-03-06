$(function () {
	// pc-banner
	var mySwiper = new Swiper('.pc-banner .swiper-container', {
		loop: true,
		autoplay: true,
		speed: 1200,
		pagination: {
			el: '.pc-banner .swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.pc-banner .swiper-button-next',
			prevEl: '.pc-banner .swiper-button-prev',
		},
	})
	// wap-banner
	var mySwiper = new Swiper('.wap-banner .swiper-container', {
		loop: true,
		autoplay: true,
		speed: 1200,
		pagination: {
			el: '.wap-banner .swiper-pagination',
			clickable: true,
		},

	})
	// index-about
	var mySwiper = new Swiper('.index-about .swiper-container', {
		loop: true,
		autoplay: true,
		speed: 1200,
		pagination: {
			el: '.index-about .swiper-pagination',
			clickable: true,
		},

	})
	// certificate
	var swiper = new Swiper('.certificate-pc .swiper-container', {
		loop: true,
		autoplay: true,
		speed: 1200,
		slidesPerView: 4,
		spaceBetween: 30,
		navigation: {
			nextEl: '.certificate-pc .swiper-button-next',
			prevEl: '.certificate-pc .swiper-button-prev',
		},
	});
	var swiper = new Swiper('.certificate-wap .swiper-container', {
		loop: true,
		autoplay: true,
		speed: 1200,
		slidesPerView: 2,
		spaceBetween: 20,
		pagination: {
			el: '.certificate-wap .swiper-pagination',
			clickable: true,
		},
	});


	// about
	var mySwiper = new Swiper('.about-swiper .swiper-container', {
		loop: true,
		autoplay: true,
		speed: 1200,
		pagination: {
			el: '.about-swiper .swiper-pagination',
			clickable: true,
		},

	})
	// 
	$(".product-show .proshow>a").hover(function () {
		$(this).addClass("pro-active").siblings().removeClass("pro-active")
	})
	// wap
	$(".nav li").click(function () {
		$(this).parent().parent().removeClass("in");
	})



	// 悬浮表单
	$(".show-btn").click(function () {
		$(this).css('display', 'none');
		$('.show-form').css({
			'display': 'block',
			'opacity': '1'
		});
	});
	$('.X').click(function () {
		$(".show-btn").css('display', 'block');
		$('.show_form').css('display', 'block');
		$('.show-form').css({
			'display': 'none',
			'opacity': '0'
		});
	});

	$(".show_form").click(function () {
		console.log(this)
		$(this).css("display", "none");
		$(".show-btn").css("display", "none");
		$('.show-form').css({
			'display': 'block',
			'opacity': '1'
		});
	})

	// 滚动监听
	$('body').scrollspy({
		target: '#navbar-example'
	})
	// top
	$(window).scroll(function () {
		if ($(window).scrollTop() > 10) {
			$("header").addClass("navbar-fixed-top");
			$("header .top-bar").slideUp(800)
		} else {
			$("header").removeClass("navbar-fixed-top");
			$("header .top-bar").slideDown(500)
		}
	});
	$(".goTop").click(function () {
		$("html,body").animate({
			scrollTop: 0
		}, 1000);
	});



	// 二级导航
	$(".first-nav>li>a").click(function () {

		var flag = $(this).next().is(':hidden');
		var flag11 = $(this).hasClass('actives');
		console.log(flag);
		flag ? $(this).next().slideDown(500) : $(this).next().slideUp(500);
		flag11 ? $(this).removeClass("actives") : $(this).addClass("actives")
	})
	// 三级导航
	$(".second-nav>li>a").click(function () {
		var flag1 = $(this).next().is(':hidden');
		var flag22 = $(this).hasClass('activess');
		flag1 ? $(this).next().slideDown(500) : $(this).next().slideUp(500);
		flag22 ? $(this).removeClass("activess") : $(this).addClass("activess")
	})


	$(".first-nav li a").click(function () {
		var iclassname = $(this).children("i")
		var a = iclassname.hasClass("fa-angle-down");
		a ? iclassname.removeClass("fa-angle-down") : iclassname.addClass("fa-angle-down")
	})

	// wechat
	$(".wechat").hover(function () {
		$(".wechat-box").show(500)
	}, function () {
		$(".wechat-box").hide()
	});
	// 二级导航
	$(".navbars>li").hover(function () {
		$(this).find(".second-nav").slideDown(500)
	}, function () {
		$(".second-nav").hide()
	});
	// 三级导航
	$(".second-nav>li").hover(function () {
		$(this).find(".three-nav").slideDown(500)
	}, function () {
		$(".three-nav").hide()
	});


	$('#tf').click(function (e) {
		$(this).hide();
		$('#con').fadeIn(500);
		stopBubble(e);
		$(document).click(function () {
			$('#con').hide();
			$('#tf').show();
		});
	});
	$('#con').click(function (e) {
		//只阻止了向上冒泡，而没有阻止向下捕获，所以点击con的内部对象时，仍然可以执行这个函数
		stopBubble(e);
	});

	//阻止冒泡函数
	function stopBubble(e) {
		if (e && e.stopPropagation) {
			e.stopPropagation();    //w3c
		} else {
			window.event.cancelBubble = true; //IE
		}
	}
	// language
	$(".language").hover(function () {
		$(".multilingual").slideDown(500)
	}, function () {
		$(".multilingual").hide()
	});

	// 右侧导航
	if ($(".index-contact").length > 0) {
		$(".index-contact-in:not(.index-contact-search)").on("mouseenter", function () {
			$(this).addClass("cur").siblings(".index-contact-in").removeClass("cur");
			$(".index-contact-search").removeClass("cur");
			$(".index-contact-search").find(".index-contact-form").removeClass("cur");
		}).on("mouseleave", function () {
			$(this).removeClass("cur");
		});
		$(".index-contact-search").on("mouseenter", function () {
			$(this).addClass("cur").siblings(".index-contact-in").removeClass("cur");
			setTimeout(function () {
				if ($(".index-contact-search").hasClass("cur")) { }
			}, 1000);
		}).on("mouseleave", function () {
			if ($(this).find(".index-contact-form").hasClass("cur")) {
				return;
			} else {
				$(this).removeClass("cur");
			}

		});
		$(".index-contact-search a").on("click", function () {
			if ($(this).siblings(".index-contact-form").hasClass("cur")) {
				$(this).siblings(".index-contact-form").removeClass("cur");
				$(this).parent(".index-contact-search").removeClass("cur");
			} else {
				$(this).parent(".index-contact-search").addClass("cur");
				$(this).siblings(".index-contact-form").addClass("cur");
				$(this).siblings(".index-contact-form").find(".float-index-contact").show();
			}
		});
		$(".index-contact-wx").on("mouseenter", function () {
			$(this).addClass("cur").siblings(".index-contact-in").removeClass("cur");
			setTimeout(function () {
				if ($(".index-contact-wx").hasClass("cur")) {
					$(".index-contact-qr-show").fadeIn("fast");
				}
			}, 600);
		}).on("mouseleave", function () {
			$(this).removeClass("cur");
			$(".index-contact-qr-show").fadeOut("fast");
		});
		$(".cf-close").on("click", function () {
			$(this).parents(".index-contact-search").removeClass("cur");
			$(this).parents(".index-contact-form").removeClass("cur");
		});

		$(".index-contact-top").on("click", function () {
			$("html,body").stop().animate({
				scrollTop: 0
			}, 500);
		});
	}

	// wap菜单切换
	$('.arrow').click(function () {
		$(this).toggleClass('active3');
		$(this).siblings('.mt_ul').slideToggle(300);
	})
	$(".h_right").click(function () {
		$(".bg").animate({
			"right": "0"
		}, 200);
	})
	$('.bg_l').click(function () {
		$(".bg").animate({
			"right": "-100%"
		}, 200);
	})

	var windowWidth = $(window).width();
	if (windowWidth >= 1366) {
		// product-recommend
		var mySwiper = new Swiper('.product-recommend .swiper-container', {
			autoplay: true,
			speed: 1500,
			autoHeight: true,
			slidesPerView: 2,
			spaceBetween: 30,
			loop: true,
			pagination: {
				el: '.product-recommend .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.product-recommend .swiper-button-next',
				prevEl: '.product-recommend .swiper-button-prev',
			},
		});
	}
	if (windowWidth <= 768) {
		// product-recommend
		var mySwiper = new Swiper('.product-recommend .swiper-container', {
			autoplay: true,
			speed: 1500,
			autoHeight: true,
			spaceBetween: 30,
			loop: true,
			pagination: {
				el: '.product-recommend .swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.product-recommend .swiper-button-next',
				prevEl: '.product-recommend .swiper-button-prev',
			},
		});
	}
})
var submitcount2 = 0;

function beforeSubmit2(form) {

	if (form.name.value == '') {
		alert('Name can not be empty');
		form.name.focus();
		return false;
	} else if (form.email.value == '') {
		alert('Please enter the correct email format');
		form.email.focus();
		return false;
	} else if (form.email.value.indexOf('@') < 0) {
		alert('The email is wrong');
		form.email.focus();
		return false;
	} else if (form.company.value == '') {
		alert('The company can not be empty');
		form.company.focus();
		return false;
	} else if (form.message.value == '') {
		alert('The message can not be empty');
		form.message.focus();
		return false;
	} else {

		if (submitcount2 == 0) {
			submitcount2++;
			return true;
		} else {
			alert("Message is being sent, please wait!");
			return false;

		}
	}

}

// 产品放大镜 
jQuery.ljsGlasses = {
	pcGlasses: function (_obj) {
		var _box = $("#" + _obj.boxid);
		var _sum = $("#" + _obj.sumid);
		var _last, _next;
		var _imgarr = _box.find("img");
		var _length = _imgarr.length;
		var _index = 0;
		var _arr = new Array();
		_sum.append("<p style='position:absolute;left:0;top:0;'></p>");
		var _sumbox = _sum.find("p");

		for (var i = 0; i < _length; i++) {
			_arr[i] = new Array();
			_arr[i][0] = _imgarr.eq(i).attr("src");
			_arr[i][1] = _imgarr.eq(i).attr("width");
			_arr[i][2] = _imgarr.eq(i).attr("height");
			var _scale = _arr[i][1] / _arr[i][2];
			if (_scale == 1) {
				_arr[i][3] = _obj.boxw;//width
				_arr[i][4] = _obj.boxh;//height
				_arr[i][5] = 0;//top
				_arr[i][6] = 0;//left
				_arr[i][7] = _obj.boxw / 2;
				_arr[i][8] = _obj.boxw * 2;//width
				_arr[i][9] = _obj.boxh * 2;//height
				_sumbox.append("<span><img src='" + _imgarr.eq(i).attr("src") + "' width='" + _obj.sumw + "' height='" + _obj.sumh + "' /></span>");
			}
			if (_scale > 1) {
				_arr[i][3] = _obj.boxw;//width
				_arr[i][4] = _obj.boxw / _scale;
				_arr[i][5] = (_obj.boxh - _arr[i][4]) / 2;
				_arr[i][6] = 0;//left
				_arr[i][7] = _arr[i][4] / 2;
				_arr[i][8] = _obj.boxh * 2 * _scale;//width
				_arr[i][9] = _obj.boxh * 2;//height
				var _place = _obj.sumh - (_obj.sumw / _scale);
				_place = _place / 2;
				_sumbox.append("<span><img src='" + _imgarr.eq(i).attr("src") + "' width='" + _obj.sumw + "' style='top:" + _place + "px;' /></span>");
			}
			if (_scale < 1) {
				_arr[i][3] = _obj.boxh * _scale;//width
				_arr[i][4] = _obj.boxh;//height
				_arr[i][5] = 0;//top
				_arr[i][6] = (_obj.boxw - _arr[i][3]) / 2;
				_arr[i][7] = _arr[i][3] / 2;
				_arr[i][8] = _obj.boxw * 2;//width
				_arr[i][9] = _obj.boxw * 2 / _scale;
				var _place = _obj.sumw - (_obj.sumh * _scale);
				_place = _place / 2;
				_sumbox.append("<span><img src='" + _imgarr.eq(i).attr("src") + "' height='" + _obj.sumh + "' style='left:" + _place + "px;' /></span>");
			}
		}
		_imgarr.remove();

		_sum.append("<div style='clear:both;width:100%;'></div>");
		var _sumarr = _sum.find("span");
		var _sumimg = _sum.find("img");
		_sumarr.eq(_index).addClass(_obj.sumsel);
		var _border = _obj.sumborder * 2 + _obj.sumh;
		var _sumwidth = (_border + _obj.sumi) * _obj.sums;
		var _sumboxwidth = (_border + _obj.sumi) * _length;
		_sum.css({
			"overflow": "hidden",
			"height": _border + "px",
			"width": _sumwidth + "px",
			"position": "relative"
		});
		_sumbox.css({
			"width": _sumboxwidth + "px"
		});
		_sumarr.css({
			"float": "left",
			"margin-left": _obj.sumi + "px",
			"width": _obj.sumw + "px",
			"height": _obj.sumh + "px",
			"overflow": "hidden",
			"position": "relative"
		});
		_sumimg.css({
			"max-width": "100%",
			"max-height": "100%",
			"position": "relative"
		});

		_box.append("<div style='position:relative;'><b style='display:block;'><img style='display:block;' src='' /></b><span style='position:absolute;left:0;top:0;display:none;z-index:5;'></span></div><p style='position:absolute;overflow:hidden;top:0;display:none;'><img style='max-width:none;max-height:none;position:relative;left:0;top:0;' src='' /></p>");
		var _glass = _box.find("span");
		var _boximg = _box.find("b img");
		var _imgout = _box.find("div");
		var _showbox = _box.find("p");
		var _showimg = _box.find("p img");

		_box.css({
			"width": _obj.boxw + "px",
			"height": _obj.boxh + "px",
			"position": "relative"
		});
		var _showboxleft = _obj.boxw + 10;
		_showbox.css({
			"width": _obj.boxw + "px",
			"height": _obj.boxh + "px",
			"left": _showboxleft + "px"
		});

		var imgPlaces = function () {
			_showimg.attr("src", _arr[_index][0]);
			_boximg.attr("src", _arr[_index][0]);
			_boximg.css({
				"width": _arr[_index][3] + "px",
				"height": _arr[_index][4] + "px"
			});
			_imgout.css({
				"width": _arr[_index][3] + "px",
				"height": _arr[_index][4] + "px",
				"top": _arr[_index][5] + "px",
				"left": _arr[_index][6] + "px",
				"position": "relative"
			});
			_glass.css({
				"width": _arr[_index][7] + "px",
				"height": _arr[_index][7] + "px"
			});
			_showimg.css({
				"width": _arr[_index][8] + "px",
				"height": _arr[_index][9] + "px"
			});

		};
		imgPlaces();

		_imgout.mousemove(function (e) {
			var _gl_w = _glass.width() / 2;
			var _maxX = _imgout.width() - _gl_w;
			var _maxY = _imgout.height() - _gl_w;
			var _moveX = 0, _moveY = 0;
			var _nowX = e.pageX - _imgout.offset().left;
			var _nowY = e.pageY - _imgout.offset().top;
			var _moveX = _nowX - _gl_w, _moveY = _nowY - _gl_w;

			if (_nowX <= _gl_w) { _moveX = 0; }
			if (_nowX >= _maxX) { _moveX = _maxX - _gl_w; }
			if (_nowY <= _gl_w) { _moveY = 0; }
			if (_nowY >= _maxY) { _moveY = _maxY - _gl_w; }
			_glass.css({ "left": _moveX + "px", "top": _moveY + "px" });

			var _imgX = -_moveX * _showbox.width() / _glass.width();
			var _imgY = -_moveY * _showbox.width() / _glass.width();
			_showimg.css({ "left": _imgX + "px", "top": _imgY + "px" });

		});//mouse END

		_imgout.mouseenter(function () {
			_glass.css("display", "block");
			_showbox.css("display", "block");
		});
		_imgout.mouseleave(function () {
			_glass.css("display", "none");
			_showbox.css("display", "none");
		});

		//列表部分
		var _nextbtn = $("#" + _obj.nextid);
		var _lastbtn = $("#" + _obj.lastid);
		var _moveindex = 0;//索引移动

		var _sumListMove = function () {
			var _leftmove = -_moveindex * (_border + _obj.sumi);
			if (_sumbox.is(":animated")) { _sumbox.stop(true, true); }
			_sumbox.animate({ left: _leftmove + "px" }, 300);
			_sumarr.eq(_index).addClass(_obj.sumsel).siblings().removeClass(_obj.sumsel);
			imgPlaces();
		};//fun END

		if (_length <= _obj.sums) {
			var _place = (_obj.sums - _length) * _border / 2;
			_sumbox.css("left", _place + "px");
			_nextbtn.click(function () {
				_index++;
				if (_index >= _length) { _index = _length - 1; }
				_sumarr.eq(_index).addClass(_obj.sumsel).siblings().removeClass(_obj.sumsel);
				imgPlaces();
			});
			_lastbtn.click(function () {
				_index--;
				if (_index <= 0) { _index = 0; }
				_sumarr.eq(_index).addClass(_obj.sumsel).siblings().removeClass(_obj.sumsel);
				imgPlaces();
			});
		} else {
			var _maxNum = _length - _obj.sums;
			_nextbtn.click(function () {
				_moveindex++;
				if (_moveindex >= _maxNum) { _moveindex = _maxNum; }
				if (_index <= _moveindex) { _index = _moveindex; }
				_sumListMove();
			});
			_lastbtn.click(function () {
				_moveindex--;
				if (_moveindex <= 0) { _moveindex = 0; }
				if (_index >= _moveindex + _obj.sums) { _index = _moveindex + _obj.sums - 1; }
				_sumListMove();
			});
		}//if END

		_sumarr.hover(function () {
			_index = $(this).index();
			_sumarr.eq(_index).addClass(_obj.sumsel).siblings().removeClass(_obj.sumsel);
			imgPlaces();
		});

	}//pcGlasses END
}//ljsGlasses END