<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="atmWrap">
		<div class="head"><img src="images/atm-head.svg"></div>

		<div class="grid-x align-center">
			<form action="record.php" method="POST" class="atm-loginForm cell large-shrink">
				<div class="login-head"><img src="images/memberlogin-1.svg"></div>

				<div class="field-container">
					<div class="item grid-x align-middle">
						<div class="title cell shrink">手機</div>
						<input type="text" name="" id="" class="cell auto">
					</div>
					<div class="item grid-x align-middle">
						<div class="title cell shrink">密碼</div>
						<input type="password" name="" id="" class="cell auto">
					</div>
				</div>

				<button class="btn"><img src="images/btn-login.svg"></button>
				<div class="forgot"><a href="forgot.php"><img src="images/btn-forgot.svg"></a></div>
			</form>

			<form action="record.php" method="POST" class="atm-loginForm is-notmember cell large-shrink">
				<div class="login-head"><img src="images/memberlogin-2.svg"></div>

				<div class="field-container">
					<div class="item grid-x align-middle">
						<div class="title cell shrink">手機</div>
						<input type="text" name="" id="" class="cell auto">
					</div>
					<div class="item grid-x align-middle">
						<div class="title cell shrink">訂單編號</div>
						<input type="text" name="" id="" class="cell auto">
					</div>
				</div>

				<button class="btn"><img src="images/btn-login.svg"></button>
			</form>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>