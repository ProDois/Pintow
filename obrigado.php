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
				<img class="w-1/2 lg:w-100" src="<?php echo $URI->base("/assets/img/logo2.png"); ?>" alt="">
			</div>
			<div class="w-5/6 md:w-1/2 bg-white rounded-xl pb-10">
				<div class="p-3">
					<h1 class="my-8 text-gray-600 text-center text-xs">Cadastro feito com sucesso!</h1>
					<p class="lg:p-5 text-center lg:text-3xl text-2xl text-color1 font-extrabold">
						Em breve você vai participar de todas as nossas novidades.
					</p>
				</div>
				<div class="flex justify-center">
					<div class="mt-6">
						<button name="btnsave" type="submit" class="cursor-pointer rounded-md bg-color1 py-4 px-8 font-semibold  text-white text-xs duration-300 ease-in-out hover:bg-blue-apcef w-full">Voltar para pagina inicial</button>
					</div>
				</div>
			</div>
			<div class="w-5/6 md:w-1/2 bg-white rounded-xl">
				<div>
					<h1 class="my-8 lg:my-6 text-gray-600 text-center text-xs">Siga nossas redes sociais</h1>
				</div>
				<div class="flex justify-center">
					<div>
						<button name="btnsave" type="submit" class="cursor-pointer rounded-md bg-color1 py-4 px-8 font-semibold  text-white text-xs duration-300 ease-in-out hover:bg-blue-apcef w-full">@pintowtintas</button>
					</div>
				</div>
				<div class="flex justify-center">
					<div class="my-8">
						<a href="https://www.instagram.com/pintowtintas/"><i class="fa-brands fa-instagram text-color1"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="./assets/js/script.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>