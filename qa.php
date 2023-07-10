<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-darkyellow">
	<?php include 'topmenu.php'; ?>

	<section class="qaWrap">
		<div class="head"><img src="images/qa-head.svg"></div>

		<div class="innerWrap">
			<div class="question-container">
				<ul class="qaList">
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
					<li>
						<div class="title-area flex-container">
							<div class="label">Q</div>
							<div class="title">季節/年節產品需要訂購多少才可製作?</div>
							<div class="plus"></div>
							<div class="star-line">
								<div class="tb"></div>
								<div class="lr"></div>
							</div>
						</div>
						<div class="answer-area">
							<div class="item flex-container">
								<div class="label">A</div>
								<div class="answer">皆採用低糖低脂方式製作，可以安心享用。</div>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<div class="record-pager flex-container align-center-middle">
				<a href="javascript:;" class="arrow"><img src="images/page-prev.svg"></a>
				<a href="javascript:;" class="current">1</a>
				<a href="javascript:;">2</a>
				<a href="javascript:;">3</a>
				<a href="javascript:;">4</a>
				<a href="javascript:;" class="arrow"><img src="images/page-next.svg"></a>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
	$(".qaList li").on("click", function () {
		$(this).toggleClass("is-open")
		$(".answer-area", this).slideToggle(300)
	})
</script>