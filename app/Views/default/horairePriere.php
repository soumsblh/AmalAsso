<?php $this->layout('layout', ['title' => 'Horaires de Prière']) ?>
<?php $this->start('main_content') ?>
<body background="<?= $this->assetUrl('img/Grad.png')?>">
    <div id="wrapperMain">
        <div id="center">
            <div id="header">
            </div>
            <div id="displaytd">
                <p id="time">TIME</p>
                <p id="date">DATE</p>
            </div>
        </div>
    </div>
<?php $this->stop('main_content'); ?>