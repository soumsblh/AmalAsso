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
            </div>
            <div id="displaytd">
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Longer nav link</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>
<?php $this->stop('main_content'); ?>