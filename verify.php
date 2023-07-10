<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-darkyellow">
	<?php include 'topmenu.php'; ?>

	<div class="joinWrap">
		<div class="deco hide-for-large"><img src="images/login-deco-mobile.png"></div>
		
		<div class="captcha-container">
			<div class="head"><img src="images/captcha-head.svg" width="300"></div>

			<form class="captchaForm" action="captcha.php" method="POST">
				<div class="note">點擊下方按鈕</div>
				<div class="note">以取得手機驗證碼</div>
				<button class="btn"><img src="images/btn-send.svg" width="160"></button>
			</form>

			<div class="resent-area"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
$(".captchaForm .btn").on("click", function () {
	$(".remind-fancyWrap").addClass("is-show").scrollTop(0)
	$("body").addClass("is-lock")
})
$(".close").on("click", function () {
	$(".m-fancyWrap").removeClass("is-show")
	gsap.delayedCall(0.5, function () {
		$("body").removeClass("is-lock")
	});
})
</script>