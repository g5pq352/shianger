<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="atmWrap">
		<div class="head"><img src="images/forgot-head.svg"></div>

		<form action="atm-finish.php" method="POST" class="atm-fieldForm cell large-shrink">
			<div class="field-container">
				<div class="item grid-x align-middle">
					<div class="title cell shrink">信箱</div>
					<input type="text" name="" id="" class="cell auto">
				</div>
			</div>

			<button class="btn"><img src="images/atm-send.svg"></button>
		</form>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>