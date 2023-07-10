<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="product-detailWrap grid-x align-top">
		<div class="pd-sliderWrap cell large-shrink">
			<div class="pd-slider-item">
				<!-- Slider main container -->
				<div class="swiper-container pd-slider">
				  <!-- Additional required wrapper -->
				  <div class="swiper-wrapper">
				    <!-- Slides -->
				    <div class="swiper-slide"><img src="images/pd-1.jpg" class="img-cover"></div>
				    <div class="swiper-slide"><img src="images/pd-2.jpg" class="img-cover"></div>
				    <div class="swiper-slide"><img src="images/pd-3.jpg" class="img-cover"></div>
				    <div class="swiper-slide"><img src="images/pd-4.jpg" class="img-cover"></div>
				  </div>
				</div>

				<div class="swiper-pagination"></div>

				<!-- <div class="prev hide-for-large"><img src="images/pds-prev.svg"></div>
				<div class="next hide-for-large"><img src="images/pds-next.svg"></div> -->
			</div>


			<div class="swiper-container thumbList">
				<!-- Additional required wrapper -->
				<ul class="swiper-wrapper">
					<!-- Slides -->
					<li class="swiper-slide"><img src="images/pd-1.jpg"></li>
					<li class="swiper-slide"><img src="images/pd-2.jpg"></li>
					<li class="swiper-slide"><img src="images/pd-3.jpg"></li>
					<li class="swiper-slide"><img src="images/pd-4.jpg"></li>
				</ul>
			</div>
		</div>

		<div class="article-area cell large-auto">
			<div class="name-area">
				<div class="top show-for-large">
					<div class="box"></div>
				</div>
				<div class="bottom show-for-large">
					<div class="box"></div>
				</div>
				<div class="name">蛋黃酥禮盒</div>
				<div class="deco show-for-large"><img src="images/pd-rosette.svg"></div>
			</div>
			<div class="price-area grid-x align-middle">
				<div class="price">＄420</div>
				<ul class="deco-meat">
					<li class="blue">冷藏</li>
					<!-- <li class="green">常溫</li> -->
					<li class="orange">奶蛋素</li>
					<!-- <li class="orange">葷食</li> -->
					<!-- <li class="orange">純素</li> -->
					<!-- <li class="orange">全素</li> -->
				</ul>
			</div>
			<div class="small-order-2 cell">
				<ul class="chooseList">
					<li class="grid-x align-middle">
						<div class="title cell shrink"><i></i>規格</div>
						<select name="" id="" class="cell auto">
							<option value="">10入</option>
							<option value="">12入</option>
							<option value="">14入</option>
						</select>
					</li>
					<li class="grid-x align-middle">
						<div class="title cell shrink"><i></i>數量</div>

						<div class="amount-area cell auto">
							<div class="desc"><img src="images/desc.svg" width="26"></div>

							<input type="text" name="" id="" value="1">

							<div class="asc"><img src="images/asc.svg" width="26"></div>
						</div>
					</li>
				</ul>

				<?php $yet = 1; if($yet) : ?>
					<div class="btn"><img src="images/addtocart-yet.svg" class="show-for-large"><img src="images/addtocart-yet-mobile.svg" class="hide-for-large"></div>
				<?php else : ?>
					<div class="btn addtocart"><img src="images/addtocart.svg" class="show-for-large"><img src="images/addtocart-mobile.svg" class="hide-for-large"></div>
				<?php endif ?>
			</div>

			<div class="introListWrap small-order-1 cell">
				<div class="top show-for-large">
					<div class="box"></div>
				</div>
				<div class="bottom show-for-large">
					<div class="box"></div>
				</div>
				<div class="intro">
					香格首推的超人氣商品，金黃色的紋路酥皮，嚴選22天的紅土醃製鴨蛋黃，以高粱酒去腥，包入細緻綿密的豆沙，是香格一直以來堅持的美味極品。
				</div>

				<ul class="introList">
					<li>
						<div class="title">商品成份</div>
						<div class="content">烏豆紅豆沙、鹹蛋黃、麵粉、進口奶油、糖</div>
					</li>
					<li>
						<div class="title">有效期限</div>
						<div class="content">室溫下保存7天(請依盒側標示日期為主)</div>
					</li>
					<li>
						<div class="title">產品重量</div>
						<div class="content">±70公克</div>
					</li>
					<li>
						<div class="title">過敏原</div>
						<div class="content">本產品含有小麥麵粉、奶、蛋製品。</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="pd-contentWrap" id="pdApp">
		<ul class="pd-catList flex-container align-center text-center">
			<li :class="{'current': cat == 0}" @click="cat = 0">
				<div class="item show-for-large"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>產品描述</span>
						<span>產品描述</span>
					</div>
				</div>
			</li>
			<li :class="{'current': cat == 1}" @click="cat = 1">
				<div class="item show-for-large"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>產品規格</span>
						<span>產品規格</span>
					</div>
				</div>
			</li>
			<li :class="{'current': cat == 2}" @click="cat = 2">
				<div class="item show-for-large"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>配送與其他說明</span>
						<span>配送與其他說明</span>
					</div>
				</div>
			</li>
		</ul>

		<transition name="fade" mode="out-in">	
			<div class="content" v-if="cat == 0" key="a0">
				香格首推的超人氣商品，金黃色的紋路酥皮，嚴選22天的紅土醃製鴨蛋黃，以高粱酒去腥，包入細緻綿密的豆沙，是香格一直以來堅持的美味極品。<br>
				<br>
				怎麼吃：第一口先品嚐香酥可口的外皮，接著印入眼簾的是飽滿的紅豆沙，第二口咬下去，剎那間撲鼻而來的濃香蛋黃與紮實的豆沙在嘴裡化開，外酥內軟、入口即化的口感，每口都值得細細品嚐。<br>
				<br>
				註：高粱酒僅為噴灑去腥，經高溫烘烤後即蒸發，不會殘留任何酒精成分或味道，請放心食用喔!
				<br>
				<br>
				<br>
				<img src="images/pdc-1.jpg">
				<br>
				<br>
				<img src="images/pdc-2.jpg">
			</div>
			<div class="content" v-if="cat == 1" key="a1">
				香格首推的超人氣商品，金黃色的紋路酥皮，嚴選22天的紅土醃製鴨蛋黃，以高粱酒去腥，包入細緻綿密的豆沙，是香格一直以來堅持的美味極品。<br>
				<br>
				怎麼吃：第一口先品嚐香酥可口的外皮，接著印入眼簾的是飽滿的紅豆沙，第二口咬下去，剎那間撲鼻而來的濃香蛋黃與紮實的豆沙在嘴裡化開，外酥內軟、入口即化的口感，每口都值得細細品嚐。<br>
				<br>
				註：高粱酒僅為噴灑去腥，經高溫烘烤後即蒸發，不會殘留任何酒精成分或味道，請放心食用喔!
				<br>
				<br>
				<br>
				<img src="images/pdc-2.jpg">
			</div>
			<div class="content" v-if="cat == 2" key="a2">
				香格首推的超人氣商品，金黃色的紋路酥皮，嚴選22天的紅土醃製鴨蛋黃，以高粱酒去腥，包入細緻綿密的豆沙，是香格一直以來堅持的美味極品。<br>
				<br>
				怎麼吃：第一口先品嚐香酥可口的外皮，接著印入眼簾的是飽滿的紅豆沙，第二口咬下去，剎那間撲鼻而來的濃香蛋黃與紮實的豆沙在嘴裡化開，外酥內軟、入口即化的口感，每口都值得細細品嚐。<br>
				<br>
				註：高粱酒僅為噴灑去腥，經高溫烘烤後即蒸發，不會殘留任何酒精成分或味道，請放心食用喔!
				<br>
				<br>
				<br>
				<img src="images/pdc-1.jpg">
			</div>
		</transition>
	</div>

	<div class="pd-moreWrap">
		<div class="head"><img src="images/pd-more-head.svg"></div>

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

			    	<div class="title-area">
			    		<div class="title">蛋黃酥禮盒</div>
			    	</div>
			    </a></div>
			    <div class="swiper-slide"><a href="product_detail.php">
			    	<div class="pic-area">
			    		<div class="pic"><img src="images/pd-1.jpg" class="img-cover"></div>
			    	</div>

			    	<div class="title-area">
			    		<div class="title">蛋黃酥禮盒</div>
			    	</div>
			    </a></div>
			    <div class="swiper-slide"><a href="product_detail.php">
			    	<div class="pic-area">
			    		<div class="pic"><img src="images/pd-1.jpg" class="img-cover"></div>
			    	</div>

			    	<div class="title-area">
			    		<div class="title">蛋黃酥禮盒</div>
			    	</div>
			    </a></div>
			    <div class="swiper-slide"><a href="product_detail.php">
			    	<div class="pic-area">
			    		<div class="pic"><img src="images/pd-1.jpg" class="img-cover"></div>
			    	</div>

			    	<div class="title-area">
			    		<div class="title">蛋黃酥禮盒</div>
			    	</div>
			    </a></div>
			  </div>
			</div>

			<div class="more-prev"><img src="images/more-prev.svg"></div>
			<div class="more-next"><img src="images/more-next.svg"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
	var swiperThumbs = new Swiper('.thumbList', {
		simulateTouch: true,
		watchOverflow: true,
		breakpoints: {
			// when window width is >= 320px
			375: {
				slidesPerView: 5,
				spaceBetween: 10
			},
			// when window width is >= 640px
			1024: {
				slidesPerView: 5,
				spaceBetween: 15
			}
		}
	});

	var swiperSlides = new Swiper('.pd-slider', {
		speed: 500,
		simulateTouch: true,
		effect: 'fade',
		autoplay: {
			delay: 5000,
		},
		fadeEffect: {
	    	crossFade: true
		},
		navigation: {
			prevEl: '.pd-sliderWrap .prev',
			nextEl: '.pd-sliderWrap .next',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		thumbs: {
			swiper: swiperThumbs
		}
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

	new Vue({
		el: '#pdApp',
		data: {
			cat: 0,
		},
		computed: {},
		methods: {},
		filters: {},
		mounted() {

		},
		updated() {},
	})
</script>