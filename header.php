<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Теплоприбор</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="container">
					<div class="header-inner">
						<div class="header-block header-logo">
							<a href="index.php" class="logo-block">
								<img src="img/logo.png" alt="">
							</a>
						</div>
						<div class="header-block d-none d-lg-block">
							<ul class="top-nav">
								<li><a href="#">Продукция</a></li>
								<li><a href="#">О производстве</a></li>
								<li><a href="#">Информация</a></li>
								<li><a href="#">Где купить?</a></li>
								<li><a href="#">Дилерам</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
						<div class="header-block header-phone">
							<a href="tel:88002229376" class="phone-link">8 800 222-93-76</a>
						</div>
						<div class="header-block d-lg-none header-opener">
							<div class="menu-opener">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>
					</div>
				</div>
			</header>