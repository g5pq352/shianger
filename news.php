<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="newsWrap grid-x">
		<!-- <div class="deco show-for-large"><img src="images/news-deco.svg"></div> -->

		<div class="innerWrap">
			<div class="head"><img src="images/news-head.svg"></div>

			<ul class="newsList">
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
				<li>
					<div class="date cell large-shrink hide-for-large">2022.05.23</div>
					<a href="news_detail.php">
						<div class="item grid-x align-middle">
							<div class="dot-area">
								<div class="tb"></div>
								<div class="lr"></div>
								<div class="dot-l"></div>
								<div class="dot-r"></div>
							</div>
								<div class="date cell large-shrink show-for-large">2022.05.23</div>
								<div class="title cell large-auto">太陽餅文化節 10/15.16 買一送一在台中市政府喔~!</div>
						</div>
					</a>
				</li>
			</ul>

			<div class="record-pager flex-container align-center-middle">
				<a href="javascript:;" class="arrow"><img src="images/page-prev.svg"></a>
				<a href="javascript:;" class="current">1</a>
				<a href="javascript:;">2</a>
				<a href="javascript:;">3</a>
				<a href="javascript:;">4</a>
				<a href="javascript:;" class="arrow"><img src="images/page-next.svg"></a>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
	class RyderMarquee {
		constructor(el, direct) {
			this.hero = $(el).parent().get(0)
			this.wrapper = el
			this.delta = 0
		    this.transform = 0
		    this.step = 0.5
		    this.direct = direct % 2

		    if (this.direct == 1){
		    	this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect().width / 2}px, 0, 0)`;
		    	this.transform = -this.wrapper.getBoundingClientRect().width / 2
		    }
		}

		animate() {
			this.transform += this.step

			if (this.direct == 1) {
				if (this.transform > 0) {
					this.transform = -this.wrapper.getBoundingClientRect().width / 2;
				}
				this.wrapper.style.transform = `translate3d(${this.transform}px, 0, 0)`;
			} else {
				if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
					this.transform = 0;
				}
				this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
			}
		}

		render() {
			this.scrollY = $(window).scrollTop()

			const bounding = this.hero.getBoundingClientRect();
			const distance = (window.innerHeight + this.scrollY) - (bounding.top + this.scrollY);
			const percentage = distance / ((window.innerHeight + bounding.height) / 100);

			if (percentage > 0 && percentage < 100) {
				this.animate();
			}
		}

		create() {
			gsap.ticker.add(this.render.bind(this));
		}
	}



	$(".marquee").each(function (i, el) {
		var $copy = $(el).contents().clone()
		$(el).append($copy)

		var ryderMarquee = new RyderMarquee(el, i).create()
	})
</script>