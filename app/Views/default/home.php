<?php $this->layout('layout', ['title' => 'Home']) ?>
<?php $this->start('main_content') ?>
    <div class="top front">
        <h1>ASSOCIATION AMAL</h1>
    </div>
    <div class="bottom front">
        <h1><b>VOUS SOUHAITE LA BIENVENUE </b></h1>
    </div>
    <div class="lockBack front"></div>
    <div class="lock front"></div>
    <div class="main">
        <div id="wrapperMain">
            <div id="center">
                <div id="header">
                </div>
                <div id="displaytd">
                    <p id="time">TIME</p>
                    <p id="date">DATE</p>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo $this->url('default_home'); ?>">Accueil</a
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->url('default_project'); ?>">Nos Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->url('default_action'); ?>">Nos Actions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->url('default_history'); ?>">Notre histoire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->url('default_contact'); ?>">Contacter</a>
                    </li>
                </div>
            </div>
        </div>
    </div>
<?php $this->stop('main_content'); ?>