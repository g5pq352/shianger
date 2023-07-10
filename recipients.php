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
				<li class="current">
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

			<div class="deco"><img src="images/recipients-deco.png"></div>
		</div>

		<div class="member-innerWrap cell large-auto">
			<form action="javascript:;" method="POST" class="recipientsForm">
				<div class="recipients-container">
					<div class="big-head text-center hide-for-large"><img src="images/recipients-head-big-mobile.svg"></div>

					<div class="head"><img src="images/recipients-head.svg" class="show-for-large"><img src="images/recipients-head-mobile.svg" class="hide-for-large"></div>

					<div class="field-container">
						<div class="item-area">
							<div class="item grid-x align-middle">
								<div class="title cell shrink">收件人姓名</div>
								<input type="text" name="" id="" class="cell auto" value="陳嘉明">
							</div>
						</div>
						<div class="item-area">
							<div class="item grid-x align-middle">
								<div class="title cell shrink">電話號碼</div>
								<input type="text" name="" id="" class="cell auto" value="0223455564">
							</div>
							<div class="item grid-x align-middle">
								<div class="title cell shrink">手機號碼</div>
								<input type="text" name="" id="" class="cell auto" value="0928574159">
							</div>
						</div>
						<div class="item grid-x align-top address-container">
							<div class="title cell shrink">收件人地址</div>

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

				<button class="recipients-add"><img src="images/recipients-add.svg"></button>
			</form>

			<section class="recipientsList">
				<form action="javascript:;" method="POST" class="recipientsForm">
					<div class="recipients-default">設為預設</div>

					<div class="recipients-container">
					<div class="recipients-star is-default"></div>
						<div class="top">
							<div class="box"></div>
						</div>
						<div class="bottom">
							<div class="box"></div>
						</div>
						<div class="number">
							<div class="text">預設</div>
							<div class="bg"><img src="images/ref-title.svg"></div>
						</div>

						<div class="field-container">
							<div class="item-area">
								<div class="item grid-x align-middle">
									<div class="title cell shrink">收件人姓名</div>
									<input type="text" name="" id="" class="cell auto" value="陳嘉明">
								</div>
							</div>
							<div class="item-area">
								<div class="item grid-x align-middle">
									<div class="title cell shrink">電話號碼</div>
									<input type="text" name="" id="" class="cell auto" value="0223455564">
								</div>
								<div class="item grid-x align-middle">
									<div class="title cell shrink">手機號碼</div>
									<input type="text" name="" id="" class="cell auto" value="0928574159">
								</div>
							</div>
							<div class="item grid-x align-top address-container">
								<div class="title cell large-shrink">收件地址</div>

								<div class="address-area cell large-auto">
									<div class="city-area twzipcode">
										<div id="city" data-role="county" data-value="臺北市"></div>
										<div id="area" data-role="district"></div>
										<div id="add" data-role="zipcode"></div>
									</div>

									<div class="add-area">
										<input type="text" name="" id="" class="add" value="中山路一段51號4樓">
									</div>
								</div>
							</div>
							
							<ul class="btn-area grid-x align-right">
								<li class="cell shrink"><img src="images/recipients-edit.svg" class="show-for-large"><img src="images/recipients-edit-mobile.svg" class="hide-for-large"></li>
								<li class="cell shrink"><img src="images/recipients-del.svg" class="show-for-large"><img src="images/recipients-del-mobile.svg" class="hide-for-large"></li>
							</ul>
						</div>
					</div>
				</form>

				<form action="javascript:;" method="POST" class="recipientsForm">
					<div class="recipients-default">設為預設</div>

					<div class="recipients-container">
					<div class="recipients-star"></div>
						<div class="top">
							<div class="box"></div>
						</div>
						<div class="bottom">
							<div class="box"></div>
						</div>
						<div class="number">
							<div class="text">常用收件1</div>
							<div class="bg"><img src="images/ref-title.svg"></div>
						</div>

						<div class="field-container">
							<div class="item-area">
								<div class="item grid-x align-middle">
									<div class="title cell shrink">收件人姓名</div>
									<input type="text" name="" id="" class="cell auto" value="陳嘉明">
								</div>
							</div>
							<div class="item-area">
								<div class="item grid-x align-middle">
									<div class="title cell shrink">電話號碼</div>
									<input type="text" name="" id="" class="cell auto" value="0223455564">
								</div>
								<div class="item grid-x align-middle">
									<div class="title cell shrink">手機號碼</div>
									<input type="text" name="" id="" class="cell auto" value="0928574159">
								</div>
							</div>
							<div class="item grid-x align-top address-container">
								<div class="title cell large-shrink">收件地址</div>

								<div class="address-area cell large-auto">
									<div class="city-area twzipcode">
										<div id="city" data-role="county" data-value="新北市"></div>
										<div id="area" data-role="district"></div>
										<div id="add" data-role="zipcode"></div>
									</div>

									<div class="add-area">
										<input type="text" name="" id="" class="add" value="中山路一段51號4樓">
									</div>
								</div>
							</div>

							<ul class="btn-area grid-x align-right">
								<li class="cell shrink"><img src="images/recipients-edit.svg" class="show-for-large"><img src="images/recipients-edit-mobile.svg" class="hide-for-large"></li>
								<li class="cell shrink"><img src="images/recipients-del.svg" class="show-for-large"><img src="images/recipients-del-mobile.svg" class="hide-for-large"></li>
							</ul>
						</div>
					</div>

					<div class="record-pager flex-container align-center-middle">
						<a href="javascript:;" class="arrow"><img src="images/page-prev.svg"></a>
						<a href="javascript:;" class="current">1</a>
						<a href="javascript:;">2</a>
						<a href="javascript:;">3</a>
						<a href="javascript:;">4</a>
						<a href="javascript:;" class="arrow"><img src="images/page-next.svg"></a>
					</div>
				</form>
			</section>
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

	$(".recipients-add").on("click", function () {
		$(".remind-fancyWrap").addClass("is-show")
	})
</script>