<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="loginWrap">
		<div class="deco-1 show-for-large"><img src="images/login-deco-1.png"></div>
		<div class="deco-2 show-for-large"><img src="images/login-deco-2.png"></div>
		<div class="deco-3 hide-for-large"><img src="images/login-deco-3.png"></div>

		<div class="login-container">
			<div class="head"><img src="images/password-head.svg" width="300"></div>

			<form action="member.php" method="POST" class="loginForm">
				<div class="field-container">
					<div class="item">
						<div class="title">密碼</div>
						<div class="box">
							<div class="star"></div>
							<input type="password" name="" id="">
						</div>
					</div>
					<div class="item">
						<div class="title">確認密碼</div>
						<div class="box">
							<div class="star"></div>
							<input type="password" name="" id="">
						</div>
					</div>
				</div>

				<button class="btn"><img src="images/btn-forgot.svg" width="160"></button>
			</form>
		</div>
	</div>

	<!-- <div class="m-fancyWrap remind-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<div class="remind-fancyContainer">
			<div class="close"><img src="images/remind-close.svg"></div>
			<div class="title">尚有資料未填寫完整！!</div>
		</div>
	</div> -->

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
$(".btn").on("click", function () {
	$(".remind-fancyWrap").addClass("is-show").scrollTop(0)
	$("body").addClass("is-lock")
})
$(".remind-fancyWrap .close").on("click", function () {
	$(".m-fancyWrap").removeClass("is-show")
	gsap.delayedCall(0.5, function () {
		$("body").removeClass("is-lock")
	});
})
</script>