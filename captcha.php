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
			<div class="ok"><img src="images/captcha-ok.svg" width="220"></div>

			<form class="captchaForm" action="javascript:;" method="POST">
				<div class="note">請於時間內輸入手機簡訊驗證碼</div>
				<div class="field">
					<div class="box">
						<div class="star"></div>
						<input type="text" name="" id="" placeholder="輸入您的驗證碼">
					</div>
				</div>
				<button class="btn"><img src="images/btn-send.svg" width="160"></button>
			</form>

			<div class="resent-area">
				<div class="note">如未收到簡訊，請按重新發送</div>
				<button class="btn"><img src="images/btn-resend.svg" width="160"></button>
			</div>
		</div>
	</div>

	<div class="m-fancyWrap remind-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<!-- code here -->
		<div class="remind-fancyContainer">
			<div class="close"><img src="images/remind-close.svg"></div>
			<div class="title">驗證成功!</div>
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