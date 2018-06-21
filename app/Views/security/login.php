<?php $this->layout('layout', ['title' => 'Se connecter']) ?>
<?php $this->start('main_content') ?>
    <div id="login">
        <form name='form-login'>
            <div class="row">
            <span class="fontawesome-user"></span>
            <input type="text" id="user" placeholder="Username">
            </div>
            <div class="row">
            <span class="fontawesome-lock"></span>
            <input type="password" id"pass" placeholder="Password">
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
<?php $this->stop('main_content'); ?>