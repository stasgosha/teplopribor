<section class="section-default-top-padding">
	<div class="container">
		<div class="news-section-header">
			<div class="item wow fadeInLeft">
				<div class="section-caption">
					<h3 class="tpl-h2">Новости</h3>
				</div>
			</div>
			<div class="item wow fadeInRight d-none d-sm-block" data-wow-delay="0.2s">
				<a href="#" class="go-to-link">
					<i class="icon-newspaper"></i>
					<span>Архив новостей</span>
					<i class="icon-arrow-right"></i>
				</a>
			</div>
		</div>
		<div class="row">
			<?php for ($i=0; $i < 4; $i++): ?>
				<div class="col-sm-6 col-lg-3">
					<div class="news-block wow fadeInUp" data-wow-delay="<?= rand(0, 4) / 10 ?>s">
						<time datetime="2018-01-20 19:00" class="published tpl-note">16 октября 2018</time>
						<a href="#" class="caption tpl-h3">Заголовок новости возможно пару строк</a>
						<div class="block-content">
							<p>С математической точки зрения гравитационная сингулярность является множеством особых точек решения уравнений</p>
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>
		<div class="d-sm-none wow fadeInUp">
			<a href="#" class="go-to-link">
				<i class="icon-newspaper"></i>
				<span>Архив новостей</span>
				<i class="icon-arrow-right"></i>
			</a>
		</div>
	</div>
</section>