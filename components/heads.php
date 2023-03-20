<?php
$URI = new URI();
$url = explode("/", $_SERVER['REQUEST_URI']);
$url_site = $url[1];

$stmt = $pdo->prepare("SELECT * FROM heads");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	extract($row);
}
?>
<title><?php echo $title; ?></title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="<?php echo $keywords; ?>" name="keywords">
<meta content="<?php echo $description; ?>" name="description">
<meta name="author" content="Cairo Felipe Developer">

<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:url" content="https://pintow.com.br/assets/img/logo.svg" />
<meta property="og:image" content="https://pintow.com.br/assets/img/logo.svg" />
<meta property="og:description" content="<?php echo $description; ?>" />

<link rel="stylesheet" href="<?php echo $URI->base("./assets/css/style.css"); ?>">
<link rel="stylesheet" href="<?php echo $URI->base("./assets/css/paleta.css"); ?>">
<link href="./assets/img/icon.png" rel="icon">
<link href="./assets/img/icon.png" rel="apple-touch-icon">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
	tailwind.config = {
		theme: {
			extend: {
				colors: {
					color1: '#434598',
					color2: '#EBF5FE',
					color3: '#15357A',
					color4: '#519AF4'
				}
			}
		}
	}
</script>