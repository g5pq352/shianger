<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-left-red">
	<?php include 'topmenu.php'; ?>

	<div class="memberWrap-mobile grid-x">
		<div class="info-container cell large-shrink grid-x align-center">
			<div class="name-area">
				<div class="hello"><img src="images/hello-mobile.svg"></div>
				<div class="name">陳嘉明</div>
				<div class="phone">09756258745</div>
			</div>

			<ul class="memberList">
				<li>
					<div class="title"><a href="member.php">會員資訊</a></div>
				</li>
				<li>
					<div class="title"><a href="coupon.php">折扣劵</a></div>
				</li>
				<li>
					<div class="title"><a href="recipients.php">常用收件人</a></div>
				</li>
				<li>
					<div class="title"><a href="record.php">訂單紀錄</a></div>
				</li>
				<li>
					<div class="title"><a href="login.php">登出</a></div>
				</li>
			</ul>

			<div class="deco-2"><img src="images/member-deco-2.png"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
	$('.twzipcode').twzipcode({
		readonly: true,
	});


	$(".memberWrap .memberForm .btn").on("click", function () {
		$(".remind-fancyWrap").addClass("is-show")
	})

	$(".close").on("click", function () {
		$(".remind-fancyWrap").removeClass("is-show")
	})


	ScrollTrigger.create({
		toggleActions: "play none play none", //重覆觸發
		trigger: "body",
		start: () => window.innerHeight,
		end: "bottom top", // no end
		onToggle: self => {
			console.log(123)
			if (self.isActive) {
				$("body").removeClass("is-left-red")
			} else {
				$("body").addClass("is-left-red")
			}
		},
		// markers: true,
	});
</script>