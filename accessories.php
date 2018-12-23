<?php $page_title = 'Комплектующие'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="page-header">
			<div class="container">
				<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="index.php">
							<span itemprop="name">Главная</span>
						</a>
						<meta itemprop="position" content="1" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="catalog.php">
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ol>
				<h1 class="tpl-h1 page-title">Комплектующие</h1>
			</div>
		</section>
		<div class="inner-page-wrapper">
			<section class="post-content">
				<div class="container">
					<div class="accessories-slider">
						<?php for ($i=0; $i <4; $i++): ?>
							<div class="slide">
								<div class="accessories-block">
									<a href="#" class="block-image">
										<img src="img/products/product.png" alt="">
									</a>
									<div class="block-content">
										<h5 class="tpl-h5 margin-bottom-normal">Термостатические регуляторы</h5>
										<div class="block-params">
											<div class="item">
												<div class="item-label">Вентиль прямой</div>
												<div class="item-value">
													<span class="type">1/2</span>
													<span class="type">3/4</span>
												</div>
											</div>
											<div class="item">
												<div class="item-label">Вентиль угловой</div>
												<div class="item-value">
													<span class="type">1/2</span>
													<span class="type">3/4</span>
												</div>
											</div>
										</div>
										<p>Автоматическое поддержание температуры в помещении, снижают расход теплоносителя.</p>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</section>
		</div>
	</div>
	<section class="section-default-bottom-padding">
		<div class="container">
			<h3 class="tpl-h3">Смотрите также</h3>
			<div class="recommendations-slider default-slide-paddings">
				<div class="slide">
					<a href="#" class="white-card wow fadeInUp" data-wow-delay="0s">
						<div class="card-image">
							<img src="img/products/bimetallic.png" alt="">
						</div>
						<div class="card-text">
							<p class="tpl-h4">Радиатор AR1-350</p>
						</div>
					</a>
				</div>
				<div class="slide">
					<a href="#" class="white-card wow fadeInUp" data-wow-delay="0.1s">
						<div class="card-image">
							<img src="img/products/aluminum.png" alt="">
						</div>
						<div class="card-text">
							<p class="tpl-h4">Радиатор BR1-500</p>
						</div>
					</a>
				</div>
				<div class="slide">
					<a href="#" class="white-card wow fadeInUp" data-wow-delay="0s">
						<div class="card-image">
							<img src="img/products/bimetallic.png" alt="">
						</div>
						<div class="card-text">
							<p class="tpl-h4">Радиатор AR1-350</p>
						</div>
					</a>
				</div>
				<div class="slide">
					<a href="#" class="white-card wow fadeInUp" data-wow-delay="0.1s">
						<div class="card-image">
							<img src="img/products/aluminum.png" alt="">
						</div>
						<div class="card-text">
							<p class="tpl-h4">Радиатор BR1-500</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php include('page-parts/dealer-section.inc.php'); ?>
	<?php include('page-parts/contacts-section.inc.php'); ?>
<?php include('footer.php'); ?>