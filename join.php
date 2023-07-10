<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-darkyellow">
	<?php include 'topmenu.php'; ?>

	<div class="joinWrap">
		<div class="deco"><img src="images/join-deco.png"></div>

		<div class="innerWrap">
			<div class="head"><img src="images/join-head.svg" width="300"></div>

			<form action="verify.php" method="POST" class="joinForm">
				<div class="field-container">
					<div class="item-area">
						<div class="item grid-x align-top">
							<div class="title cell shrink grid-x align-justify"><i>姓</i><i>名</i></div>
							<input type="text" name="" id="" class="cell auto">
						</div>
						<div class="item grid-x align-top">
							<div class="title cell shrink grid-x align-justify"><i>生</i><i>日</i></div>
							<input type="text" name="" id="datepicker" class="cell auto" readonly>
						</div>
					</div>
					<div class="item-area">
						<div class="item grid-x align-top">
							<div class="title cell shrink">手機號碼</div>
							<input type="text" name="" id="" class="cell auto">
						</div>
						<div class="item grid-x align-top">
							<div class="title cell shrink grid-x align-justify"><i>密</i><i>碼</i></div>
							<input type="password" name="" id="" class="cell auto">
						</div>
					</div>
					<div class="item grid-x align-top">
						<div class="title cell shrink">電子信箱</div>
						<input type="text" name="" id="" class="cell auto">
					</div>
					<div class="item grid-x align-top">
						<div class="title cell shrink grid-x align-justify"><i>地</i><i>址</i></div>
						<div class="address-area cell large-auto">
							<div class="city-area twzipcode">
								<div class="city" data-role="county"></div>
								<div class="area" data-role="district"></div>
								<div class="code" data-role="zipcode"></div>
							</div>
							<input type="text" name="reciver-add" class="add" value="中山路一段51號4樓">
						</div>
					</div>
				</div>
				<div class="howtoknow-container grid-x align-middle">
					<div class="how-head cell large-shrink"><img src="images/howtoknow.svg" width="280"></div>

					<div class="howtoknow-area cell large-auto grid-x large-up-3">
						<div class="cell how-item">
							<input type="radio" name="how" id="how1">
							<label for="how1"><span>親友推薦或送禮公司送禮</span></label>
						</div>
						<div class="cell how-item">
							<input type="radio" name="how" id="how2">
							<label for="how2"><span>透過看板廣告／宣傳單</span></label>
						</div>
						<div class="cell how-item">
							<input type="radio" name="how" id="how3">
							<label for="how3"><span>透過搜尋引擎</span></label>
						</div>
						<div class="cell how-item">
							<input type="radio" name="how" id="how4">
							<label for="how4"><span>透過社群廣告</span></label>
						</div>
						<div class="cell how-item">
							<input type="radio" name="how" id="how5">
							<label for="how5"><span>透過社群Facebook或IG分享文</span></label>
						</div>
					</div>
				</div>

				<div class="terms-container">
					<div class="terms-area">
						<input type="radio" name="terms" id="t1">
						<label for="t1">我已閱讀，並同意條款</label>
					</div>
					<button class="btn"><img src="images/btn-join-send.svg" width="160"></button>
				</div>
			</form>
		</div>
	</div>

	<div class="m-fancyWrap has-scrollbar terms-fancyWrap">
		<div class="fancy-closeBlock"></div>

		<!-- code here -->
		<div class="terms-fancyContainer">
			<div class="fancy-close"><img src="images/fancy-close.svg"></div>

			<div class="head"><img src="images/term-head.svg" width="260"></div>

			<div class="company">香格 會員註冊條款</div>

			<div class="content">
				<b>註冊條款</b><br>
				親愛的會員您好，感謝您向香格禮坊電子商務網站訂購商品，為維護您的權益，請仔細閱讀下述說明：<br>
				本約定條款的目的，是為了保護您以及香格禮坊的利益，凡欲申請加入香格禮坊線上購物網會員者，均應事先充分閱讀且瞭解本聲明書之內容，並在認同此一內容精神與同意遵守相關規定下申請加入成為香格禮坊線上購物網會員。本公司因應經營之需要得於任何時候可隨時修改本條款之內容，將不再另行通知修改後的條款，會以公告之方式通知會員。若您於條款修改公告後仍繼續使用本公司購物網網站，即表示您同意修改後的條款並遵守。如果您點選「我同意」或類似語意的選項、或在香格禮坊網站進行訂購、付款、消費或進行相關行為，就視為您事先已經知悉、並同意本約定條款的所有約定。<br>
				如您不同意本條款之全部或部分內容，請勿註冊，並請立即停止使用本服務。本條款之具體約定內容如後：<br>
				一、	會員資料<br>
				1.會員如未滿二十歲者，於網路消費前應先經其法定代理人之同意。一經訂購消費，即視為已取得法定代理人之同意。<br>
				2.您的註冊或登錄資料義務：您須提供正確、最新及完整的資料，如果事後有變更，應即時至本網站更新。<br>
				若您提供任何錯誤或不實的資料，本網站有權暫停或終止您的帳號，並拒絕您使用本網站服務之全部或一部。所有使用會員帳號和密碼進入本網站後之行為，均視為該帳號及密碼持有人之行為。請您妥善保管個人資料、付款資料（包含信用卡資料）、會員帳號及密碼以避免外洩。<br>
				二、	網站使用規定<br>
				1.在您完成線上訂購程序以後，香格禮坊會經由電子郵件或其他方式寄給您一封確認信，但是該項確認信只是確認本系統已經收到您的訂購訊息，不代表交易已經完成或契約已經成立，香格禮坊保留是否接受您的訂單的權利。如果香格禮坊確認交易條件無誤、付款完成、則不另行通知，但是您可以撥打04-22056608或是寄信至shianger1992@gmail.com確認網路訂購或查詢出貨狀況。<br>
				2.您完成刷卡、ATM轉帳或以其他方式完成付款，不代表交易已經完成或契約已經成立，香格禮坊保留是否接受您的訂單的權利。若交易條件有誤、商品無存貨、服務無法提供或有香格禮坊無法接受訂單之情形，香格禮坊得主動為您辦理退款。<br>
				3.您了解並同意，雖然香格禮坊會盡力維護相關資料的正確性，但香格禮坊不以任何明示或默示的方式保證所有出現在網頁上、或相關訊息上的資料均為完整、正確、即時的資訊。如果網頁上、或相關訊息所標示的價格有誤，依網站販售之標示金額為主。<br>
				4.您一旦在香格禮坊網站完成訂購程序，就表示您提出要約、願意依照本約定條款及相關網頁上所載明的交易條件或限制，訂購該商品或服務。<br>
				5.您所留存的資料(如地址、電話)如有變更，應立即撥打04-22056608或是寄信至shianger1992@gmail.com通知修改所留存的資料，並確認雙方有充分確認之，不得以資料不符為理由，否認訂購行為或拒絕付款。<br>
				三、 智慧財產權之聲明<br>
				本網站所使用之軟體或程式、公佈之所有圖文、檔案、資訊、網頁設計或其他內容、表徵，除法律另有規定外，均擁有智慧財產權與其他權利。<br>
				任何人非權利人事先書面同意，不得逕自重製、改作、散佈或為其他妨礙權利人權益之行為。<br>
				四、 關於退貨退款<br>
				1.宅配相關資訊<br>
				如果您在香格禮坊購物網站進行訂購、付款、消費或進行相關行為，選擇宅配配送，即代表您委託付費予香格禮坊，香格禮坊代為將商品經由宅配配送給您。<br>
				香格禮坊會將所配送產生的託運單號傳送予您的Email(亦可來電索取)，以便您線上查閱配送進度，香格禮坊並無義務查詢並追蹤貨物進度。<br>
				如果您在填寫配送相關訊息時，留下錯誤的資訊（例如：電話及地址），導致配送延遲、失敗或相關延伸之貨故，香格禮坊一概不予受理！<br>
				香格禮坊以【黑貓宅急便】配送，可能因天災及宅配業者貨量過多，有延遲到貨的風險!<br>
				如有任何貨故及延遲到貨之索賠，請自行聯繫宅配物流業者索賠，香格禮坊僅做到提醒與給予託運單追蹤之責，並不予以承擔任何配送風險與責任。<br>
				如無法接受，請勿宅配。<br>
				【選擇宅配糕餅，請評估是否能自行承擔(接受)宅配風險】<br>
				2.如果您所訂購的商品有瑕疵，您可以要求全額退費。<br>
				3.您在香格禮坊網站上所訂購的商品，除下列商品不適用七天之內退貨退款的約定外，都可以在七天之內要求退貨退款；但是，商品說明網頁或相關網頁上另有說明或限制者，依其說明或限制：<br>
				※性質上易於變質或損壞的商品、以及性質上無法或不適合退還的商品，包括且不限於食品等。<br>
				※依照您所要求或註明的規格、需求，所訂製、調整的商品。<br>
				※依照通常保存及運送條件，貨物取回時已逾保存期限的商品。<br>
				3.您所退回的商品，必須保持所有商品、贈品、附件、包裝、及所有附隨文件或資料的完整性，如果有實體發票，並應連同發票一併退回及簽署折讓單等相關法令所要求之單據；否則，香格禮坊得拒絕接受您的退貨退款要求。<br>
				五、 系統安全<br>
				1.本系統不以任何明示或默示的方式擔保您所上載或傳輸的資料將被正常顯示或處理、亦不擔保資料傳輸的正確性；如果您發現本系統有錯誤或疏失，請立即通知香格禮坊。<br>
				2.本系統會定期備份資料，但是除非本系統有故意或重大過失，本系統不對任何資料的失誤刪除、或備份錯誤或失敗負責。<br>
				六、 契約之解釋<br>
				本約定條款及相關網頁上所定各條、各項及相關約定之內容，如該條、該項、或該相關約定內容之全部或一部經法院認定為無效或不構成契約內容之一部，不影響其餘條項或其餘約定內容之效力；經法院認定為無效或不構成契約內容之一部之條項或約定內容，應依相關法令規定所允許之最大可能範圍內，為與原條項或原約定內容相符之解釋或補充。<br>
				因本約定條款及相關網頁上所定之任一條項或相關約定所取得或可主張之權利，其行使或不行使，不影響依本約定條款及相關網頁上所定其他條項或相關約定所取得或可主張之權利之行使或不行使。<br>
				依消費者保護法第十一條第二項之規定，定型化契約條款如有疑義時，應為有利於消費者之解釋。<br>
				七、 其他約定<br>
				您瞭解並同意，如果香格禮坊電子商務、及與其相關之權利義務關係及交易等合約移轉予第三人，則香格禮坊電子商務之權利義務關係、相關交易、以及相關資料等，包括且不限於相關之權利義務關係等，亦得一併移轉予該第三人承受、並由該第三人繼續提供服務。<br>
				您瞭解並同意，如果香格禮坊因故依法或依約必須對您負擔賠償或補償責任，則香格禮坊之賠償或補償責任，應以退還有爭議之該筆交易之實收金額為賠償或補償責任之上限。<br>
				香格禮坊提供完善的售後服務，若商品不符或新品有破損、瑕疵之情形，請於收到商品後立即來電04-22056608。<br>
				本公司食品業者登錄字號：B-187618585-00000-7<br>
				投保產品責任險字號：國泰產物保險號碼1502字第09PD04048號。<br>
				公司名稱：香格禮坊 。<br>
				公司地址：台中市北區梅亭街557號。<br>
				八、本聲明書之效力、準據法與管轄法院<br>
				您在香格禮坊所進行的所有線上訂購、交易或行為，以及本約定條款，都以中華民國法令為準據法。<br>
				所有因為您在香格禮坊進行線上訂購、交易或行為，以及因本約定條款所發生的糾紛，如果因此而涉訟，都以台灣台中地方法院為第一審管轄法院。但不得排除消費者保護法第四十七條及民事訴訟法第四百三十六條之九規定之小額訴訟管轄法院之適用。<br>
				本聲明書中，任何條款之全部或一部份無效時，不影響其他約定之效力。會員與本公司之權利義務關係，應依網路規範及中華民國法令解釋及規章、慣例為 依據處理。若產生任何爭議以台灣高雄地方法院為第一審管轄法院。本公司的任何聲明、條款如有未盡完善之處，將以最大誠意，依誠實信用、平等互惠原則，共商解決之道<br>
				<br>
				<b>隱私權聲明</b><br>
				香格禮坊非常重視會員<br>的隱私權且遵循「個人資料保護法」之規定，因此制訂了隱私權保護政策，您可參考下列隱私權保護政策的內容。<br>
				一、個人資料之安全
				保護會員的個人隱私是香格禮坊重要的經營理念，在未經會員同意之下，我們絕不會將會員的個人資料提供予任何與本購物網站服務無關之第三人。會員應妥善保密自己的網路密碼及個人資料，不要將任何個人資料，尤其是網路密碼提供給任何人。在使用完香格禮坊網站所提供的各項服務功能後，務必記得登出帳戶，若是與他人共享電腦或使用公共電腦，切記要關閉瀏覽器視窗。<br>
				二、個人資料的蒐集、處理、利用 香格禮坊相關網站所取得的個人資料，都僅供香格禮坊於其內部、依照原來所說明的使用目的和範圍，除非事先說明、或依照相關法律規定，否則香格禮坊不會將資料提供給第三人、或移作其他目的使用。<br>
				蒐集之目的：<br>
				蒐集之目的在於進行行銷業務、消費者、客戶管理與服務、網路購物及其他電子商務服務及與調查、統計與研究分析(法定特定目的項目編號為Ｏ四Ｏ、Ｏ九Ｏ、一四八、一五七)。香格禮坊將藉由加入會員之過程或進行交易之過程來蒐集個人資料。<br>
				蒐集之個人資料類別：<br>
				香格禮坊於網站內蒐集的個人資料包括，<br>
				(1) C001辨識個人者： 如會員之姓名、地址、電話、電子郵件等資訊。<br>
				(2) C002辨識財務者： 如信用卡或金融機構帳戶資訊。<br>
				(3) C011個人描述：例如：性別、出生年月日等。<br>
				利用期間、地區、對象及方式：<br>
				(1) 期間：會員當事人要求停止使用或停止提供服務之日為止。<br>
				(2) 地區：會員之個人資料將用於台灣地區。<br>
				(3) 利用對象及方式：會員之個人資料蒐集除用於香格禮坊之會員管理、客戶管理之檢索查詢等功能外，亦將利用於辨識身份、金流服務、物流服務、行銷廣宣等。例示如下：
				a. 以會員身份使用香格禮坊提供之各項服務時，於頁面中自動顯示會員資訊。<br>
				b. 為遂行交易行為：會員對商品或勞務為預約、下標、購買、參與贈獎等之活動或從事其他交易時，關於商品配送、勞務提供、價金給付、回覆客戶之詢問、香格禮坊對會員之詢問、相關售後服務及其他遂行交易所必要之業務。<br>
				c. 宣傳廣告或行銷等：提供會員各種電子雜誌等資訊、透過電子郵件、郵件、電話等提供與服務有關之資訊。將會員所瀏覽之內容或廣告，依客戶之個人屬性或購買紀錄、香格禮坊網站之瀏覽紀錄等項目，進行個人化作業、會員使用服務之分析、新服務之開發或既有服務之改善等。針對民調、活動、留言版等之意見，或其他服務關連事項，與會員進行聯繫。<br>
				d. 回覆客戶之詢問：針對會員透過電子郵件、郵件、、傳真、電話或其他任何直接間接連絡方式所提出之詢問進行回覆。<br>
				e. 其他業務附隨之事項：附隨於上述a至d.之利用目的而為提供服務所必要之使用。<br>
				f. 對於各別服務提供者之資訊提供：會員對服務提供者之商品或勞務為預約、下標、購買、參加贈獎活動或申請其他交易時，香格禮坊於該交易所必要之範圍內，得將會員之個人資料檔案提供予服務提供者，並由服務提供者負責管理該個人資料檔案。香格禮坊將以規約課予服務提供者依保障會員隱私權之原則處理個人資料之義務，但無法保證服務提供者會必然遵守。詳細內容，請向各別服務提供者洽詢。<br>
				g. 其他：提供個別服務時，亦可能於上述規定之目的以外，利用個人資料。此時將在該個別服務之網頁載明其要旨。<br>
				會員就個人資料之權利：<br>
				香格禮坊所蒐集個人資料之當事人，依個人資料保護法得對香格禮坊行使以下權利：<br>
				(1) 查詢或請求閱覽。<br>
				(2) 請求製給複製本。<br>
				(3) 請求補充或更正。<br>
				(4) 請求停止蒐集、處理或利用。<br>
				(5) 請求刪除。<br>
				會員如欲行使上述權利，可與香格禮坊客服連絡進行申請。<br>
				請注意！如拒絕提供加入會員所需必要之資料，將可能導致無法享受完整服務或完全無法使用該項服務。<br>
				資料安全 為保障會員的隱私及安全，香格禮坊會員帳號資料會用密碼保護。香格禮坊並盡力以合理之技術及程序，保障所有個人資料之安全。<br>
				個人資料查詢或更正的方式 <br>會員對於其個人資料，有查詢及閱覽、製給複製本、補充或更正、停止電腦處理及利用、刪除等需求時，可以與客服中心聯絡，香格禮坊將迅速進行處理。<br>
				隱私權保護政策修訂 <br>隨著市場環境的改變本公司將會不時修訂網站政策。會員如果對於本網站隱私權聲明、或與個人資料有關之相關事項有任何疑問，可以利用電子郵件通知。<br>
			</div>

			<div class="read-finish">
				<input type="radio" name="read" id="read1">
				<label for="read1">我已閱讀</label>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="js/messages.zh-tw.js" type="text/javascript"></script>
</html>

<script>
	$("input[name='terms']").on("click", function () {
		$(".terms-fancyWrap").addClass("is-show").scrollTop(0)
		$("body").addClass("is-lock")
	})

	$("input[name='read']").on("click", function () {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function () {
			$("body").removeClass("is-lock")
		});
	})

	$(".fancy-close, .fancy-closeBlock").on("click", function () {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function () {
			$("body").removeClass("is-lock")
		});
	})

	$('.twzipcode').twzipcode({
		readonly: true,
		'css': [
			'text-center',
			'text-center',
			'text-center',
    	]
	});

	$('#datepicker').datepicker({
		locale: 'zh-tw',
		format: 'yyyy/mm/dd',
	});
	$('.gj-datepicker').addClass("cell auto")
</script>