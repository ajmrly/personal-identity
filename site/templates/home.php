<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>
    <section class="articles-section">
      
      <div class="wrap wide">
  
        <div class="hero grid gutter-1">
          <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): $thumb = $image->height(596); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $page->title()->html() ?>" class="hero-image hero-item column" />
          <?php endif ?>
          <div class="column hero-item">
              <h2 class="left-align"><a href="<?= page('known-by-god')->url() ?>" >Known by God</a></h2>
              <h3>A Biblical Theology of Personal&nbsp;Identity</h3>
              <ul class="">
                <li><a href="">Read an excerpt</a></li>
                <li><a href="">Buy the book</a></li>
                <li><a href="">Ask a question</a></li>
              </ul>
          </div>
        </div>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="articles-section-more"><a href="<?= page('known-by-god')->url() ?>" class="btn">show all &hellip;</a></p>
      </div>
      
    </section>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  

  </main>

<?php snippet('footer') ?>