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
				<li class="current">
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

			<div class="deco-2"><img src="images/member-deco-2.png"></div>
		</div>

		<div class="member-innerWrap cell large-auto">
			<form action="javascript:;" method="POST" class="memberForm">
				<div class="memberdata-container">
					<!-- <div class="deco show-for-large"><img src="images/member-deco.png"></div> -->

					<div class="big-head text-center hide-for-large"><img src="images/member-head-big-mobile.svg"></div>

					<div class="head"><img src="images/member-head-1.svg" class="show-for-large"><img src="images/member-head-1-mobile.svg" class="hide-for-large"></div>

					<div class="field-container">
						<div class="item grid-x align-middle">
							<div class="title cell shrink"><span>帳號</span></div>
							<div class="content cell auto">0928574159</div>
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink"><span>舊密碼</span></div>
							<div class="box cell auto">
								<div class="star"></div>
								<input type="password" name="" id="">
							</div>
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink"><span>新密碼</span></div>
							<div class="box cell auto">
								<div class="star"></div>
								<input type="password" name="" id="">
							</div>
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink"><span>新密碼確認</span></div>
							<div class="box cell auto">
								<div class="star"></div>
								<input type="password" name="" id="">
							</div>
						</div>
					</div>
				</div>

				<button class="btn"><img src="images/btn-editok.svg"></button>
			</form>

			<form action="javascript:;" method="POST" class="memberForm">
				<div class="memberbasic-container">
					<div class="head"><img src="images/member-head-2.svg" class="show-for-large"><img src="images/member-head-2-mobile.svg" class="hide-for-large"></div>

					<div class="field-container">
						<div class="item-area">
							<div class="item grid-x align-middle">
								<div class="title cell shrink"><span>姓名</span></div>
								<input type="text" name="" id="" class="cell auto" value="陳嘉明">
							</div>
							<div class="item grid-x align-middle">
								<div class="title cell shrink"><span>生日</span></div>
								<input type="text" name="" id="datepicker" class="cell auto" value="1996/04/15">
							</div>
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink"><span>手機</span></div>
							<input type="text" name="" id="" class="cell auto" value="0928574159">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink"><span>電子信箱</span></div>
							<input type="text" name="" id="" class="cell auto" value="chiawiasina@gmail.com">
						</div>
						<div class="item grid-x align-top address-container">
							<div class="title cell shrink"><span>地址</span></div>

							<div class="address-area cell large-auto">
								<div class="city-area twzipcode">
									<div class="city" data-role="county"></div>
									<div class="area" data-role="district"></div>
									<div class="code" data-role="zipcode"></div>
								</div>
								<input type="text" name="reciver-add" class="add" value="中山路一段51號4樓">
							</div>
						</div>
					</div>
				</div>

				<button class="btn"><img src="images/btn-editok.svg"></button>
			</form>

			<div class="howtoknow-container member">
				<div class="how-head"><img src="images/member-how-head.svg"></div>

				<div class="howtoknow-area grid-x large-up-3">
					<div class="cell how-item">
						<input type="radio" name="how">
						<label><span>親友推薦或送禮公司送禮</span></label>
					</div>
					<div class="cell how-item">
						<input type="radio" name="how">
						<label><span>透過看板廣告／宣傳單</span></label>
					</div>
					<div class="cell how-item">
						<input type="radio" name="how" checked>
						<label><span>透過搜尋引擎</span></label>
					</div>
					<div class="cell how-item">
						<input type="radio" name="how">
						<label><span>透過社群廣告</span></label>
					</div>
					<div class="cell how-item">
						<input type="radio" name="how">
						<label><span>透過社群Facebook或IG分享文</span></label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="m-fancyWrap remind-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<!-- code here -->
		<div class="remind-fancyContainer">
			<div class="close"><img src="images/remind-close.svg"></div>
			<div class="title">尚有資料未填寫完整！!</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="js/messages.zh-tw.js" type="text/javascript"></script>
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

	$('.twzipcode').twzipcode({
		readonly: true,
	});


	$(".memberWrap .memberForm .btn").on("click", function () {
		$(".remind-fancyWrap").addClass("is-show")
	})

	$(".close").on("click", function () {
		$(".remind-fancyWrap").removeClass("is-show")
	})

	$('#datepicker').datepicker({
		locale: 'zh-tw',
		format: 'yyyy/mm/dd',
	});
	$('.gj-datepicker').addClass("cell auto")
</script>