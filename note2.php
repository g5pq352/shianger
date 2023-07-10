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

		<ul class="pd-catList note grid-x large-up-4 small-up-2r align-center text-center">
			<li><a href="note.php">
				<div class="item"><img src="images/pd-rosette-2.svg"></div>
				<div class="title">
					<div class="items">
						<span>購物須知</span>
						<span>購物須知</span>
					</div>
				</div>
			</a></li>
			<li class="current"><a href="javascript:;">
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
					<div class="title">1.運費收取方式?</div>
					<div class="content">
						台灣本島-常溫宅配訂單滿$3500；未滿則酌收$160/同一地址及同一日期。<br>
						離島-常溫宅配訂單滿$7000；未滿則酌收運費一律$250/同一地址及同一日期。<br>
						<span class="red">暫時無提供</span>(冷藏配送/台灣本島冷藏運費一律$250)<br>
						常溫、冷藏的商品運費為分開計算，不合併訂單，購買時請留意產品的配送方式。<br>
						<span class="red">一筆訂單配送同一地址/同一日期；若需配送2個地址以上，請另外訂購您需求的訂單筆數。(單筆訂單不做拆單)</span>
					</div>
				</li>
				<li>
					<div class="title">2.下單後多久收到商品?</div>
					<div class="content">
						請以購物車結帳系統裡的「最快出貨日期」為準。<br>
						我們將以您選擇的日期出貨，台灣本島約1-2天內會送達，離島地區約2-4天(目前週六、週日無配送)<br>
						*「希望送達日」為出貨日期+1天；實際配送狀況，仍須以該區物流之配送量與行程為主。<br>
						*春節或中秋等物流繁盛時期，將無法保證送達日。<br>
						※若遇颱風天或不可抗力因素情形，經新聞及配合之宅配公司公告停班停課下，為顧及貨品與運輸安全，將延遲及停止配送服務，實際配送日期會以物流為主。
					</div>
				</li>
				<li>
					<div class="title">3.如何知道商品當日配送進度?</div>
					<div class="content">
						出貨當日或隔天可來電04-22056608索取黑貓宅配的託運單號碼，或直接至官網的訂單查詢中取得訂單的託運單單號。<br>
						※黑貓宅急便顧客服務專線：412-8888(手機請加02)查詢包裹配送進度；快速連結請點https://reurl.cc/OVWoVD<br>
						<br>
						<b>宅配相關風險資訊</b><br>
						如果您在香格禮坊購物網站進行訂購、付款、消費或進行相關行為，選擇宅配配送，即代表您委託付費予香格禮坊，香格禮坊代為將商品經由宅配配送給您。<br>
						香格禮坊會將所配送產生的託運單號提供給您(亦可來電索取)，以便您線上查閱配送進度，香格禮坊並無義務查詢並追蹤貨物進度。<br>
						如果您在填寫配送相關訊息時，留下錯誤的資訊（例如：電話及地址），導致配送延遲、失敗或相關延伸之貨故，香格禮坊一概不予受理！<br>
						香格禮坊以【黑貓宅急便】物流公司配送，可能因天災及年節時宅配業者貨量過多，有延遲到貨的風險!<br>
						如有任何貨故及延遲到貨之索賠，請自行聯繫宅配物流業者索賠，香格禮坊僅做到提醒與給予託運單追蹤之責，並不予以承擔任何配送風險與責任。<br>
						如無法接受，請勿使用宅配服務。【**請評估是否能自行承擔(接受)宅配風險**】
					</div>
				</li>
			</ul>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>