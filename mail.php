<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '香格禮坊');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->AddAddress('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->Subject = "香格禮坊 – 訂單完成信";

	$phpmailer->AddEmbeddedImage('images/mail-logo.png', 'logo');

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div style='text-align: center;font-size: 22px;display: flex;'><div style='display:inline-block;padding-right: 20px;'><img src='cid:logo' width='90'></div><div style='display:inline-block;margin-top: 20px;'>香格禮坊 – 訂單完成信</div></div> <br>"

	."<div>"
		."親愛的XXX顧客，您好：<br>"
		."感謝您對香格禮坊的支持並承蒙訂購，以下為您此次的訂購明細，若有問題則請依訂單編號向我們查詢，謝謝您！<br>"
		."香格禮坊仍保有決定是否接受訂單及出貨與否之權利，付款以及出貨通知信，將以E-mail方式通知您！<br>"
	."</div> <br>"

	."<div>"
		."<div style='display: flex;text-align: center;'>"
		."<div style='width: 30%'>品項</div>"
		."<div style='width: 30%'>規格</div>"
		."<div style='width: 10%'>數量</div>"
		."<div style='width: 30%'>金額</div>"
	."</div>"


	."<div>訂購明細</div>"
	."<div style='margin: 10px 0 15px;border-bottom: 1px dashed #a9a9a9;'></div>"

	."<div>"
		."<div style='background: #f6f6f6;border-top: 1px solid #000;border-bottom: 1px solid #000;padding: 4px 4px;'>常溫</div>"
		."<ul style='padding: 10px 0;margin: 0;'>"
			."<li style='display: flex;margin-left: 0;text-align: center;'>
				<div style='width: 30%'>蛋黃酥</div>
				<div style='width: 30%'>3入</div>
				<div style='width: 10%'>4</div>
				<div style='width: 30%'>NT.240</div>
			</li>"
			."<li style='display: flex;margin-left: 0;text-align: center;'>
				<div style='width: 30%'>蛋黃酥</div>
				<div style='width: 30%'>6入</div>
				<div style='width: 10%'>4</div>
				<div style='width: 30%'>NT.300</div>
			</li>"
		."</ul>"
	."</div>"

	."<div>"
		."<div style='background: #f6f6f6;border-top: 1px solid #000;border-bottom: 1px solid #000;padding: 4px 4px;'>冷藏</div>"
		."<ul style='border-bottom: 1px solid #000;padding: 10px 0;margin: 0;'>"
			."<li style='display: flex;margin-left: 0;text-align: center;'>
				<div style='width: 30%'>蛋黃酥</div>
				<div style='width: 30%'>3入</div>
				<div style='width: 10%'>4</div>
				<div style='width: 30%'>NT.240</div>
			</li>"
			."<li style='display: flex;margin-left: 0;text-align: center;'>
				<div style='width: 30%'>蛋黃酥</div>
				<div style='width: 30%'>6入</div>
				<div style='width: 10%'>4</div>
				<div style='width: 30%'>NT.300</div>
			</li>"
		."</ul>"
	."</div>"

	."<div style='text-align: right;line-height: 1.5;margin-top: 10px;'>"
	."<div>訂單金額 $<span style='font-size: 20px;'>3600</span></div>"
	."<div>運費 $<span style='font-size: 20px;'>150</span></div>"
	."<div>折價券 -$<span style='font-size: 20px;'>150</span></div>"
	."<div style='margin-top: 10px;'>總計 $<span style='font-size: 20px;'>3600</span></div>"
	."</div>"

	."</div>"


	."<div>"
		."訂單編號： <br>"
		."配送方式：黑貓宅配 <br>"
		."付款方式： <br>"
		."收件人：古** <br>"
		."地址：台中市*** <br>"
		."總金額： <br>"
		."*明細請至網站「<a href='https://shianger.com.tw/' target='_blank'>會員專區-訂單查詢</a>」進行查詢。 <br>"
	."</div> <br>"



	."<div>"
		."<div>溫馨提醒：</div>"
		."<ul style='margin-top: 0; margin-bottom: 0;padding-left: 20px;'>"
			."1.　黑貓常溫宅配目前當日出貨、順利則是隔天送達(台灣地區)；離島配送所需2-3天工作天，實際狀況以航班動態為主。實際配送狀況，仍須以該區物流配送況為主，若有延遲，還請見諒! **我們會依您選擇的出貨日期出貨，出貨日期不等於送達日期。 <br>"
			."2.　若年節檔期期間(如過年或中秋節)，宅配無法保證送達日與時段，請保留1-3天的收貨彈性，若有延遲到貨，請見諒。 <br>"
			."3.　若使用優惠券，取消訂單後將無法另行補發。 <br>"
		."</ul>"
	."</div> <br>"



	."<div>"
	."▼香格禮坊網路商店首頁https://shianger.com.tw/ <br><br>"
	."▼香格禮坊最新資訊FB粉絲專業https://www.facebook.com/shianger1992 <br><br>"
	."▼香格禮坊官方LINE@<span style='color:red'>LINE主頁搜尋 @4587j 或</span> https://goo.gl/j3GtNv  <br>"
	."</div> <br>"


	."<div>"
	."任何問題，歡迎透過FB/LINE與我們聯繫(週一至週五，10:00~18:00 例假日休息)，或是直接來電04-22056608。 <br>"
	."**此為系統自動發送，請勿直接回覆 <br>"
	."</div> <br>"


	."<div>"
	."再次感謝，並期盼您的再次光臨。"
	."</div>"


	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '香格禮坊');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->AddAddress('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->Subject = "香格禮坊 – 訂單取消信";

	$phpmailer->AddEmbeddedImage('images/mail-logo.png', 'logo');

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div style='text-align: center;font-size: 22px;display: flex;'><div style='display:inline-block;padding-right: 20px;'><img src='cid:logo' width='90'></div><div style='display:inline-block;margin-top: 20px;'>香格禮坊 – 訂單取消信</div></div> <br>"

	."<div>"
		."XXX您好<br>"
		."非常感謝您到香格禮坊網路商店訂購禮盒!<br>"
		."下列訂單編號因您付款未完成或依您的電話/訊息指示而取消。<br>"
	."</div> <br>"


	."<div>"
		."付款方式： <br>"
		."訂單編號： <br>"
	."</div> <br>"


	."<div>"
	."任何問題，歡迎透過FB/LINE與我們聯繫(週一至週五，10:00~18:00 例假日休息)，或是直接來電04-22056608。 <br>"
	."</div> <br><br>"


	."<div>"
	."期盼您的再次光臨，希望很快有機會再為您服務。"
	."</div>"


	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '香格禮坊');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->AddAddress('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->Subject = "香格禮坊 – 付款成功信";

	$phpmailer->AddEmbeddedImage('images/mail-logo.png', 'logo');

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div style='text-align: center;font-size: 22px;display: flex;'><div style='display:inline-block;padding-right: 20px;'><img src='cid:logo' width='90'></div><div style='display:inline-block;margin-top: 20px;'>香格禮坊 – 付款成功信</div></div> <br>"

	."<div>"
		."親愛的 古夢筑 顧客，您好： <br>"
		."<div style='color:#80292D;'>"
			."已收到您的訂單編號XXXXX <br>"
			."付款成功，非常感謝您的訂購。 <br>"
			."我們將會安排您選擇的出貨日期出貨，謝謝！ <br>"
		."</div>"
	."</div> <br>"


	."<div>"
		."*明細請至網站「<a href='https://shianger.com.tw/' target='_blank'>會員專區-訂單查詢</a>」進行查詢。 <br>"
		."*糕餅皆為手工製作，若遇到原物料供應或臨時的短缺問題，會盡早告知，香格禮坊仍保有決定是否接受訂單及出貨與否之權利。 <br>"
	."</div>"


	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '香格禮坊');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->AddAddress('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->Subject = "香格禮坊 – 出貨通知信";

	$phpmailer->AddEmbeddedImage('images/mail-logo.png', 'logo');

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div style='text-align: center;font-size: 22px;display: flex;'><div style='display:inline-block;padding-right: 20px;'><img src='cid:logo' width='90'></div><div style='display:inline-block;margin-top: 20px;'>香格禮坊 – 出貨通知信</div></div> <br>"

	."<div>"
		."XXX 您好， <br>"
	."</div> <br>"


	."<div>"
		."非常感謝您於香格禮坊網路商店訂購禮盒! <br>"
	."</div> <br>"


	."<div>"
		."您所訂購的禮盒已出貨給黑貓宅急便公司，將會盡快於隔日進行配送到您所填寫的收件地址 <br>"
		."訂單編號： <br>"
		."宅配單編號： <br>"
	."</div> <br>"


	."<div>"
		."宅配狀況查詢： <br>"
		."<a href='https://www.t-cat.com.tw/Inquire/Trace.aspx' target='_blank'>https://www.t-cat.com.tw/Inquire/Trace.aspx</a> <br>"
	."</div> <br>"


	."<div>"
		."<span style='color:red;'>(訂購明細)</span> <br>"
		."<a href='https://shianger.com.tw/' target='_blank'>訂購明細連結（會員中心）</a> <br>"
	."</div> <br>"



	."<div>"
		."<div>溫馨提醒：</div>"
		."<ul style='margin-top: 0; margin-bottom: 0;padding-left: 20px;'>"
			."1.　黑貓常溫宅配目前當日出貨、順利則是隔天送達(台灣地區)；離島配送所需2-3天工作天，實際狀況以航班動態為主。實際配送狀況，仍須以該區物流配送況為主，若有延遲，還請見諒! **我們會依您選擇的出貨日期出貨，出貨日期不等於送達日期。 <br>"
			."2.　若年節檔期期間(如過年或中秋節)，宅配無法保證送達日與時段，請保留1-3天的收貨彈性，若有延遲到貨，請見諒。 <br>"
			."3.　若使用優惠券，取消訂單後將無法另行補發。 <br>"
		."</ul>"
	."</div> <br>"



	."<div>"
	."▼香格禮坊網路商店首頁https://shianger.com.tw/ <br><br>"
	."▼香格禮坊最新資訊FB粉絲專業https://www.facebook.com/shianger1992 <br><br>"
	."▼香格禮坊官方LINE@<span style='color:red'>LINE主頁搜尋 @4587j 或</span> <a href='https://goo.gl/j3GtNv' target='_blank'>https://goo.gl/j3GtNv</a>  <br>"
	."</div> <br>"


	."<div>"
	."任何問題，歡迎透過FB/LINE與我們聯繫(週一至週五，10:00~18:00 例假日休息)，或是直接來電04-22056608。 <br>"
	."**此為系統自動發送，請勿直接回覆 <br>"
	."</div> <br>"
	

	."<div>"
	."再次感謝，並期盼您的再次光臨。"
	."</div>"



	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '香格禮坊');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->AddAddress('maysuregun@gmail.com', '香格禮坊');

	$phpmailer->Subject = "香格禮坊 – 催款通知信";

	$phpmailer->AddEmbeddedImage('images/mail-logo.png', 'logo');

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div style='text-align: center;font-size: 22px;display: flex;'><div style='display:inline-block;padding-right: 20px;'><img src='cid:logo' width='90'></div><div style='display:inline-block;margin-top: 20px;'>香格禮坊 – 催款通知信</div></div> <br>"

	."<div>"
		."XXX 您好： <br><br>"
		."感謝您於香格禮坊網路商店訂購禮盒! <br><br>"
		."至今尚未收到您的款項, 麻煩請撥冗時間進行付款, 以免訂單逾期將作取消。<br><br>"
		."感謝您！ <br><br>"
	."</div>"


	."<div>"
		."訂付款方式： <br>"
		."訂單編號： <br>"
	."</div> <br>"


	."<div>"
		."*請至訂購明細 登入會員中心點選刷卡作業<br>"
		."*若為虛擬帳號付款，請至信箱確認匯款資訊<br>"
	."</div> <br>"


	."<div>"
		."<a href='https://shianger.com.tw/' target='_blank'>訂購明細連結</a> <br>"
	."</div> <br>"


	."<div>"
	."任何問題，歡迎透過FB/LINE與我們聯繫(週一至週五，10:00~18:00 例假日休息)，或是直接來電04-22056608。 <br><br>"
	."**此為系統自動發送，請勿直接回覆 <br>"
	."</div> "
	

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>