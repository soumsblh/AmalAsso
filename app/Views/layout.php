<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<!-- CSS FILES  -->
	<link rel="stylesheet" href="<?= $this->assetUrl('bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('bootstrap/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('bootstrap/css/bootstrap.css.map') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

	<!-- FAVICON -->
	<link rel="icon" type="img/png" href="<?= $this->assetUrl('img/test.jpg') ?>" />

</head>
<body>
    <section>
        <?= $this->section('main_content') ?>
    </section>
    <?= $this->section('script') ?>
    <script src="<?= $this->assetUrl('js/main.js') ?>" charset="utf-8"></script>
</html>
