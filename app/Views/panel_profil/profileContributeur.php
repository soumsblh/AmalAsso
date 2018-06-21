<?php $this->layout('layout', ['title' => 'Profile Contributeur']) ?>
<?php $this->start('main_content') ?>
    <span class="bckg"></span>
    <header>
        <h1 class="btn-group" role="group">
            <div id="btnGroupDrop1" type="" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dashboard
            </div>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="<?php echo $this->url('default_home')?>">Accueil</a>
                <a class="dropdown-item" href="#">AUTRES ...</a>
            </div>
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="javascript:void(0);" data-title="Projects">Projects</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-title="Team">Team</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-title="Diary">Diary</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-title="Timeline">Timeline</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-title="Settings">Settings</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-title="Search">Search</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="title">
            <h2>Projects</h2>
            <a href="javascript:void(0);">Hello Bob !</a>
        </div>

        <article class="larg">
            <div>
                <h3>Project 1 <span class="entypo-down-open"></span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus iste quia incidunt ad provident ullam quo assumenda expedita quae sapiente ipsa qui esse similique! Modi obcaecati natus sapiente quaerat omnis.</p>
            </div>
            <div>
                <h3>Project 2 <span class="entypo-down-open"></span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus iste quia incidunt ad provident ullam quo assumenda expedita quae sapiente ipsa qui esse similique! Modi obcaecati natus sapiente quaerat omnis.</p>
            </div>
            <div>
                <h3>Project 3 <span class="entypo-down-open"></span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus iste quia incidunt ad provident ullam quo assumenda expedita quae sapiente ipsa qui esse similique! Modi obcaecati natus sapiente quaerat omnis.</p>
            </div>
        </article>
    </main>
<?php $this->stop('main_content'); ?>