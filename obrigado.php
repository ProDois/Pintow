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
			<div class="w-5/6 h-80  md:w-1/2 bg-white rounded-lg">
                <div class="container">
                    <h1 class="my-8 text-gray-600 text-center text-xs">Cadastro feito com sucesso!</h1>
                    <p class="text-center text-4xl text-color1 font-extrabold">
                        Em breve você vai participar de todas as nossas novidades.
                    </p>
                </div>
                <center>
                    <div class="mt-6">
					<input name="btnsave" type="submit" class="cursor-pointer rounded-md bg-color1 py-4 px-8 font-semibold  text-white text-xs duration-300 ease-in-out hover:bg-blue-apcef w-6/12" value="Voltar para pagina inicial" />
                    </div>
                </center>
            </div>
  			<div class="w-5/6 h-52  md:w-1/2 bg-white rounded-lg">
			  <div>
                    <h1 class="my-8 text-gray-600 text-center text-xs">Siga nossas redes sociais</h1>
                </div>
                <center>
                    <div>
					    <input name="btnsave" type="submit" class="my-1 cursor-pointer rounded-md bg-color1 py-3 px-6 font-semibold  text-white text-xs  ease-in-out hover:bg-blue-apcef w-6/12" value="@pintowtintas" />
                    </div>
                </center>
				<center>
				    <div class="my-8">
					    <a href="#"><i class="fa-brands fa-instagram"></i></a>
					    <a href="#"><i class="fa-brands fa-tumblr ml-6"></i></a>
					    <a href="#"><i class="fa-brands fa-youtube ml-6"></i></a>
				    </div>
				</center>
			</div>
		</div>
	</section>

	<div class="text-center text-white text-xs">
		<p>@ Cairocodes 2023</p>
	</div>
	<script src="./assets/js/script.js"></script>
	<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>