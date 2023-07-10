<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$login = true;
}else{
	$login = false;
}
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php $now = 'index'; ?>
	<?php include 'topmenu.php'; ?>

	<div class="index-bannerWrap">
		<div class="videoWrap">
			<div class="video-container">
				<video id="video" autoplay="" muted="" playsinline="" loop="" src="https://player.vimeo.com/progressive_redirect/playback/835669334/rendition/1080p/file.mp4?loc=external&signature=1d5cc5e650bed25d19c8f415fbe64da2248c0f80752fb3d374f9842f5cc8ff87"></video>
			</div>
		</div>

		<div class="article-area text-center">
			<div class="ch wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">以禮相遇 以餅相聚</div>
			<div class="en wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"><img src="images/index-banner-en.svg"></div>
		</div>
	</div>

	<main>
		<div class="index-mainWrap">
			<div class="head"><img src="images/main-head.svg" class="show-for-large"><img src="images/main-head-mobile.svg" class="hide-for-large"></div>

			<div class="index-main-item grid-x">
				<div class="item cell large-auto flex-container align-center-middle" style="background-color: #8A202A">
					<div class="head-area">
						<div class="title-area">
							<div class="en"><img src="images/main-en-1.svg"></div>
							<div class="ch">蛋黃酥</div>
						</div>
						<div class="note">
							<i>招</i>
							<i>牌</i>
						</div>
					</div>
					<div class="pic-area">
						<div class="pic">
							<!-- <img src="images/main-pic-1.png"> -->
							<video autoplay="" muted="" playsinline="" loop="" src="https://player.vimeo.com/progressive_redirect/playback/835668323/rendition/540p/file.mp4?loc=external&signature=4095213e694abc3772d7cc40a59d2d731a463bc31811f8e2e74f3ec9c3210b41"></video>
						</div>
						<div class="deco"><img src="images/main-deco-1.png"></div>
					</div>
					<div class="content">
						<div class="top">
							<div class="box"></div>
						</div>
						<div class="bottom">
							<div class="box"></div>
						</div>
						<i>招牌蛋黃酥</i><br>
						-嚴選紅土醃製22天鹹鴨蛋<br>
						-綿密細緻的烏豆豆沙餡<br>
						-金黃紋路的酥軟外皮
					</div>
					<div class="more"><a href="product_detail.php"><img src="images/main-more-1.svg" class="show-for-large"><img src="images/main-more-1-mobile.svg" class="hide-for-large"></a></div>
				</div>
				<div class="item cell large-auto flex-container align-center-middle" style="background-color: #FFE9C7">
					<div class="head-area">
						<div class="title-area">
							<div class="en"><img src="images/main-en-2.svg"></div>
							<div class="ch">太陽餅</div>
						</div>
						<div class="note">
							<i>台</i>
							<i>中</i>
						</div>
					</div>
					<div class="pic-area">
						<div class="pic">
							<!-- <img src="images/main-pic-2.png"> -->
							<video autoplay="" muted="" playsinline="" loop="" src="https://player.vimeo.com/progressive_redirect/playback/835668308/rendition/540p/file.mp4?loc=external&signature=fc0ea6620f17b62e7851caea44315004a42a794568832493b1f2c87b88dd961f"></video>
						</div>
						<div class="deco"><img src="images/main-deco-2.png"></div>
					</div>
					<div class="content">
						<div class="top">
							<div class="box"></div>
						</div>
						<div class="bottom">
							<div class="box"></div>
						</div>
						<i>係金A太陽餅</i><br>
						-全台獨家(首創)的金黃色太陽餅<br>
						-鹹香餅皮搭配香甜麥芽<br>
						-台中在地具代表性的伴手禮
					</div>
					<div class="more"><a href="product_detail.php"><img src="images/main-more-2.svg" class="show-for-large"><img src="images/main-more-2-mobile.svg" class="hide-for-large"></a></div>
				</div>
			</div>
		</div>

		<div class="inedx-newsWrap">
			<div class="index-news">
				<ul class="index-news-slider">
					<li>
						<div class="grid-x align-center-middle">
							<div class="pic-area cell large-shrink">
								<div class="head text-center hide-for-large">
									<div class="en"><img src="images/ffen.svg"></div>
									<div class="item-area">
										<div class="top"></div>
										<div class="bottom"></div>
										<div class="text">特色商品</div>
									</div>
								</div>
								<div class="pic"><img src="images/index-news-pic.jpg"></div>
								<div class="deco show-for-large"><img src="images/index-news-deco.svg"></div>
							</div>
							<div class="article-area cell large-auto">
								<div class="head text-center show-for-large">
									<div class="en"><img src="images/ffen.svg"></div>
									<div class="item-area">
										<div class="top"></div>
										<div class="bottom"></div>
										<div class="text">特色商品</div>
									</div>
								</div>
								<div class="title-area">
									<div class="title">金+銀の太陽餅| 雙重享受</div>
									<div class="dot"></div>
								</div>
								<div class="content">香格的太陽餅好呷「係金A」，全台獨家(首創)的金黃色太陽餅，刷上新鮮蛋汁烘培入味，呈現如同太陽般的自然金色餅皮，搭配香甜麥芽，整體口感好吃順口且不易掉屑，更是台中在地具代表性的伴手禮。</div>
								<div class="more"><a href="product_detail.php"><img src="images/index-news-more.svg" class="show-for-large"><img src="images/main-more-2-mobile.svg" class="hide-for-large"></a></div>
							</div>
						</div>
					</li>
				</ul>

				<!-- <div class="index-dots-item">
					<ul class="index-news-page-dots flex-container align-center-middle"></ul>
				</div> -->
			</div>
		</div>

		<div class="index-giftWrap">
			<div class="head text-center"><img src="images/gift-head.svg"></div>

			<div class="gift-cover show-for-large"><img src="images/gift-bg-up.png"></div>

			<div class="giftListWrap">
				<div class="bg show-for-large" style="background: url('images/gift-bg.png') 0 0/100% no-repeat;"></div>

				<div class="ribbon hide-for-large"><img src="images/ribbon.png"></div>
				<div class="ribbon-text hide-for-large"><img src="images/ribbon-text.svg"></div>

				<ul class="giftList">
					<li><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-1.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">蛋黃酥</div>
						</div>
					</a></li>
					<li><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-2.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">芋Q餅</div>
						</div>
					</a></li>
					<li><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-3.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">小月餅</div>
						</div>
					</a></li>
					<li><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-4.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">鳳凰酥</div>
						</div>
					</a></li>
					<li><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-5.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">太陽餅&老婆餅</div>
						</div>
					</a></li>
					<li><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-6.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">鬆果堡</div>
						</div>
					</a></li>
					<li class="show-for-large"><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-7.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">蔓越莓酥&鳳梨酥</div>
						</div>
					</a></li>
					<li class="show-for-large"><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-8.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">綠豆凸綜合禮盒</div>
						</div>
					</a></li>
					<li class="show-for-large"><a href="javascript:;">
						<div class="pic-area">
							<div class="pic"><img src="images/gift-9.jpg" class="img-cover"><div class="block"></div></div>
							<div class="title">綜合禮盒</div>
						</div>
					</a></li>
				</ul>
			</div>

			<div class="hand text-center wow fadeInUp" data-wow-duration="2s" data-wow-offset="400"><img src="images/gift-hand.png" class="show-for-large"><img src="images/gift-hand-mobile.png" class="hide-for-large"></div>
		</div>

		<div class="index-popularWrap">
			<div class="head text-center"><img src="images/popular-head.svg"></div>

			<div class="pd-more-sliderWrap">
				<!-- Slider main container -->
				<div class="swiper-container">
				  <!-- Additional required wrapper -->
				  <div class="swiper-wrapper">
				    <!-- Slides -->
				    <div class="swiper-slide"><a href="product_detail.php">
				    	<div class="pic-area">
				    		<div class="pic"><img src="images/pd-1.jpg" class="img-cover"></div>
				    	</div>

				    	<div class="title-area text-center">
				    		<div class="title">蛋黃酥禮盒</div>
				    	</div>
				    </a></div>
				    <div class="swiper-slide"><a href="product_detail.php">
				    	<div class="pic-area">
				    		<div class="pic"><img src="images/pd-1.jpg" class="img-cover"></div>
				    	</div>

				    	<div class="title-area text-center">
				    		<div class="title">蛋黃酥禮盒</div>
				    	</div>
				    </a></div>
				    <div class="swiper-slide"><a href="product_detail.php">
				    	<div class="pic-area">
				    		<div class="pic"><img src="images/pd-1.jpg" class="img-cover"></div>
				    	</div>

				    	<div class="title-area text-center">
				    		<div class="title">蛋黃酥禮盒</div>
				    	</div>
				    </a></div>
				    <div class="swiper-slide"><a href="product_detail.php">
				    	<div class="pic-area">
				    		<div class="pic"><img src="images/pd-1.jpg" class="img-cover"></div>
				    	</div>

				    	<div class="title-area text-center">
				    		<div class="title">蛋黃酥禮盒</div>
				    	</div>
				    </a></div>
				  </div>
				</div>

				<div class="more-prev show-for-large"><img src="images/more-prev.svg"></div>
				<div class="more-next show-for-large"><img src="images/more-next.svg"></div>
			</div>
		</div>
	</main>

	<div class="m-fancyWrap index-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<div class="pop-fancyContainer">
			<div class="fancy-close"><img src="images/fancy-close-white.svg"></div>
			<div class="innerWrap grid-x align-middle"><img src="images/fancy-pic.jpg"></div>
		</div>
	</div>

	<!-- <div class="m-fancyWrap index-fancyWrap <?php if (!$login): ?>is-show<?php endif ?>">
		<div class="fancy-closeBlock"></div>
		<div class="index-fancyContainer">
			<div class="innerWrap grid-x align-middle">
				
			</div>
		</div>
	</div> -->

	<!-- <div class="m-fancyWrap loginsuccess-fancyWrap <?php if ($login): ?>is-show<?php endif ?>">
		<div class="fancy-closeBlock"></div>
		<div class="loginsuccess-fancyContainer">
			<div class="pic">
				<img src="images/ls-pic.png" class="show-for-large">
				<img src="images/ls-pic-mobile.png" class="hide-for-large">
			</div>
			<div class="btn"><img src="images/ls-btn.svg"></div>
		</div>
	</div> -->

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
$(".index-fancyWrap").addClass("is-show")

