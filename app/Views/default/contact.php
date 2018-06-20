<?php $this->layout('layout', ['title' => 'Nous Contactez']) ?>
<?php $this->start('main_content') ?>
<section id="howto">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    How To
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="section-sub-header">
                    Offest a Fixed Navbar
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body</span> <span class="na">data-spy=</span><span class="s">"scroll"</span> <span class="na">data-target=</span><span class="s">"#navbar-example"</span> <span class="na">data-offset=</span><span class="s">"70"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/body&gt;</span></code></pre>
                </figure>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'body'</span><span class="p">).</span><span class="nx">scrollspy</span><span class="p">({</span>
  <span class="na">offset</span><span class="p">:</span> <span class="s1">offsetHeight</span> <span class="c1">/*A numeric representing pixel count*/</span>
<span class="p">})</span></code></pre>
                </figure>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="section-sub-header">Ensure last #target scrolls to top</div>
                <p>A common problem I see with scrollspy implementations is when the last navigation target doesn't navigation to the top of the screen. This causes issues for scrollspy as well as confusing the user if the target they clicked is half way down the page.</p>
                <p>The problem is simple, the document isn't long enough to allow it to scroll to the top.</p>
                <p>A simple solution is to dynamically add padding-bottom to the body via JQuery, which increases the height to the pixel perfect minimum. We need to do this both at render/page load and if the window is resized. The below code is a simplified and calculates the height of all sibling elements (after the target) to calculate</p>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <figure class="highlight"><pre><code class="language-js" data-lang="js">
<span class="kd">var</span> <span class="vg">height</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">'#targetId'</span><span class="p">).</span><span class="nx">innerHeight</span><span class="p">(</span><span class="p">)</span>
<span class="kd">var</span> <span class="vg">windowHeight</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">window</span><span class="p">).</span><span class="nx">height</span><span class="p">(</span><span class="p">)</span>
<span class="kd">var</span> <span class="vg">navHeight</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">'nav.navbar'</span><span class="p">).</span><span class="nx">innerHeight</span><span class="p">(</span><span class="p">)</span>
<span class="kd">var</span> <span class="vg">siblingHeight</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">'#targetId'</span><span class="p">).</span><span class="nx">nextAll</span><span class="p">(</span><span class="p">).</span><span class="nx">innherHeight</span><span class="p">(</span><span class="p">)</span>

<span class="nx">if</span><span class="p">(</span><span class="nx">height </span><span class="nx">&lt;</span><span class="nx"> windowHeight</span><span class="p">)</span><span class="p">(</span><span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">'body'</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="na">"padding-bottom"</span><span class="p">,</span> <span class="nx">windowHeight</span><span class="p">-</span><span class="nx">navHeight</span><span class="p">-</span><span class="nx">height</span><span class="p">-</span><span class="nx">siblingHeight</span> <span class="p">+</span> <span class="p">"</span><span class="s1">px</span><span class="p">"</span><span class="p">)</span>
<span class="p">}</span>
</code></pre>
                </figure>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<?php $this->stop('main_content'); ?>
