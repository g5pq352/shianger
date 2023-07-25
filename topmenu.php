<div id="preload" style="z-index: 119; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background-color: #fff;"></div>

<div class="logo-fixed default show-for-large"><a href="./"><img src="images/logo.svg"></a></div>
<div class="logo-fixed red show-for-large"><a href="./"><img src="images/logo-2.svg"></a></div>

<div class="topmenu-fixed grid-x align-center-middle show-for-large">
	<div class="topmenuList-area cell large-shrink">

		<div class="topmenuList-item <?php if(isset($now) && $now=='index'):?>is-index<?php endif ?>">
			<div class="box"></div>

			<ul class="topmenuList grid-x">
				<!-- <li class="cell large-shrink"><a href="./">
					<span>首頁</span>
					<span>首頁</span>
				</a></li> -->
				<li class="cell large-shrink"><a href="about.php">
					<span>關於我們</span>
					<span>關於我們</span>
				</a></li>
				<li class="cell large-shrink"><a href="news.php">
					<span>最新消息</span>
					<span>最新消息</span>
				</a></li>
				<li class="cell large-shrink"><a href="product.php">
					<span>產品訂購</span>
					<span>產品訂購</span>
				</a></li>
				<li class="cell large-shrink"><a href="qa.php">
					<span>常見問題</span>
					<span>常見問題</span>
				</a></li>
				<li class="cell large-shrink"><a href="contact.php">
					<span>聯絡我們</span>
					<span>聯絡我們</span>
				</a></li>
			</ul>
		</div>
	</div>

	<div class="cart-info-area grid-x cell large-shrink align-middle">
		<ul class="member-area cell large-shrink grid-x">
			<li class="cell large-shrink flex-container align-middle">
				<div class="icon"><img src="images/member-icon-1.svg"></div>
				<div class="text"><a href="login.php">Hi,林很好</a></div>
			</li>
			<li class="cell large-shrink flex-container align-middle">
				<div class="icon"><img src="images/member-icon-2.svg"></div>
				<div class="text"><a href="note.php">購物說明</a></div>
			</li>
			<li class="cell large-shrink flex-container align-middle">
				<div class="icon"><img src="images/member-icon-4.svg"></div>
				<div class="text"><a href="javascript:;">表單下載</a></div>
			</li>
		</ul>

		<div class="cart cell large-shrink addtocart">
			<div class="amount">3</div>
			<img src="images/member-icon-3.svg">
		</div>

		<?php if(isset($now) && $now == 'index') : ?>
		<div class="top-calendar cell large-shrink">
			<div class="item-area flex-container align-middle align-center">
				<div class="icon"><img src="images/date-icon-2.svg"></div>
				<div class="check">查詢最快寄出日</div>
				<div id="calendar"></div>
			</div>
		</div>
		<?php endif ?>
	</div>
</div>


<div class="mobile-logo-fixed hide-for-large"><a href="./"><img src="images/mobile-logo.svg"></a></div>


<div class="mobile-menu-fixed grid-y align-middle hide-for-large">
	<div class="hamburger-area cell shrink">
		<div class="hamburger">
			<span class="item1"></span>
			<span class="item2"></span>
			<span class="item3"></span>
		</div>
	</div>

	<?php if(isset($now) && $now == 'index') : ?>
	<div class="calendar cell shrink top-calendar">
		<div class="icon"><img src="images/member-icon-mobile-4.svg"></div>
		<div id="calendar-mobile">
			<div class="txt">查詢最快寄出日</div>
		</div>
	</div>
	<?php endif ?>

	<div class="cart cell shrink addtocart">
		<div class="number">3</div>
		<img src="images/member-icon-mobile-1.svg">
	</div>

	<!-- <div class="member cell shrink"><a href="member_list.php"><img src="images/member-icon-mobile-2.svg"></a></div> -->

	<!-- <div class="list cell shrink"><a href="javascript:;"><img src="images/member-icon-mobile-3.svg"></a></div> -->
</div>


