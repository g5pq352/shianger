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
			<li class="current"><a href="javascript:;">
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
			<li><a href="note3.php">
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
					<div class="title">1.訂購方式</div>
					<div class="content">
						● 電話訂購：若有急迫的訂購需求日期，請來電04-22056608訂購，並選擇【黑貓宅配】或【門市取貨】<br>
						● 網路訂購：商品訂購需先註冊會員，並登入會員；只提供「宅配」服務(與黑貓宅急便配合)。<br>
						● 大量訂購：公司行號、企業訂購或是團購等大宗需求，總金額過20,000以上，請直接來電04-22056608由專人服務喔!
					</div>
				</li>
				<li>
					<div class="title">2.如何加入「網路會員」？</div>
					<div class="content">透過「手機號碼」綁定註冊的方式，填寫會員資料後即可開始線上購物。</div>
				</li>
				<li>
					<div class="title">3.訂單成立後，可以取消或修改訂單嗎?</div>
					<div class="content">
						● 訂單送出後即無法修改訂單內容，若要調整，請來電或訊息先取消訂單後，再重新下單訂購。<br>
						● 若要取消，請於出貨日前5天 (不含送達當日) 撥打客服專線04-22056608或至FB私訊，並提供訂單編號、訂購人大名，將由專人為您處理。
					</div>
				</li>
				<li>
					<div class="title">4.可否指定到貨日期?</div>
					<div class="content">
						宅配是與黑貓宅急便物流配合，會提供訂單的「出貨日期」做安排，並提供「希望送達時段」的點選；基本上「希望送達日」為出貨日+1天，但無法保證指定精準時刻，敬請見諒。<br>
						※春節或中秋節屬物流繁盛期，皆無法保證送達日與時段，僅能向顧客確保香格禮坊有將您的訂單於出貨日期如期出貨!若有送禮安排的考量，請務必斟酌您的出貨日期。
					</div>
				</li>
				<li>
					<div class="title">5.最低訂購金額的限制</div>
					<div class="content">因紙箱材積和禮盒規格的尺寸搭配，故訂購內容須滿400元才能安排宅配出貨</div>
				</li>
			</ul>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>