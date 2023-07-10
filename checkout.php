<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="stepWrap">
		<img src="images/step-2.svg" class="show-for-large">
		<img src="images/step-2-mobile.svg" class="hide-for-large">
	</div>

	<section class="checkoutWrap">
		<section>
			<div class="head"><img src="images/pay-head.svg" class="show-for-large"><img src="images/pay-head-mobile.svg" class="hide-for-large"></div>

			<ul class="payList">
				<li>
					<input type="radio" name="take" id="take1">
					<label for="take1">宅配</label>
				</li>
				<li>
					<input type="radio" name="take" id="take2">
					<label for="take2">門市取貨</label>
				</li>
			</ul>
		</section>

		<section>
			<div class="head"><img src="images/take-head.svg" class="show-for-large"><img src="images/take-head-mobile.svg" class="hide-for-large"></div>

			<ul class="payList">
				<li>
					<input type="radio" name="pay" id="pay1">
					<label for="pay1">ATM帳戶轉帳</label>
				</li>
				<li>
					<input type="radio" name="pay" id="pay2">
					<label for="pay2">貨到付款</label>
				</li>
			</ul>
		</section>

		<section>
			<div class="head"><img src="images/man-head.svg" class="show-for-large"><img src="images/man-head-mobile.svg" class="hide-for-large"></div>

			<ul class="ordermanList">
				<li class="grid-x align-top">
					<div class="title cell shrink">訂購人</div>
					<input class="cell auto" type="text" name="order-name" id="" value="陳嘉明">
				</li>
				<li class="grid-x align-top">
					<div class="title cell shrink">電子信箱</div>
					<input class="cell auto" type="text" name="order-mail" id="" value="chaweshan@gmail.com">
				</li>
				<li class="grid-x align-top">
					<div class="title cell shrink">手機號碼</div>
					<input class="cell auto" type="text" name="order-phone" id="" value="0928245697">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">聯絡地址</div>

					<div class="address-area cell large-auto">
						<div class="city-area twzipcode order-address">
							<div class="city" data-role="county"></div>
							<div class="area" data-role="district"></div>
							<div class="code" data-role="zipcode"></div>
						</div>
						<input type="text" name="order-add" class="add" value="中山路一段51號4樓">
					</div>
				</li>
			</ul>
		</section>

		<section>
			<div class="reciver-head-area">
				<div class="head"><img src="images/reciver-head.svg" class="show-for-large"><img src="images/reciver-head-mobile.svg" class="hide-for-large"></div>

				<ul class="reciver-chooseList grid-x align-middle">
					<li class="cell shrink">
						<input type="radio" name="same" id="same1" flag="0" onclick="onClickRadioStyle(this)">
						<label for="same1">同訂購人</label>
					</li>
					<li class="cell shrink">
						<input type="radio" name="same" id="same3" flag="0" onclick="onClickRadioStyle(this)">
						<label for="same3">新增至常見收件資料</label>
					</li>
					<li class="cell shrink">
						<input type="radio" name="same" id="same2" flag="0" onclick="onClickRadioStyle(this)">
						<label for="same2">更改其他收件資料</label>
					</li>
				</ul>
			</div>

			<ul class="ordermanList">
				<li class="grid-x align-top">
					<div class="title cell shrink">收件人</div>
					<input class="cell auto" type="text" name="reciver-name" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell shrink">電子信箱</div>
					<input class="cell auto" type="text" name="reciver-mail" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell shrink">電話號碼</div>
					<input class="cell auto" type="text" name="reciver-phonenumber" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell shrink">手機號碼</div>
					<input class="cell auto" type="text" name="reciver-phone" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">聯絡地址</div>

					<div class="address-area cell large-auto">
						<div class="city-area twzipcode reciver-address">
							<div class="city" data-role="county"></div>
							<div class="area" data-role="district"></div>
							<div class="code" data-role="zipcode"></div>
						</div>
						<input type="text" name="reciver-add" class="add" value="中山路一段51號4樓">
					</div>
				</li>
				<li class="grid-x align-bottom">
					<div class="title cell shrink">備註</div>
					<textarea class="cell auto"></textarea>
				</li>
			</ul>
		</section>

		<!-- <section>
			<div class="head"><img src="images/invoice-head.svg" class="show-for-large"><img src="images/invoice-head-mobile.svg" class="hide-for-large"></div>

			<ul class="payList">
				<li>
					<input type="radio" name="invoice" id="invoice1">
					<label for="invoice1">同收件人</label>
				</li>
				<li>
					<input type="radio" name="invoice" id="invoice2">
					<label for="invoice2">
						另寄地址(+28元掛號費)
					</label>
					<div class="invoice-area-item">
						<span class="invoice-area">
							<span class="title">收件人</span>
							<input type="text" name="" id="invoice-name" size="1" value="林很好">
						</span>
						<span class="invoice-area">
							<span class="title">地址</span>
							<input type="text" name="" id="invoice-address" size="30" value="558南投縣鹿谷鄉竹林村田頭巷123-5號">
						</span>
					</div>
				</li>
			</ul>
		</section> -->

		<section>
			<div class="head"><img src="images/invoice-head.svg" class="show-for-large"><img src="images/invoice-head-mobile.svg" class="hide-for-large"></div>

			<ul class="payList">
				<li>
					<input type="radio" name="invoice" id="invoice1">
					<label for="invoice1">會員載具</label>
				</li>
				<li>
					<input type="radio" name="invoice" id="invoice2">
					<label for="invoice2">手機條碼載具</label>
					<div class="invoice-area-item">
						<span class="invoice-area">
							<input type="text" name="" id="invoice-number" size="30" value="">
						</span>
					</div>
				</li>
				<li>
					<input type="radio" name="invoice" id="invoice3">
					<label for="invoice3">捐贈發票</label>
				</li>
			</ul>

			<ul class="ordermanList">
				<li class="grid-x align-top">
					<div class="title cell shrink">公司抬頭</div>
					<input class="cell auto" type="text" name="company-title" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell shrink">統一編號</div>
					<input class="cell auto" type="text" name="invoice" id="" value="">
				</li>
			</ul>
		</section>

		<section>
			<div class="head"><img src="images/discount-head.svg" class="show-for-large"><img src="images/discount-head-mobile.svg" class="hide-for-large"></div>

			<div class="discount-area grid-x align-middle">
				<input type="text" name="" id="" class="cell auto">
				<div class="btn cell shrink">
					<img src="images/discount-btn.svg" class="show-for-large">
					<img src="images/discount-btn-mobile.svg" class="hide-for-large">
				</div>
			</div>
		</section>

		<section>
			<div class="head"><img src="images/deliverytime-head.svg" class="show-for-large"><img src="images/deliverytime-head-mobile.svg" class="hide-for-large"></div>

			<div class="deliverytime-area grid-x">
				<div class="info-area cell large-shrink">
					<div class="item">
						<div class="title">送達時段</div>
						<ul class="payList go grid-x">
							<li>
								<input type="radio" name="delivery" id="delivery1">
								<label for="delivery1">13點前</label>
							</li>
							<li>
								<input type="radio" name="delivery" id="delivery2">
								<label for="delivery2">14-18點</label>
							</li>
							<li>
								<input type="radio" name="delivery" id="delivery3">
								<label for="delivery3">不指定</label>
							</li>
						</ul>
					</div>
					<div class="item">
						<div class="title">備註</div>
						<div class="content">
							*出貨日期+1天為「希望送達日」，<br class="show-for-large">
							實際配送狀況，仍須以該區配送量與行程為主。<br>
							<br>
							*春節或中秋節前夕為物流繁盛時期，將無法保證送達日與時段。
						</div>
					</div>
				</div>
				<div class="date-area cell large-shrink">
					<div class="item-area flex-container align-middle align-center">
						<div class="icon"><img src="images/date-icon.svg"></div>
						<div class="check">請選擇 出貨日期</div>
					</div>
					<div class="date-style">
						<div id="date"></div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<section class="checkout-tableWrap">
		<div class="flag"><img src="images/detail-head.svg" class="show-for-large"><img src="images/detail-head-mobile.svg" class="hide-for-large"></div>

		<ul class="head-area">
			<li>品項</li>
			<li>規格</li>
			<li>數量</li>
			<li>金額</li>
		</ul>

		<div class="body-area">
			<section class="plist">
				<section>
					<div class="temperature">
						<div class="tb"></div>
						<div class="lr"></div>
						常溫
					</div>
					<div class="item">
						<div class="pic-area grid-x align-middle">
							<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
							<div class="title cell auto">蛋黃酥禮盒</div>
						</div>

						<div class="price">10入</div>

						<div class="checkout-num">1</div>

						<div class="subtotal">NT.240</div>
					</div>
				</section>
				<section>
					<div class="temperature">
						<div class="tb"></div>
						<div class="lr"></div>
						冷凍
					</div>
					<div class="item">
						<div class="pic-area grid-x align-middle">
							<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
							<div class="title cell auto">蛋黃酥禮盒</div>
						</div>

						<div class="price">10入</div>

						<div class="checkout-num">1</div>

						<div class="subtotal">NT.240</div>
					</div>
					<div class="item">
						<div class="pic-area grid-x align-middle">
							<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
							<div class="title cell auto">蛋黃酥禮盒</div>
						</div>

						<div class="price">10入</div>

						<div class="checkout-num">1</div>

						<div class="subtotal">NT.240</div>
					</div>
				</section>
			</section>
		</div>
	</section>

	<section class="deliveryWrap">
		<div class="head"><img src="images/delivery-head.svg" class="show-for-large"><img src="images/delivery-head-mobile.svg" class="hide-for-large"></div>

		<div class="delivery-area flex-container align-justify align-middle">
			<div class="title">黑貓本島宅配</div>
			<div class="price">NT.150</div>
		</div>

		<ul class="total-area">
			<li class="grid-x align-right">
				<div class="title cell shrink">小計</div>
				<div class="content cell shrink">$1,860</div>
			</li>
			<li class="grid-x align-right">
				<div class="title cell shrink">運費</div>
				<div class="content cell shrink">$150</div>
			</li>
			<li class="grid-x align-right">
				<div class="title cell shrink">滿千折百</div>
				<div class="content cell shrink">-$100</div>
			</li>
			<!-- <li class="grid-x align-right">
				<div class="title cell shrink">總計</div>
				<div class="content is-big cell shrink">$1,910</div>
			</li> -->
		</ul>

		<div class="grandtotal grid-x align-right">
				<div class="title cell shrink">總計</div>
				<div class="content cell shrink">$1,910</div>
		</div>

		<div class="send"><a href="finish.php"><img src="images/send-btn.svg"></a></div>

		<input type="hidden" name="date">
	</section>

	<div class="m-fancyWrap recipients-fancyWrap has-scrollbar">
		<div class="fancy-closeBlock"></div>
		<!-- <div class="fancy-close"><img src="images/fancy-close.svg"></div> -->

		<!-- code here -->
		<div class="recipients-fancyContainer">
			<div class="info-sliderWrap">
				<div class="close"><img src="images/ref-close.svg"></div>

				<ul class="infoList">
					<li>
						<div class="top">
							<div class="box"></div>
						</div>
						<div class="bottom">
							<div class="box"></div>
						</div>
						<div class="number">
							<div class="text">常用收件1</div>
							<div class="bg"><img src="images/ref-title.svg"></div>
						</div>
						<div class="item-area grid-x">
							<div class="item cell auto grid-x align-middle">
								<div class="title cell shrink">收件人姓名</div>
								<div class="content cell auto" name="fancy-name">陳嘉明</div>
							</div>
						</div>
						<div class="item-area grid-x">
							<div class="item cell auto grid-x align-middle">
								<div class="title cell shrink">電話號碼</div>
								<div class="content cell auto" name="fancy-phonenumber">0223455564</div>
							</div>
							<div class="item cell auto grid-x">
								<div class="title cell shrink">手機號碼</div>
								<div class="content cell auto" name="fancy-phone">0928574159</div>
							</div>
						</div>
						<div class="item grid-x align-top">
							<div class="title cell shrink">收件人地址</div>
							<div class="address-area cell large-auto">
								<div class="city-area">
									<span name="fancy-city">新北市</span>
									<span name="fancy-area">萬里區</span>
									<span name="fancy-code">207</span>
								</div>
								<div class="add" name="fancy-add">中山路一段65號4樓</div>
							</div>
						</div>
						
						<div class="btn"><img src="images/ref-btn.svg" class="show-for-large"><img src="images/ref-btn-mobile.svg" class="hide-for-large"></div>
					</li>
					<li>
						<div class="top">
							<div class="box"></div>
						</div>
						<div class="bottom">
							<div class="box"></div>
						</div>
						<div class="number">
							<div class="text">常用收件2</div>
							<div class="bg"><img src="images/ref-title.svg"></div>
						</div>
						<div class="item-area grid-x">
							<div class="item cell auto grid-x align-middle">
								<div class="title cell shrink">收件人姓名</div>
								<div class="content cell auto" name="fancy-name">陳嘉明</div>
							</div>
						</div>
						<div class="item-area grid-x">
							<div class="item cell auto grid-x align-middle">
								<div class="title cell shrink">電話號碼</div>
								<div class="content cell auto" name="fancy-phonenumber">0223455564</div>
							</div>
							<div class="item cell auto grid-x">
								<div class="title cell shrink">手機號碼</div>
								<div class="content cell auto" name="fancy-phone">0928574159</div>
							</div>
						</div>
						<div class="item grid-x align-top">
							<div class="title cell shrink">收件人地址</div>
							<div class="address-area cell large-auto">
								<div class="city-area">
									<span name="fancy-city">新北市</span>
									<span name="fancy-area">萬里區</span>
									<span name="fancy-code">207</span>
								</div>
								<div class="add" name="fancy-add">中山路一段65號4樓</div>
							</div>
						</div>
						<div class="btn"><img src="images/ref-btn.svg" class="show-for-large"><img src="images/ref-btn-mobile.svg" class="hide-for-large"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="m-fancyWrap remind-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<!-- code here -->
		<div class="remind-fancyContainer">
				<div class="close"><img src="images/remind-close.svg"></div>
				<div class="title">新增成功！</div>
		</div>
	</div>

	<div class="m-fancyWrap remind-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<!-- code here -->
		<div class="remind-fancyContainer">
				<div class="close"><img src="images/remind-close.svg"></div>
				<div class="title">使用成功！</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
	var datesForDisable = ['2023-06-22', '2023-06-23', '2023-06-24'];
	$('#date').datepicker({
			minDate: "+3d",
   		maxDate: "+2m",
			dateFormat: "yy-mm-dd",
			dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
			monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],	
			beforeShowDay: function(date){
				//format date in datepicker to yy-mm-dd
				var new_date = $.datepicker.formatDate('yy-mm-dd', date);
				//disable dates
				return [ datesForDisable.indexOf(new_date) == -1 ]
			}
    }).on("change", function(e) {
    	var _date = $(this).val();
    	$("input[name='date']").val(_date)
    })

	$("#same1").on("click", function () {
		$("[name='reciver-name']").val( $("[name='order-name']").val() )
		$("[name='reciver-mail']").val( $("[name='order-mail']").val() )
		$("[name='reciver-phone']").val( $("[name='order-phone']").val() )
		$("[name='reciver-add']").val( $("[name='order-add']").val() )

		$(".order-address").twzipcode('get', (county, district, zipcode) => {
	    $(".reciver-address").twzipcode('set', {
        'county': county,
        'district': district,
        'zipcode': zipcode,
	    });
		});
	})





	$("#same2").on("click", function () {
		$(".recipients-fancyWrap").addClass("is-show").scrollTop(0)
		$("body").addClass("is-lock")
	})

	// $("#same3").on("click", function () {
	// 	$(".remind-fancyWrap").addClass("is-show").scrollTop(0)
	// 	$("body").addClass("is-lock")
	// })


	$(".recipients-fancyContainer .btn").on("click", function () {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function () {
			$("body").removeClass("is-lock")
		});

		$(".infoList li").removeClass("is-selected")
		$(this).closest("li").addClass("is-selected")


		$("[name='reciver-name']").val( $(".infoList li.is-selected [name='fancy-name']").text() )
		$("[name='reciver-phonenumber']").val( $(".infoList li.is-selected [name='fancy-phonenumber']").text() )
		$("[name='reciver-phone']").val( $(".infoList li.is-selected [name='fancy-phone']").text() )
		$("[name='reciver-add']").val( $(".infoList li.is-selected [name='fancy-add']").text() )

    $(".reciver-address").twzipcode('set', {
      'county': $(".infoList li.is-selected [name='fancy-city']").text(),
      'district': $(".infoList li.is-selected [name='fancy-area']").text(),
      'zipcode': $(".infoList li.is-selected [name='fancy-code']").text(),
    });
	})

	$(".recipients-fancyContainer .close").on("click", function () {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function () {
			$("body").removeClass("is-lock")
		});
	})

	$(".remind-fancyContainer .close").on("click", function () {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function () {
			$("body").removeClass("is-lock")
		});
	})



function onClickRadioStyle(obj){
	var group = $(obj).attr('name');//获取当前点击对象的name，作为组的名称

	if($(obj).attr('flag')==1){//flag为1表示当前选中
		$(obj).attr('flag',0);
		$(obj).prop('checked', false);
		$(obj).data('checked', false);
	}else if($(obj).attr('flag')==0){   //flag为0表示当前未选中 
		$(obj).attr('flag',1);
		$(obj).attr("checked","checked");  
	}

	//将其它未选中的flag置为0
	$("input[name='"+group+"']").not("input[name='"+group+"']:checked").each(function(){
		$(this).attr('flag',0);
	});     
}


	$('.twzipcode').twzipcode({
		readonly: true,
		'css': [
			'text-center',
			'text-center',
			'text-center',
    ]
	});
</script>