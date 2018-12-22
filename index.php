<?php $page_title = 'Главная'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="branding-section">
			<div class="container">
				<div class="branding-inner">
					<div class="branding-content">
						<div class="section-caption wow fadeInLeft" data-wow-delay="0s">
							<h1 class="tpl-h1">Производство <br>радиаторов <br>отопления</h1>
						</div>
						<div class="branding-label wow fadeInLeft d-none d-md-block" data-wow-delay="0.1s">
							<img src="img/branding/branding-label.png" alt="">
						</div>
					</div>
					<div class="branding-image wow fadeInUp" id="parallax-viewport-branding">
						<div class="parallax-layer" data-depth="0.15">
							<img src="img/branding/radiator.png" alt="">
						</div>
					</div>
					<div class="branding-advantages">
						<ul class="branding-advantages-list">
							<li class="wow fadeInRight" data-wow-delay="0s">
								<h4 class="tpl-h4 margin-no">Дизайн</h4>
								<p class="tpl-body-1">Гармония тепла</p>
							</li>
							<li class="wow fadeInRight" data-wow-delay="0.1s">
								<h4 class="tpl-h4 margin-no">Инновации</h4>
								<p class="tpl-body-1">Алгебра тепла</p>
							</li>
							<li class="wow fadeInRight" data-wow-delay="0.2s">
								<h4 class="tpl-h4 margin-no">Качество</h4>
								<p class="tpl-body-1">Уверенность в каждой детали</p>
							</li>
						</ul>
						<div 
							class="branding-label wow fadeInUp d-md-none margin-top-large" style="padding-left: 22px;" data-wow-delay="0.3s">
							<img src="img/branding/branding-label-mobile.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-default-paddings">
			<div class="container">
				<div class="products-slider default-slide-paddings">
					<div class="slide">
						<a href="#" class="white-card wow fadeInUp" data-wow-delay="0s">
							<div class="card-image">
								<img src="img/products/bimetallic.png" alt="">
							</div>
							<div class="card-text">
								<p class="tpl-h4">Биметаллические радиаторы</p>
							</div>
						</a>
					</div>
					<div class="slide">
						<a href="#" class="white-card wow fadeInUp" data-wow-delay="0.1s">
							<div class="card-image">
								<img src="img/products/aluminum.png" alt="">
							</div>
							<div class="card-text">
								<p class="tpl-h4">Алюминиевые радиаторы</p>
							</div>
						</a>
					</div>
					<div class="slide">
						<a href="#" class="white-card wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-image">
								<img src="img/products/fittings.png" alt="">
							</div>
							<div class="card-text">
								<p class="tpl-h4">Запчасти и комплектующие</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<?php include('page-parts/video-section.inc.php') ?>
		<?php include('page-parts/innovations-section.inc.php') ?>
		<section class="recommended-section section-default-paddings">
			<div class="container">
				<div class="row align-items-center flex-column-reverse flex-lg-row">
					<div class="col-12 d-lg-none margin-top-large">
						<div class="flex-center wow fadeInUp">
							<a href="#" class="btn btn-light wide xs-fullwidth wow fadeInUp">Подробнее</a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="recommended-section-image wow fadeInUp" id="parallax-viewport-recommended">
							<div class="parallax-layer" data-depth="0.05">
								<img src="img/recommended-image.png" alt="" class="d-none d-sm-block">
								<img src="img/recommended-image-mobile.png" alt="" class="d-sm-none">
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="recommended-section-content wow fadeInUp">
							<div class="section-caption">
								<h3 class="tpl-h2">Рекомендовано</h3>
							</div>
							<p class="tpl-display-1">Продукцию «Теплоприбор» рекомендует <br class="d-none d-sm-inline">Фонд капитального ремонта <span class="d-none d-sm-inline"><br>многоквартирных домов</span> Москвы</p>
							<a href="#" class="btn btn-light wide d-none d-lg-inline-flex">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('page-parts/dealer-section.inc.php') ?>
		<?php include('page-parts/news-section.inc.php') ?>
		<?php include('page-parts/contacts-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>