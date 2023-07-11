<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-darkyellow">
	<?php include 'topmenu.php'; ?>

	<div class="storeWrap">
		<div class="head"><img src="images/store-head.svg"></div>

		<section class="storeList">
			<section>
				<div class="pic-area">
					<div class="slogan"><img src="images/store-slogan.svg"></div>
					<div class="pic"><img src="images/store-pic.jpg"></div>
					<div class="arc">
						<svg width="1675.8" height="718.18" viewBox="0 0 1675.8 718.18" class="show-for-large">
							<path d="M.5,718.18H.5c0-396.36,357.37-717.68,798.2-717.68h78.39c440.83,0,798.2,321.32,798.2,717.68h0" style="fill: none; stroke: #c9bc9c; stroke-miterlimit: 10;"/>
						</svg>
						<svg viewBox="0 0 374.34 160.45" class="hide-for-large">
							<path d="M.28,160.45H.28c0-88.46,79.76-160.17,178.14-160.17h17.5c98.38,0,178.14,71.71,178.14,160.17h0" style="fill: none; stroke: #c7b995; stroke-miterlimit: 10; stroke-width: 1px;"/>
						</svg>
					</div>
				</div>

				<ul class="infoList">
					<li class="grid-x align-middle large-up-2">
						<div class="item cell grid-x">
							<div class="title cell shrink">營業日</div>
							<div class="content cell auto">星期⼀~星期日</div>
						</div>

						<div class="item cell grid-x">
							<div class="title cell shrink">電話</div>
							<div class="content cell auto"><a href="tel:+8860422056607">(04)22056607／22056608</a></div>
						</div>
						
					</li>
					<li class="grid-x align-middle large-up-2">
						<div class="item cell grid-x">
							<div class="title cell shrink">營業時間</div>
							<div class="content cell auto">09:00~21:00</div>
						</div>

						<div class="item cell grid-x">
							<div class="title cell shrink">地址</div>
							<div class="content cell auto">
								404台中市北區梅亭街557號
								<div class="btn cell shrink"><a href="https://goo.gl/maps/EWDbJesmvKfmQ3qg8" target="_blank"><img src="images/map-btn.svg"></a></div>
							</div>
						</div>
					</li>
				</ul>
			</section>
		</section>
	</div>

	<div class="contactWrap">
		<div class="head"><img src="images/contact-head.svg"></div>

		<div class="head-area">
			<nav class="shareList">
				<a href="javascript:;"><img src="images/c-share-1.svg"></a>
				<a href="javascript:;"><img src="images/c-share-2.svg"></a>
			</nav>
			<div class="content">
				線上客服時間 週一至週五 10:00-18:00<br>
				<br>
				若您如有立即回覆之需求<br>
				請撥打門市電話04-22056607／22056608
			</div>
		</div>

		<form class="contactForm" action="contactFinish.php#finishAnchor" method="POST">
			<div class="field-container">
				<div class="item is-two">
					<div class="subitem grid-x align-middle">
						<div class="title cell shrink"><span>姓名</span></div>
						<div class="text-area cell auto">
							<div class="tb"></div>
							<div class="lr"></div>
							<input type="text" name="" id="">
						</div>
					</div>

					<div class="subitem grid-x align-middle">
						<div class="title cell shrink"><span>手機號碼</span></div>
						<div class="text-area cell auto">
							<div class="tb"></div>
							<div class="lr"></div>
							<input type="text" name="" id="">
						</div>
					</div>
				</div>
				<div class="item grid-x align-middle">
					<div class="title cell shrink"><span>電子信箱</span></div>
					<div class="text-area cell auto">
						<div class="tb"></div>
						<div class="lr"></div>
						<input type="text" name="" id="">
					</div>
				</div>
				<div class="item grid-x align-top message-area">
					<div class="title cell shrink"><span>留言訊息</span></div>
					<div class="text-area cell auto">
						<div class="tb"></div>
						<div class="lr"></div>
						<textarea name="" id=""></textarea>
					</div>
				</div>
			</div>

			<button class="submit">
				<img src="images/submit.svg">
			</button>
		</form>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
ScrollTrigger.create({
	trigger: ".storeList",
	start: "top center",
	onEnter: () => {
		_tl.play()
	}
});

var _tl = gsap.timeline({
	paused: true,
}).from($(".arc path"), .7,{
	ease: "none",
	drawSVG: "0% 0%"
}).fromTo(".slogan", {
	y: 60,
	opacity: 0,
	scale: 0,
},{
	opacity: 1,
	scale: 1,
	y: 0,
	duration: 1.8,
	ease: "bounce",
})
</script>