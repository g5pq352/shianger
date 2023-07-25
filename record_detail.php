<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-left-red">
	<?php include 'topmenu.php'; ?>

	<div class="memberWrap grid-x">
		<div class="info-container cell large-shrink grid-x align-center show-for-large">
			<div class="name-area">
				<div class="hello"><img src="images/hello.svg" width="110"></div>
				<div class="name">陳嘉明</div>
				<div class="phone">09756258745</div>
			</div>

			<ul class="memberList">
				<li>
					<div class="title"><a href="member.php">
						<span>會員資訊</span>
						<span>會員資訊</span>
					</a></div>
				</li>
				<li>
					<div class="title"><a href="coupon.php">
						<span>折扣劵</span>
						<span>折扣劵</span>
					</a></div>
				</li>
				<li>
					<div class="title"><a href="recipients.php">
						<span>常用收件人</span>
						<span>常用收件人</span>
					</a></div>
				</li>
				<li class="current">
					<div class="title"><a href="record.php">
						<span>訂單紀錄</span>
						<span>訂單紀錄</span>
					</a></div>
				</li>
				<li>
					<div class="title"><a href="login.php">
						<span>登出</span>
						<span>登出</span>
					</a></div>
				</li>
			</ul>

			<div class="deco"><img src="images/record-deco.png"></div>
		</div>

		<div class="member-innerWrap cell large-auto">
			<div class="record-detail-itemWrap">
				<div class="record-orderWrap">
					<div class="big-head text-center hide-for-large"><img src="images/record-head-big-mobile.svg"></div>

				<div class="head show-for-large"><img src="images/record-head.svg"></div>

					<div class="content">
						訂單編號: BBAC000537<br>
						訂單狀態: 已收到訂單<br>
						付款狀態: 尚未付款<br>
						運送狀態: 尚未出貨<br>
						收件人: 陳嘉明<br>
						手機: 0928245697<br>
						地址: 207新北市萬里區中山路一段65號4樓<br>
						出貨日期: 2023/7/21<br>
						備註: 無
					</div>
				</div>

				<div class="record-receiptWrap">
					<div class="head"><img src="images/record-d-head-2.svg" class="show-for-large"><img src="images/record-d-head-2-mobile.svg" class="hide-for-large"></div>

					<section class="record-tableWrap">
						<ul class="head-area">
							<li>品項</li>
							<li>規格</li>
							<li>數量</li>
							<li>金額</li>
						</ul>

						<div class="body-area">
							<section class="plist">
								<section>
									<div class="temperature">
										<div class="tb"></div>
										<div class="lr"></div>
										常溫
									</div>
									<div class="item">
										<div class="pic-area grid-x align-middle">
											<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
											<div class="title cell auto">蛋黃酥禮盒</div>
										</div>

										<div class="price">10入</div>

										<div class="checkout-num">1</div>

										<div class="subtotal">NT.240</div>
									</div>
								</section>
								<section>
									<div class="temperature">
										<div class="tb"></div>
										<div class="lr"></div>
										冷凍
									</div>
									<div class="item">
										<div class="pic-area grid-x align-middle">
											<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
											<div class="title cell auto">蛋黃酥禮盒</div>
										</div>

										<div class="price">10入</div>

										<div class="checkout-num">1</div>

										<div class="subtotal">NT.240</div>
									</div>
									<div class="item">
										<div class="pic-area grid-x align-middle">
											<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
											<div class="title cell auto">蛋黃酥禮盒</div>
										</div>

										<div class="price">10入</div>

										<div class="checkout-num">1</div>

										<div class="subtotal">NT.240</div>
									</div>
								</section>
							</section>
						</div>

						<ul class="total-area">
							<li class="grid-x align-right">
							<div class="title cell shrink">小計</div>
							<div class="content cell shrink">$1,860</div>
							</li>
							<li class="grid-x align-right">
							<div class="title cell shrink">運費</div>
							<div class="content cell shrink">$150</div>
							</li>
							<li class="grid-x align-right">
							<div class="title cell shrink">滿千折百</div>
							<div class="content cell shrink">-$100</div>
							</li>
						</ul>

						<div class="grandtotal grid-x align-right">
							<div class="title cell shrink">總計</div>
							<div class="content cell shrink">$1,910</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
	ScrollTrigger.create({
		toggleActions: "play none play none", //重覆觸發
		trigger: "body",
		start: () => window.innerHeight,
		end: "bottom top", // no end
		onToggle: self => {
			if (self.isActive) {
				$("body").removeClass("is-left-red")
			} else {
				$("body").addClass("is-left-red")
			}
		},
		// markers: true,
	});

	$(".recordList li").eq(0).addClass("is-open")
	$(".recordList li").eq(0).find(".record-detailWrap").slideDown(500)

	if($(".recordList li").length == 0) {
		$(".info-container .deco").hide()
	}

	$(".recordList li").on("click", ".detail, .mobile-detail", function (e) {
		$(e.target).toggleClass("is-open")
		$(".record-detailWrap", e.delegateTarget).slideToggle(500)
	})
</script>