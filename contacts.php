<?php $page_title = 'Контакты'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="page-header margin-no">
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
				<h1 class="tpl-h1 page-title">Контакты</h1>
			</div>
		</section>
		<section class="contacts-section">
			<div class="contacts-map">
				<div class="container">
					<div class="contacts-block wow fadeInUp">
						<div class="item wow fadeInUp" data-wow-delay="0.1s">
							<div class="item-icon">
								<i class="icon-location-big"></i>
							</div>
							<div class="item-content">
								<p>601220, Владимирская обл., <br>Собинский р-н., Ставрово пгт., <br>Октябрьская ул., д.118</p>
							</div>
						</div>
						<div class="item wow fadeInUp" data-wow-delay="0.2s">
							<div class="item-icon">
								<i class="icon-phone-big"></i>
							</div>
							<div class="item-content">
								<p>Телефон: <br>8 800 222-93-76 <br>+7 49242 5-19-85</p>
							</div>
						</div>
						<div class="item wow fadeInUp" data-wow-delay="0.3s">
							<div class="item-icon">
								<i class="icon-conversations-big"></i>
							</div>
							<div class="item-content">
								<p>E-mail: 
									<br><a href="mailto:info@snpoteplopribor.ru">info@snpoteplopribor.ru</a>
									<br><a href="mailto:info@snpoteplopribor.ru">Отправить сообщение</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="section-default-paddings">
			<div class="container">
				<div class="section-caption">
					<h3 class="tpl-h2">Реквизиты</h3>
				</div>
				<div class="row">
					<div class="col-lg-7 wow fadeInUp">
						<p class="tpl-body-1">Попытки решения проблемы существования этой сингулярности идут в нескольких направлениях: во-первых, считается, что квантовая гравитация даст описание динамики гравитационного поля, свободного от сингулярностей, во-вторых, есть мнение, что учёт квантовых эффектов в негравитационных полях может нарушить условие энергодоминантности, на котором базируется доказательство Хокинга, в-третьих, предлагаются такие модифицированные теории гравитации, в которых сингулярность не возникает, так как предельно сжатое вещество начинает расталкиваться гравитационными силами (так называемое гравитационное отталкивание), а не притягиваться друг к другу.</p>
					</div>
					<div class="col-lg-5 wow fadeInUp" data-wow-delay="0.2s">
						<div class="flex-center lg-flex-right margin-top-large lg-margin-no">
							<a href="#" target="_blank" class="document-block left-arrow requisites">
								<div class="block-content">
									<i class="icon-pdf"></i>
									<p class="tpl-body-2">Скачать реквизиты «ТЕПЛОПРИБОР»</p>
								</div>
								<div class="block-hidden-content color-white">
									<i class="icon-download"></i>
									<p class="tpl-body-2">Скачать, 500 kb</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('page-parts/dealer-section.inc.php'); ?>
<?php include('footer.php'); ?>