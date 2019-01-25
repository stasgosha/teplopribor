<?php $page_title = 'Где купить?'; ?>
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
				<h1 class="tpl-h1 page-title">Где купить?</h1>
			</div>
		</section>
		<div class="inner-page-wrapper">
			<section class="post-content">
				<div class="container">
					<div class="where-buy-map-block">
						<form action="#" class="where-buy-form form">
							<div class="form-row">
								<div class="select">
									<select>
										<option value="1">Москва и область</option>
										<option value="2">Пункт 2</option>
										<option value="3">Пункт 3</option>
										<option value="4">Пункт 4</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="checkbox">
									<input type="checkbox" id="wholesale" checked>
									<label for="wholesale">Оптовые продажи</label>
								</div>
								<div class="checkbox">
									<input type="checkbox" id="retail">
									<label for="retail">Розничные продажи</label>
								</div>
							</div>
						</form>
						<div class="where-buy-map" data-wow-delay="0.2s">
							<div class="parallax-viewport-where-buy">
								<div class="parallax-layer" data-depth="0.15">
									<img src="img/russia.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<h3 class="tpl-h3 margin-bottom-huge">Москва и <br>московская область</h3>
					<div class="where-buy-list">
						<?php for ($i=0; $i < 4; $i++): ?> 
							<div class="item wow fadeInUp" data-wow-delay="<?= rand(0,3) / 10 ?>s">
								<div class="where-buy-block">
									<div class="block-header">
										<div class="block-logo">
											<img src="img/no-logo.png" alt="">
										</div>
										<div class="block-header-content">
											<h5 class="tpl-h5 margin-no sm-margin-bottom-small">ООО «ИНТЕРМА»</h5>
											<p class="tpl-body-1 d-none d-sm-block">Продажи: <span class="margin-left-normal"></span><span class="type">Оптовые</span> <span class="type">Розничные</span></p>
										</div>
									</div>
									<div class="block-content">
										<p class="tpl-body-1 d-sm-none">Продажи: <br><span class="type">Оптовые</span> <span class="type">Розничные</span></p>
										<p>Адрес: г. Москва, ул. Вольная 39, стр. 8 
											<br>Тел.: <a href="tel:+74957807000" class="tpl-text-link no-decoration">+7 (495) 780-70-00</a>, <a href="tel:+74957807492" class="tpl-text-link no-decoration">+7 (495) 780-74-92</a> 
											<br>E-mail: <a href="mailto:info@interma.ru" target="_blank" class="tpl-text-link no-decoration">info@interma.ru</a>
											<br>Веб-сайт: <a href="http://interma.ru" target="_blank" class="tpl-text-link no-decoration">www.interma.ru</a>
										</p>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</section>
		</div>
	</div>
	<?php include('page-parts/dealer-section.inc.php'); ?>
	<?php include('page-parts/contacts-section.inc.php'); ?>
<?php include('footer.php'); ?>