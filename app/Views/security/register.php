<?php $this->layout('layout', ['title' => 'Inscription']) ?>
<?php $this->start('main_content') ?>
    <div id="login">
        <h1> Profile d'inscription</h1>
        <form name='form-login'>
            <div class="row">
                <span class="fontawesome-user"></span>
                <input type="text" id="firstname" placeholder="Nom">
            </div>
            <div class="row">
                <span class="fontawesome-user"></span>
                <input type="text" id="username" placeholder="Prénom">
            </div>
            <div class="row">
                <span class="fontawesome-envelope"></span>
                <input type="text" id="email" placeholder="Email">
            </div>
            <div class="row">
                <span class="fontawesome-lock"></span>
                <input type="password" id="pass" placeholder="Mot de passe">
            </div>
            <div class="row">
                <span class="fontawesome-lock"></span>
                <input type="password" id"cfpass" placeholder="Confirmer votre Mot de passe">
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
<?php $this->stop('main_content'); ?>