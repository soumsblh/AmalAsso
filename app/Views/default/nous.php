<?php $this->layout('layout', ['title' => 'Notre Histoire']) ?>
<?php $this->start('main_content') ?>
<section id="nous">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    About
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                <p>ScrollSpy.js highlights page position by applying an 'active' class to the Navigation link within a Bootstrap nav component. It does this by monitoring the #target element of the nav link within the window, waiting for it to reach a given 'Y' position, usually zero.</p>

                <p><highlight>This example</highlight> demonstrates some rich, additional features including <strong>animated scrolling</strong>, <strong>focus events</strong> as well as how to offset with a fixed navigation bar.</p>

                <p>It also shows how to ensure that the 'last' #target element is able to scroll to the top for a better user experience (UX)</p>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#about -->
<?php $this->stop('main_content'); ?>
