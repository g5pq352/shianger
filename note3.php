<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="yellow-50">
	<?php include 'topmenu.php'; ?>

	<div class="shopnoteWrap" id="app">
		<div class="deco show-for-large"><img src="images/note-deco.png"></div>
		
		<div class="head">
			<img src="images/shopnote-head.svg" class="show-for-large">
			<img src="images/shopnote-head-mobile.svg" class="hide-for-large">
		</div>

		<ul class="pd-catList note grid-x large-up-4 small-up-2 align-center text-center">
			<li><a href="note.php">
				<div class="item"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>購物須知</span>
						<span>購物須知</span>
					</div>
				</div>
			</a></li>
			<li><a href="note2.php">
				<div class="item"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>運費與配送方式</span>
						<span>運費與配送方式</span>
					</div>
				</div>
			</a></li>
			<li class="current"><a href="javascript:;">
				<div class="item"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>付款方式</span>
						<span>付款方式</span>
					</div>
				</div>
			</a></li>
			<li><a href="note4.php">
				<div class="item"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>退換貨說明</span>
						<span>退換貨說明</span>
					</div>
				</div>
			</a></li>
		</ul>

		<div class="article-area">
			<ul class="noteList">
				<li>
					<div class="title"></div>
					<div class="content">
						選擇「線上刷卡」或「虛擬帳號」方式來付款。<br>
						請於訂購日+2日內全額匯款，以利商品如期出貨，逾時付款或付款失敗，系統將取消訂單。<br>
						1.信用卡：適用Visa、MasterCard、JCB<br>
						2.虛擬帳號：提供網路ATM、實體ATM完成轉帳<br>
						※請確認轉帳金額與訂單金額相符，金額不符將導致付款失敗及訂單取消。
					</div>
				</li>
			</ul>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>