<div class="mobile-topmenuWrap">
	<div class="close-block"></div>

	<div class="innerWrap">
		<div class="logo text-center"><a href="./"><img src="images/mobile-open-logo.svg"></a></div>

		<ul class="topmenuList">
			<!-- <li><a href="./">首頁<span class="deco"></span></a></li> -->
			<li><a href="about.php">關於我們<span class="deco"></span></a></li>
			<li><a href="news.php">最新消息<span class="deco"></span></a></li>
			<li><a href="product.php">產品訂購<span class="deco"></span></a></li>
			<li><a href="qa.php">常見問題<span class="deco"></span></a></li>
			<li><a href="contact.php">聯絡我們<span class="deco"></span></a></li>
		</ul>

		<ul class="cart-info-area grid-x small-up-2">
			<li class="cell"><a href="login.php" class="flex-container align-middle">
				<span class="icon"><img src="images/open-svg-1.svg"></span>
				<span class="title">會員登入</span>
			</a></li>
			<li class="cell"><a href="javascript:;" class="flex-container align-middle addtocart">
				<span class="icon">
					<i>3</i>
					<img src="images/open-svg-3.svg">
				</span>
				<span class="title">查看購物車</span>
			</a></li>
			<li class="cell"><a href="note.php" class="flex-container align-middle">
				<span class="icon"><img src="images/open-svg-2.svg"></span>
				<span class="title">購物資訊說明</span>
			</a></li>
			<li class="cell"><a href="javascript:;" class="flex-container align-middle">
				<span class="icon"><img src="images/open-svg-4.svg"></span>
				<span class="title">表單下載</span>
			</a></li>
		</ul>
	</div>
</div>



<div class="buy-fixed"><a href="product.php">
	<div class="rotate">
		<img src="images/fix-buy-circle.svg" class="img-cover">
	</div>
	<img src="images/fix-buy-pic.png" class="item">
</a></div>



<!-- 購物車燈箱 -->
<div class="m-fancyWrap cart-fancyWrap has-scrollbar">
	<div class="fancy-closeBlock"></div>

	<!-- code here -->
	<div class="addtocart-fancy-innerWrap">
		<div class="fancy-close"><img src="images/fancy-close.svg"></div>

		<section class="fancy-tableWrap" id="menuapp">
			<ul class="head-area">
				<li>品項</li>
				<li>規格</li>
				<li>數量</li>
				<li>金額</li>
			</ul>

			<div class="body-area">
				<section class="plist">
					<menu-item v-for="(post, c) in posts" :post="post" :c="c"></menu-item>
				</section>
			</div>

			<!-- <ul class="total-area">
			<li class="grid-x align-right align-middle">
			<div class="title cell shrink">小計</div>
			<div class="content cell shrink">${{total}}</div>
			</li>
			<li class="grid-x align-right align-middle">
			<div class="title cell shrink">運費</div>
			<div class="content cell shrink">$150</div>
			</li>
			<li class="grid-x align-right align-middle">
			<div class="title cell shrink">總計</div>
			<div class="content cell shrink">${{total}}</div>
			</li>
			</ul> -->

			<div class="gocheck"><a href="confirm.php"><img src="images/gocheck.svg"></a></div>
		</section>
	</div>
</div>



<!-- dialog fancy -->
<!-- <div class="m-fancyWrap dialog-fancyWrap">
	<div class="fancy-closeBlock"></div>
	
	<div class="dialog-fancyContainer flex-container align-center-middle flex-dir-column">
		<div class="bg"><img src="images/dialog-bg.svg"></div>
		<div class="deco"><img src="images/dialog-deco.svg"></div>
		<div class="content">您已經成功的更新帳號資訊</div>
		<div class="btn"><img src="images/dialog-btn.svg"></div>
	</div>
</div> -->




<template id="my-template">
	<swal-title>您確認要刪除所選的商品嗎?</swal-title>
	<!-- <swal-icon><img src="images/dialog-deco.svg"></swal-icon> -->
	<swal-button type="confirm">是</swal-button>
	<swal-button type="cancel">否</swal-button>
	<swal-button type="close"></swal-button>
</template>