$(".topmenu-fixed").addClass("is-hide")
ScrollTrigger.create({
	toggleActions: "play pause resume reverse", //重覆觸發
	trigger: ".index-bannerWrap",
	endTrigger: ".index-mainWrap",
	start: "top-=1px top",
	end: "bottom 85%",
	toggleClass: {targets: $(".buy-fixed"), className: "is-close"},
	scrub: 1.5,
	// markers: true,
});


var $more = new Swiper('.pd-more-sliderWrap .swiper-container', {
	autoplay: true,
	loop: true,
	speed: 500,
	keyboard: true,
	navigation: {
		prevEl: '.more-prev',
		nextEl: '.more-next',
	},
	breakpoints: {
		375: {
			centeredSlides: true,
			slidesPerView: 2,
			spaceBetween: 30,
		},
		1024: {
			centeredSlides: true,
			slidesPerView: 3,
			spaceBetween: 110,
		},
		1600: {
			slidesPerView: 4,
			spaceBetween: 60,
		}
	},
});



gsap.to($(".gift-cover"),{
	scrollTrigger: {
		trigger: '.index-giftWrap',
		start: 'top center',
		end: '-10% 25%',
		endTrigger: '.giftListWrap',
		scrub: 1.5,
		// markers: true,
	},
	ease: "none",
	top: -110
});

