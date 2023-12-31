/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(window).on("resize", function () {
	if ($(this).width() > 1025) {
		if (window.device == 'mobile') {
			location.reload();
		}
		window.device = 'desktop';
	} else {
		if (window.device == 'desktop') {
			location.reload();
		}
		window.device = 'mobile';
	}
}).trigger("resize");

var _scrollLast = 0;
var _windowH = $(window).height();
$(window).on("scroll", function () {
	var _scrollTop = $(window).scrollTop();

	if (_scrollTop < _windowH * 0.1) {
		return false;
	}

	if (_scrollTop > _scrollLast) {
		$(".topmenu-fixed").addClass("is-hide");
	} else {
		$(".topmenu-fixed").removeClass("is-hide");
	}

	_scrollLast = _scrollTop;
});

if (navigator.appVersion.indexOf("Mac") != -1) {
	$("body").get(0).style.setProperty('--lock', "15px");
} else {
	$("body").get(0).style.setProperty('--lock', "17px");
}

$("#preload").delay(500).fadeOut(500);

var wow = new WOW({
	callback: function callback(el) {}
}).init();

new SplitText('.ryder-split .item', {
	type: "chars"
});

$(".ryder-split").each(function (i, el) {
	var _h = parseInt(el.dataset.h);
	var _hover = parseInt(el.dataset.hover);

	var $item1 = $(".item >div:nth-child(3n-2)", el);
	var $item2 = $(".item >div:nth-child(3n-1)", el);
	var $item3 = $(".item >div:nth-child(3n)", el);

	var $tl1 = gsap.timeline({
		paused: true,
		repeat: -1,
		delay: .02
	}).to($item1, {
		duration: 0.3,
		y: _h * 0.8,
		ease: 'power1.out'
	}).to($item1, {
		duration: 0.3,
		y: 0,
		ease: 'power3.in'
	});

	var $tl2 = gsap.timeline({
		paused: true,
		repeat: -1,
		delay: .05
	}).to($item2, {
		duration: 0.3,
		y: _h,
		ease: 'power1.out'
	}).to($item2, {
		duration: 0.3,
		y: 0,
		ease: 'power3.in'
	});

	var $tl3 = gsap.timeline({
		paused: true,
		repeat: -1
	}).to($item3, {
		duration: 0.3,
		y: _h * 0.6,
		ease: 'power1.out'
	}).to($item3, {
		duration: 0.3,
		y: 0,
		ease: 'power3.in'
	});

	if (_hover == '1') {
		$(el).parent().hover(function () {
			$tl1.play();
			$tl2.play();
			$tl3.play();
		}, function () {
			$tl1.pause(0);
			$tl2.pause(0);
			$tl3.pause(0);
		});
	} else {
		$tl1.play();
		$tl2.play();
		$tl3.play();
	}
});

$(".fancy-close, .fancy-closeBlock, .dialog-fancyContainer .btn, .m-fancyWrap .close, #gokeep").on("click", function () {
	$(".m-fancyWrap").removeClass("is-show");
	gsap.delayedCall(0.5, function () {
		$("body").removeClass("is-lock");
	});
});

$(".addtocart").on("click", function () {
	$(".cart-fancyWrap").addClass("is-show").scrollTop(0);
	$("body").addClass("is-lock");
});

$(".hamburger-area").on("click", function () {
	$(this).toggleClass("is-open");
	$(".mobile-menu-fixed").toggleClass("is-open");
	$(".mobile-topmenuWrap").fadeToggle(500);
});

//屏蔽右键
document.oncontextmenu = function (event) {
	if (window.event) {
		event = window.event;
	}
	try {
		var the = event.srcElement;
		if (!(the.tagName == "INPUT" && the.type.toLowerCase() == "text" || the.tagName == "TEXTAREA")) {
			return false;
		}
		return true;
	} catch (e) {
		return false;
	}
};
//禁止圖片拖曳
$("img").attr("draggable", false);

// topmenu.php
Vue.component('menu-item', {
	data: function data() {
		return {};
	},

	props: ['post', 'c'],
	template: '\n\t<section :data-key="c">\n\t\t<div class="temperature">\n\t\t\t<div class="tb"></div>\n\t\t\t<div class="lr"></div>\n\t\t\t{{post.cat}}\n\t\t</div>\n  \t\t<div class="item" v-for="(item, i) in post.items">\n\t  \t\t<div class="pic-area grid-x align-middle">\n\t  \t\t\t<div class="close cell shrink" @click="del(c, i)"><img src="images/xxx.svg"></div>\n\t  \t\t\t<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>\n\t  \t\t\t<div class="title cell auto">{{item.title}}</div>\n\t  \t\t</div>\n\t  \t\t<div class="specification">{{item.specification}}</div>\n\t  \t\t<div class="amount-area grid-x align-center-middle">\n\t  \t\t\t<div class="desc cell shrink" @click="desc(i)"><img src="images/desc.svg"></div>\n\t  \t\t\t<input type="text cell shrink" name="" id="" v-model="item.count">\n\t  \t\t\t<div class="asc cell shrink" @click="inc(i)"><img src="images/asc.svg"></div>\n\t  \t\t</div>\n\n\t  \t\t<div class="subtotal">NT.{{item.price * item.count}}</div>\n\t  \t</div>\n  \t</section>\n\t',
	methods: {
		inc: function inc(i) {
			this.post.items[i].count++;
		},
		desc: function desc(i) {
			if (this.post.items[i].count > 1) {
				this.post.items[i].count--;
			}
		},
		del: function del(cat, i) {
			var _this = this;

			Swal.fire({
				template: '#my-template'
			}).then(function (result) {
				if (result.isConfirmed) {
					vm_menu.posts[cat].items = vm_menu.posts[cat].items.filter(function (_ref) {
						var id = _ref.id;
						return id != _this.post.items[i].id;
					});
					// if(vm_menu.posts[cat].items.length == 0){
					// }
				}
			});
		}
	}
});

