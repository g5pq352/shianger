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
				<li class="current">
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
				<li>
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
			
			<div class="deco"><img src="images/coupon-deco.png"></div>
		</div>

		<div class="member-innerWrap cell large-auto">
			<div class="big-head text-center hide-for-large"><img src="images/coupon-head-big-mobile.svg"></div>
			
			<div class="couponWrap">
				<div class="head"><img src="images/coupon-head.svg" class="show-for-large"></div>

				<div class="coupon-th">
					<div>名稱</div>
					<div>優惠碼</div>
					<div>使用期限</div>
				</div>

				<ul class="couponList">
					<li class="unused">
						<div class="bd show-for-large">
							<div class="bd-line"></div>
							<img src="images/coupon-bd.svg" class="dots show-for-large">
						</div>
						<div>滿750折50元</div>
						<div>ADGH46</div>
						<div>2022/12/23</div>
						<div class="discount">
							<div class="hide-for-large"></div>
							<div  onclick="copy('ADGH46')">複製優惠碼</div>
							<div class="text-center hide-for-large">未使用</div>
						</div>
						<div class="text show-for-large"><span>未使用</span></div>
					</li>
					<li class="unused">
						<div class="bd show-for-large">
							<div class="bd-line"></div>
							<img src="images/coupon-bd.svg" class="dots show-for-large">
						</div>
						<div>滿千折百</div>
						<div>WEGD56</div>
						<div>2022/12/02</div>
						<div class="discount">
							<div class="hide-for-large"></div>
							<div onclick="copy('WEGD56')">複製優惠碼</div>
							<div class="text-center hide-for-large">未使用</div>
						</div>
						<div class="text show-for-large"><span>未使用</span></div>
					</li>
					<li class="is-disable used">
						<div class="bd show-for-large">
							<div class="bd-line"></div>
							<img src="images/coupon-bd-white.svg" class="dots show-for-large">
						</div>
						<div>滿750折50元</div>
						<div>RFD0456</div>
						<div>2022/12/23</div>
						<div class="discount">
							<div class="hide-for-large"></div>
							<div onclick="copy('RFD0456')">複製優惠碼</div>
							<div class="text-center hide-for-large">已使用</div>
						</div>
						<div class="text show-for-large"><span>已使用</span></div>
					</li>
					<li class="is-disable exp">
						<div class="bd show-for-large">
							<div class="bd-line"></div>
							<img src="images/coupon-bd-white.svg" class="dots show-for-large">
						</div>
						<div>滿千折百</div>
						<div>WEGD56</div>
						<div>2022/12/02</div>
						<div class="discount">
							<div class="hide-for-large"></div>
							<div onclick="copy('WEGD56')">複製優惠碼</div>
							<div class="text-center hide-for-large">已過期</div>
						</div>
						<div class="text show-for-large"><span>已過期</span></div>
					</li>
				</ul>
			</div>
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

	<div class="m-fancyWrap remind-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<!-- code here -->
		<div class="remind-fancyContainer">
			<div class="close"><img src="images/remind-close.svg"></div>
			<div class="title">
				已複製優惠碼:<br>
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

	function copy(Num) {
		/* Copy the text inside the text field */
		navigator.clipboard.writeText(Num);
		$(".now-number").text(Num)
		$(".remind-fancyWrap").addClass("is-show")
	}
</script>