<?php $page_title = 'Документы'; ?>
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
						<a itemprop="item" href="#">
							<span itemprop="name">Информация</span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="catalog.php">
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="3" />
					</li>
				</ol>
				<h1 class="tpl-h1 page-title">Информация</h1>
				<div class="mCustomScrollbar margin-bottom-normal" data-mcs-theme="dark" data-mcs-axis="x" style="width: 100%;">
					<ul class="tabs-nav">
						<li><a href="documents.php">Документы</a></li>
						<li><a href="#">Монтаж радиаторов</a></li>
						<li><a href="#">Новости</a></li>
					</ul>
				</div>
			</div>
		</section>
		<div class="inner-page-wrapper">
			<section class="post-content">
				<div class="container">
					<div class="documents-list">
						<?php for ($i=0; $i < 8; $i++): ?>
							<div class="item wow fadeInUp" data-wow-delay="<?= rand(0,4) / 10 ?>s">
								<a href="#" target="_blank" class="document-block">
									<div class="block-content">
										<i class="icon-pdf"></i>
										<p class="tpl-body-2">Технический паспорт BR1-500</p>
									</div>
									<div class="block-hidden-content color-white">
										<i class="icon-download"></i>
										<p class="tpl-body-2">Скачать, 500 kb</p>
									</div>
								</a>
							</div>
						<?php endfor; ?>
					</div>
					<div class="flex-center wow fadeInUp">
						<a href="#" target="_blank" class="btn btn-light xs-fullwidth">Скачать все <span class="d-none d-sm-inline"> одним </span> архивом</a>
					</div>
				</div>
			</section>
		</div>
	</div>
	<?php include('page-parts/dealer-section.inc.php'); ?>
<?php include('footer.php'); ?>