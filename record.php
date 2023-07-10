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
			<div class="recordWrap">
				<div class="big-head text-center hide-for-large"><img src="images/record-head-big-mobile.svg"></div>

				<div class="head show-for-large"><img src="images/record-head.svg"></div>

				<div class="record-th show-for-large">
					<div>訂購日期</div>
					<div>訂單編號</div>
					<div>訂單金額</div>
					<div>訂單狀態</div>
				</div>

				<ul class="recordList">
					<li>
						<div class="info-area show-for-large">
							<div>2022/11/06</div>
							<div>BBAC000537</div>
							<div>$1,910 <a href="javascript::" class="gopay"><span>付款</span></a></div>
							<div>已出貨</div>
							<div><span class="detail"><i class="star"></i> 貨運狀態</span></div>
							<div><span class="atm"><a href="record_detail.php"><i class="star"></i> 商品明細</a></span></div>
						</div>

						<div class="mobile-info-area hide-for-large">
							<article>
								<ul class="info-area-item-title">
									<li>訂單日期</li>
									<li>訂單編號</li>
									<li class="text-center">訂單金額</li>
								</ul>
								<ul class="info-area-item-content">
									<li>2022/11/06</li>
									<li>BBAC000537</li>
									<li class="text-center">$1,020<a href="javascript:;" class="gopay">付款</a></li>
								</ul>
							</article>
							<article>
								<ul class="info-area-item-title">
									<li>訂單狀態</li>
									<li></li>
									<li></li>
								</ul>
								<ul class="info-area-item-content">
									<li>已出貨</li>
									<li class="detail" data-target="0"><div class="plus"></div><span>貨運狀態</span></li>
									<li class="freight"><a href="record_detail.php"><i></i><span>商品明細</span></a></li>
								</ul>
							</article>
						</div>
						

						<section class="record-detailWrap">
							<ul class="data-area">
								<li>分類</li>
								<li>託運單號</li>
								<li class="show-for-large"></li>
								<li class="show-for-large"></li>
								<li>查看貨運狀態</li>
								<li class="show-for-large"></li>
							</ul>

							<div class="good-area grid-x align-top">
								<div class="chamber cell large-shrink">常溫類</div>
								<ul class="record-table cell large-auto">
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
								</ul>
							</div>

							<div class="good-area grid-x align-top">
								<div class="chamber cell large-shrink">冷藏類</div>
								<ul class="record-table cell large-auto">
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
								</ul>
							</div>
						</section>
					</li>

					<li>
						<div class="info-area show-for-large">
							<div>2022/11/06</div>
							<div>BBAC000537</div>
							<div>$1,910</div>
							<div>已出貨</div>
							<div><span class="detail"><i class="star"></i> 貨運狀態</span></div>
							<div><span class="atm"><a href="record_detail.php"><i class="star"></i> 商品明細</a></span></div>
						</div>

						<div class="mobile-info-area hide-for-large">
							<article>
								<ul class="info-area-item-title">
									<li>訂單日期</li>
									<li>訂單編號</li>
									<li class="text-center">訂單金額</li>
								</ul>
								<ul class="info-area-item-content">
									<li>2022/11/06</li>
									<li>BBAC000537</li>
									<li class="text-center">$1,020<a href="javascript:;" class="gopay">付款</a></li>
								</ul>
							</article>
							<article>
								<ul class="info-area-item-title">
									<li>訂單狀態</li>
									<li></li>
									<li></li>
								</ul>
								<ul class="info-area-item-content">
									<li>已出貨</li>
									<li class="detail" data-target="1"><div class="plus"></div><span>貨運狀態</span></li>
									<li class="freight"><a href="record_detail.php"><i></i><span>商品明細</span></a></li>
								</ul>
							</article>
						</div>
						

						<section class="record-detailWrap">
							<ul class="data-area">
								<li>分類</li>
								<li>託運單號</li>
								<li></li>
								<li></li>
								<li></li>
								<li>查看貨運狀態</li>
							</ul>

							<div class="good-area grid-x align-top">
								<div class="chamber cell large-shrink">常溫類</div>
								<ul class="record-table cell large-auto">
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
								</ul>
							</div>

							<div class="good-area grid-x align-top">
								<div class="chamber cell large-shrink">冷藏類</div>
								<ul class="record-table cell large-auto">
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
								</ul>
							</div>
						</section>
					</li>

					<li>
						<div class="info-area show-for-large">
							<div>2022/11/06</div>
							<div>BBAC000537</div>
							<div>$1,910</div>
							<div>已出貨</div>
							<div><span class="detail"><i class="star"></i> 貨運狀態</span></div>
							<div><span class="atm"><a href="record_detail.php"><i class="star"></i> 商品明細</a></span></div>
						</div>

						<div class="mobile-info-area hide-for-large">
							<article>
								<ul class="info-area-item-title">
									<li>訂單日期</li>
									<li>訂單編號</li>
									<li class="text-center">訂單金額</li>
								</ul>
								<ul class="info-area-item-content">
									<li>2022/11/06</li>
									<li>BBAC000537</li>
									<li class="text-center">$1,020<a href="javascript:;" class="gopay">付款</a></li>
								</ul>
							</article>
							<article>
								<ul class="info-area-item-title">
									<li>訂單狀態</li>
									<li></li>
									<li></li>
								</ul>
								<ul class="info-area-item-content">
									<li>已出貨</li>
									<li class="detail" data-target="2"><div class="plus"></div><span>貨運狀態</span></li>
									<li class="freight"><a href="record_detail.php"><i></i><span>商品明細</span></a></li>
								</ul>
							</article>
						</div>
						

						<section class="record-detailWrap">
							<ul class="data-area">
								<li>分類</li>
								<li>託運單號</li>
								<li></li>
								<li></li>
								<li></li>
								<li>查看貨運狀態</li>
							</ul>

							<div class="good-area grid-x align-top">
								<div class="chamber cell large-shrink">常溫類</div>
								<ul class="record-table cell large-auto">
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
								</ul>
							</div>

							<div class="good-area grid-x align-top">
								<div class="chamber cell large-shrink">冷藏類</div>
								<ul class="record-table cell large-auto">
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
									<li>
										<div class="number">0000-8951-7568</div>
										<div class="copy" onclick="copy('0000-8951-7568')"><i>點我複製</i></div>
										<div class="check"><a href="javascript:;"><i class="star"></i> 查看貨運狀態</a></div>
									</li>
								</ul>
							</div>
						</section>
					</li>
				</ul>

				<div class="record-pager flex-container align-center-middle">
					<a href="javascript:;" class="arrow"><img src="images/page-prev.svg"></a>
					<a href="javascript:;" class="current">1</a>
					<a href="javascript:;">2</a>
					<a href="javascript:;">3</a>
					<a href="javascript:;">4</a>
					<a href="javascript:;" class="arrow"><img src="images/page-next.svg"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="m-fancyWrap remind-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<!-- code here -->
		<div class="remind-fancyContainer">
			<div class="close"><img src="images/remind-close.svg"></div>
			<div class="title">
				已複製包裹號碼:<br>
				<span class="now-number"></span>
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

	$(".recordList li").on("click", ".detail", function (e) {
		var _now = $(e.currentTarget).data("target");
		
		$(e.target).closest(".recordList").find(">li").eq(_now).toggleClass("is-open")
		$(".record-detailWrap", e.delegateTarget).slideToggle(500)
	})


	function copy(Num) {
		/* Copy the text inside the text field */
		navigator.clipboard.writeText(Num);
		$(".now-number").text(Num)
		$(".remind-fancyWrap").addClass("is-show")
	}
</script>