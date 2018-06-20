<?php $this->layout('layout', ['title' => 'Faire un DON']) ?>
<?php $this->start('main_content') ?>
<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    Features
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="feature-container col-xs-12">
                <div class="row">
                    <div class="feature col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 text-center">
                        <svg class="lnr lnr-magic-wand"><use xlink:href="#lnr-magic-wand"></use></svg>
                        <h4>Animated Scroll</h4>
                        <p>Smooth, animated scroll between navigation links</p>
                    </div><!-- /.feature -->

                    <div class="feature col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 text-center">
                        <svg class="lnr lnr-map-marker"><use xlink:href="#lnr-map-marker"></use></svg>
                        <h4>Page Location</h4>
                        <p>Track page locations when scrolling</p>
                    </div><!-- /.feature -->

                    <div class="feature col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 text-center">
                        <svg class="lnr lnr-bullhorn"><use xlink:href="#lnr-bullhorn"></use></svg>
                        <h4>Focus Events</h4>
                        <p>Draw user attention to navigated sections</p>
                    </div><!-- /.feature -->
                </div><!-- /.row -->
            </div><!-- /.feature-container -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container-fluid">
        <div class="banner row">
            <div class="banner-child bc-left col-sm-6">
                <div class="section-sub-header">
                    Animated Scroll
                </div>

                <div class="animated-scroll">
                    <div class="scroll-header">
                        <div class="scroll-nav sn-1"></div>
                        <div class="scroll-nav sn-2"></div>
                        <div class="scroll-nav sn-3"></div>
                        <svg class="cursor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve"><path d="M7,2l12,11.2l-5.8,0.5l3.3,7.3l-2.2,1l-3.2-7.4L7,18.5V2"/></svg>
                    </div><!-- /.scroll-header -->

                    <div class="scroll-body">
                        <div class="scroll-child sc-1"></div>
                        <div class="scroll-child sc-2"></div>
                        <div class="scroll-child sc-3"></div>
                        <div class="scroll-child sc-back-to-top"></div>
                    </div><!-- /.scroll-body -->
                </div><!-- /.animated scroll -->
            </div><!-- /.banner-child -->

            <div class="banner-child bc-right col-sm-6">
                <div class="section-sub-header">
                    Focus Events | UX
                </div>

                <div class="focus-events">
                    <div class="scroll-header">
                        <div class="scroll-nav sn-1"></div>
                        <div class="scroll-nav sn-2"></div>
                        <svg class="cursor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve"><path d="M7,2l12,11.2l-5.8,0.5l3.3,7.3l-2.2,1l-3.2-7.4L7,18.5V2"/></svg>
                    </div><!-- /.scroll-header -->

                    <div class="scroll-body">
                        <div class="scroll-child sc-1">
                            <div class="header"></div>
                            <div class="sub-header"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                        </div>
                        <div class="scroll-child sc-2">
                            <div class="header"></div>
                            <div class="sub-header"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                        </div>
                    </div><!-- /.scroll-body -->
                </div><!-- /.animated scroll -->
            </div><!-- /.banner-child -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /#features -->
<?php $this->stop('main_content'); ?>