var datesForDisable = ["2023-06-22", "2023-06-23", "2023-06-24"];
if(device == 'mobile'){
	$('#calendar-mobile').datepicker({
		minDate: "+3d",
		maxDate: "+2m",
		dateFormat: "yy-mm-dd",
		dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
		monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],	
		beforeShowDay: function(date){
			//format date in datepicker to yy-mm-dd
			var new_date = $.datepicker.formatDate('yy-mm-dd', date);
			//disable dates
			return [ datesForDisable.indexOf(new_date) == -1 ]
		}
	})

	$(".top-calendar .icon").on("click", function() {
		if($(this).hasClass("is-show")){
			$(this).stop(true).removeClass("is-show")
			$("#calendar-mobile").stop(true).removeClass("is-show")
		}else{
			$(this).stop(true).addClass("is-show")
			$("#calendar-mobile").stop(true).addClass("is-show")
		}
	})
}else{
	$('#calendar').datepicker({
		minDate: "+3d",
		maxDate: "+2m",
		dateFormat: "yy-mm-dd",
		dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
		monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],	
		beforeShowDay: function(date){
			//format date in datepicker to yy-mm-dd
			var new_date = $.datepicker.formatDate('yy-mm-dd', date);
			//disable dates
			return [ datesForDisable.indexOf(new_date) == -1 ]
		}
	})

	$(".top-calendar").hover(function() {
		$(this).stop(true).addClass("is-show")
		$("#calendar").stop(true).addClass("is-show")
	}, function() {
		$(this).stop(true).removeClass("is-show")
	})
	$("#calendar").hover(function() {
	}, function() {
		$(this).stop(true).removeClass("is-show")
	})
}







var $carousel_big = $(".index-news-slider").flickity({
	"prevNextButtons": false,
	"pageDots": false,
	"wrapAround": true,
	"autoPlay": 4000,
	"cellAlign": "center",
	"arrowShape": ""
});

var flkty = $carousel_big.data('flickity');
var cellElements = $carousel_big.flickity('getCellElements');

for (var i = 0; i < cellElements.length; i++) {
	$("<li>").appendTo($(".index-news-page-dots"))
}

$(".index-news-page-dots li").first().addClass("is-selected")

$(".index-news-page-dots li").on("click", function () {
	$carousel_big.flickity('select', $(this).index())
})

$carousel_big.on( 'change.flickity', function( event, index ) {
	$(".index-news-page-dots li").eq(index).addClass("is-selected").siblings().removeClass("is-selected")
});
</script>