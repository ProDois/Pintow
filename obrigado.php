<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include "components/heads.php"; ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body class="bg-color1">
	<section class="mx-auto max-w-7xl px-2 pt-4 h-screen">
		<div class="grid grid-cols-1 gap-8 justify-items-center content-center h-full">
			<div class="mb-4 w-5/6 md:w-1/2 flex justify-center">
				<img class="w-1/4" src="<?php echo $URI->base("/assets/img/logo2.png"); ?>" alt="">
			</div>
			<div class="w-5/6 h-80  md:w-1/2 bg-white rounded-lg">01</div>
  			<div class="w-5/6 h-52  md:w-1/2 bg-white rounded-lg">02</div>
		</div>
	</section>
	<script src="./assets/js/script.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>