<section class="hero">
    <div class="container">
        <div class="col-sm-12 col-md-6">
            <div class="title-home">
                <h1><?= __('New CakePHP {0} Strawberry.', $_version) ?></h1>
                <h3><?= __('Cleaner. Faster.') ?></h3>
                <h3><?= __('Tasty as usual.') ?></h3>
            </div>
            <div class="cta-home">
                <a href="http://book.cakephp.org/4/en/installation.html" class="btn btn-home">
                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                    Download
                </a>
                <a href="http://book.cakephp.org" class="btn btn-home btn-inverted">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                    Docs
                </a>
                <a href="http://api.cakephp.org/" class="btn btn-home btn-inverted">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    API
                </a>
            </div>
        </div>
        <div class="col-md-6 visible-md-block visible-lg-block artwork">
            <?= $this->Html->image('hero_artwork.svg') ?>
        </div>
    </div>
</section>
