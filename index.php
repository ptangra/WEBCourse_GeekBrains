<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/site.css">
	<script src="scripts/jquery.js"></script>
	<script src="scripts/site.js"></script>
	<title>
		Online Market
	</title>
</head>

<body>
	<header>
		<div id="headerInside">
			<div id="logo"></div>
			<div id="companyName">Brand</div>
			<div id="navWrap">
				<a href="/">
					Main
				</a>
				<a href="index.php?page=shop">
					Market
				</a>
			</div>
		</div>
	</header>
	<div id="content">
		<?php
			$goods = [
					[
						'id' => 1,
						'name' => 'Iphone',
						'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue, nibh a condimentum dignissim, augue diam consectetur magna',
						'img' => '/images/goods/iphone.jpg',
						'price' => '2000$'
					],
					[
						'id' => 2,
						'name' => 'HTC',
						'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue, nibh a condimentum dignissim, augue diam consectetur magna',
						'img' => '/images/goods/htc.jpg',
						'price' => '1200$'
					],
					[
						'id' => 3,
						'name' => 'Samsung',
						'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue, nibh a condimentum dignissim, augue diam consectetur magna',
						'img' => '/images/goods/samsung.jpg',
						'price' => '1400$'
					]
			];
			
			$page = $_GET['page'];
			if (!isset($page)) {
				require('templates/main.php');
			} elseif ($page == 'shop') {
				require('templates/shop.php');
			} elseif ($page == 'product') {
				$id = $_GET['id'];
				$good = [];
				foreach ($goods as $product) {
					if ($product['id'] == $id) {
						$good = $product;
						break;
					}
				}
				require('templates/openedProduct.php');
			}
		?>
	
</div>
<footer>
	<div id="footerInside">
		<div id="contacts">
			<div class="contactWrap">
				<img src="images/envelope.svg" class="contactIcon">
				info@brandshop.ru
			</div>
			<div class="contactWrap">
				<img src="images/phone-call.svg" class="contactIcon">
				8 80 555 00 00
			</div>
			<div class="contactWrap">
				<img src="images/placeholder.svg" class="contactIcon">
				Москва, пр-т Ленина, д. 1 офис 304
			</div>
		</div>

		<div id="footerNav">
			<a href="/">Main</a>
			<a href="index.php?page=shop">Market</a>
		</div>

		<div id="social">
			<img class="socialItem" src="images/vk-social-logotype.svg">
			<img class="socialItem" src="images/google-plus-social-logotype.svg">
			<img class="socialItem" src="images/facebook-logo.svg">
		</div>

		<div id="copyrights">&copy; Brandshop</div>
	</div>
</footer>

</body>
</html>