<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="atmWrap">
		<div class="head"><img src="images/atm-head.svg"></div>

		<form action="atm-finish.php" method="POST" class="atm-fieldForm cell large-shrink">
			<div class="field-container">
				<div class="item grid-x align-middle">
					<div class="title cell shrink">匯款姓名</div>
					<input type="text" name="" id="" class="cell auto">
				</div>
				<div class="item grid-x align-middle">
					<div class="title cell shrink">匯款日期</div>
					<input type="date" name="" id="" class="cell auto">
				</div>
				<div class="item grid-x align-middle">
					<div class="title cell shrink">匯款金額</div>
					<input type="text" name="" id="" class="cell auto">
				</div>
				<div class="item grid-x align-middle">
					<div class="title cell shrink">匯款後5碼</div>
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