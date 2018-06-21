<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $this->e($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!-- CSS FILES  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <?php if ($w_current_route === "panel_profil_profilSuperAdmin"):?>
        <link rel="stylesheet" href="<?= $this->assetUrl('css/panel_profil.css') ?>">
    <?php  endif; ?>
    <?php if ($w_current_route === "panel_profil_profilAdmin") :?>
        <link rel="stylesheet" href="<?= $this->assetUrl('css/panel_profil.css') ?>">
    <?php  endif; ?>
    <?php if ($w_current_route == 'security_forget' ||  'security_login' ||  'security_register'): ?>
        <link rel="stylesheet" href="<?= $this->assetUrl('css/form.css') ?>">
    <?php  endif; ?>
    <?php if ($w_current_route != "panel_profil_profilSuperAdmin") :?>
        <link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
    <?php  endif; ?>
    <?php if ($w_current_route != "panel_profil_profilAdmin") :?>
        <link rel="stylesheet" href="<?= $this->assetUrl('css/home.css') ?>">
    <?php  endif; ?>
    <!-- FAVICON -->
    <link rel="icon" type="img/png" href="<?= $this->assetUrl('img/favicn.ico') ?>" />

</head>
<body>
<?php if ($w_current_route != "panel_profil_profilSuperAdmin"):?>
<?php if ($w_current_route != "panel_profil_profilAdmin"):?>
<section>
    <!-- Navigation - Fixed Top -->
    <nav class="navbar-fixed-top" style="background-color: #374549d4;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-home" href="#home" role="button">
                    <svg class="lnr lnr-home"><use xlink:href="#lnr-home"></use></svg>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#scroll-spy" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="material-icons">&#xE5D2;</i>
                </button>
                <a class="navbar-home" href="#home" role="button">
                    <svg class="lnr lnr-home"><use xlink:href="#lnr-home"></use></svg>
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#scroll-spy" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="material-icons">&#xE5D2;</i>
                </button>
            </div>

            <!-- Collect the nav links, forms for toggling -->
            <div class="collapse navbar-collapse" id="scroll-spy">

                <!-- navbar-nav -->
                <ul class="nav navbar-nav ">
                    <li><a href="<?php echo $this->url('default_home')?>">Accueil</a></li>
                    <li><a href="<?php echo $this->url('default_nous')?>">Qui sommes-nous</a></li>
                    <li><a href="<?php echo $this->url('default_action')?>">Nos actions</a></li>
                    <li><a href="<?php echo $this->url('default_dons')?>">Faire un don</a></li>
                    <li><a href="<?php echo $this->url('default_contact')?>">Contact</a></li>
                    <li><a href="<?php echo $this->url('security_register')?>">S'Inscrire</a></li>
                    <li><a href="<?php echo $this->url('security_login')?>">Se connecter</a></li>
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav><!-- /.fixed navigation -->
    <?php  endif; ?>
    <?php endif;?>
    <?= $this->section('main_content');?>
    <?php if ($w_current_route != "panel_profil_profilSuperAdmin"):?>
    <?php if ($w_current_route != "panel_profil_profilAdmin") :?>

    <footer>
        <div class="container col-xs-12">
            <div class="row">
                <div class="col-xs-4">
                    <h4>AMAL </h4>
                    <p style="text-align:center">Être humanitairement engagé,<br> plus qu’une devise,<br> un vrai état d’esprit</p>
                </div>
                <div class="col-xs-4">
                    <h4>CONTACT </h4>
                    <p style="text-align:center">AMAL Association <br> 26 rue jeanne d'arc <br> 59650 Villeneuve D'ascq <br> France <br> 06...... <br> amalasso.fr</p>
                </div>
                <div class="col-xs-4">
                    <h4>FAIRE UN DON </h4>
                    <p style="text-align:center">Aidons les tous ensemble.</p>
                    <button class="btn-info" href="<?php echo $this->url('default_dons')?>">BISMILLAH</button>
                </div>
            </div>
        </div>
    </footer>
    <a href="#home" role="button" class="scrollTop">
        <svg class="lnr lnr-chevron-up"><use xlink:href="#lnr-chevron-up"></use></svg>
    </a>
</section>
<?php  endif; ?>
<?php  endif; ?>

<?= $this->section('javascript') ?>
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<?php if ($w_current_route == 'panel_profil_profilAdmin'): ?>
    <script src="<?= $this->assetUrl('js/panel_profil.js') ?>" charset="utf-8"></script>
<?php  endif; ?>
<?php if ($w_current_route != 'panel_profil_profilAdmin'): ?>
    <script src="<?= $this->assetUrl('js/home.js') ?>" charset="utf-8"></script>
<?php  endif; ?>
</body>
</html>
