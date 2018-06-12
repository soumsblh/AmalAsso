<?php $this->layout('layout', ['title' => 'home']) ?>
<?php $this->start('main_content') ?>
    <body>
    <div id="wrapperMain">
        <div id="center">
            <div id="header">
            </div>
            <div id="displaytd">
                <p id="time">TIME</p>
                <p id="date">DATE</p>
            </div>
            <div id="content">
                <div id="searchBar">
                    <form method="get" action="https://www.google.com/search" target="_blank">
                        <input type="text" placeholder="Google" name="q" id="search">
                        <input type="submit" value="Go" name="" id="button">
                    </form>
                </div>
                <div id="links">
                    <hr>
                    <nav>
                        <ul>
                            <li><a href="#" target="_blank">LINK1</a></li>
                            <li><a href="#" target="_blank">LINK2</a></li>
                            <li><a href="#" target="_blank">LINK3</a></li>
                            <li><a href="#" target="_blank">LINK4</a></li>
                            <li><a href="#" target="_blank">LINK5</a></li>
                            <li><a href="#" target="_blank">LINK6</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="footer">
            </div>
        </div>
    </div>
    </body>
<?php $this->stop('main_content'); ?>