// confirm.php
Vue.component('item', {
	data: function data() {
		return {};
	},

	props: ['post', 'c'],
	template: '\n\t<section :data-key="c">\n\t\t<div class="temperature">\n\t\t\t<div class="tb"></div>\n\t\t\t<div class="lr"></div>\n\t\t\t{{post.cat}}\n\t\t</div>\n  \t\t<div class="item" v-for="(item, i) in post.items">\n\t  \t\t<div class="pic-area grid-x align-middle">\n\t  \t\t\t<div class="close cell shrink" @click="del(c, i)"><img src="images/xxx.svg"></div>\n\t  \t\t\t<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>\n\t  \t\t\t<div class="title cell auto">{{item.title}}</div>\n\t  \t\t</div>\n\t  \t\t<div class="specification">{{item.specification}}</div>\n\t  \t\t<div class="amount-area grid-x align-center-middle">\n\t  \t\t\t<div class="desc cell shrink" @click="desc(i)"><img src="images/desc.svg"></div>\n\t  \t\t\t<input type="text cell shrink" name="" id="" v-model="item.count">\n\t  \t\t\t<div class="asc cell shrink" @click="inc(i)"><img src="images/asc.svg"></div>\n\t  \t\t</div>\n\n\t  \t\t<div class="subtotal">NT.{{item.price * item.count}}</div>\n\t  \t</div>\n  \t</section>\n\t',
	methods: {
		inc: function inc(i) {
			this.post.items[i].count++;
		},
		desc: function desc(i) {
			if (this.post.items[i].count > 1) {
				this.post.items[i].count--;
			}
		},
		del: function del(cat, i) {
			var _this2 = this;

			Swal.fire({
				template: '#my-template'
			}).then(function (result) {
				if (result.isConfirmed) {
					vm.posts[cat].items = vm.posts[cat].items.filter(function (_ref2) {
						var id = _ref2.id;
						return id != _this2.post.items[i].id;
					});
				}
			});
		}
	}
});

var posts = [{
	cat: '常溫',
	items: [{
		id: 1,
		count: 1,
		price: 240,
		title: '蛋黃酥禮盒',
		specification: '10入'
	}]
}, {
	cat: '冷藏',
	items: [{
		id: 2,
		count: 2,
		price: 150,
		title: '蛋黃酥禮盒',
		specification: '10入'
	}, {
		id: 3,
		count: 1,
		price: 150,
		title: '蛋黃酥禮盒',
		specification: '10入'
	}]
}];

var vm = new Vue({
	el: '#app',
	data: {
		posts: posts
	},
	computed: {
		total: function total() {
			var total = 0;
			this.posts.map(function (item, index) {
				item.items.map(function (item, index) {
					total += item.count * item.price;
				});
			});
			return total;
		}
	},
	methods: {},
	mounted: function mounted() {}
});

var vm_menu = new Vue({
	el: '#menuapp',
	data: {
		posts: posts
	},
	computed: {
		total: function total() {
			var total = 0;
			this.posts.map(function (item, index) {
				item.items.map(function (item, index) {
					total += item.count * item.price;
				});
			});
			return total;
		}
	},
	methods: {},
	mounted: function mounted() {}
});

$("[data-r]").each(function (i, el) {

	if (device == 'mobile' && $(el).data("mobile-r") != undefined) {
		var _p = $(el).data("mobile-r");
	} else {
		var _p = $(el).data("r");
	}

	var _st_default = {
		trigger: el,
		start: "top 80%",
		end: "bottom 0%",
		toggleActions: "play none play none"
		// toggleActions: "play reverse play reverse",
		// markers: true,
	};

	var _st = Object.assign(_st_default, _p.scrollTrigger);

	var _t = $(el).offset().top;
	var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, '') / 100;

	if (_t <= _hook) {
		_p.delay = _p.delay != undefined ? _p.delay += 1 : .2;
	}

	delete _p.scrollTrigger;

	var _setting = {
		scrollTrigger: _st,
		duration: 1.4,
		opacity: 0,
		ease: "power2.out"
	};

	if (_p != '' && "stagger" in _p) {
		var $el = $(el).children();
	} else {
		var $el = el;
	}

	var _obj = Object.assign(_setting, _p);

	gsap.from($el, _obj);
});

/***/ })
/******/ ]);