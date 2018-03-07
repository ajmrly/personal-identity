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
        <h2><a href="<?= page('known-by-god')->url() ?>" >Known by God</a></h2>
          <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $page->title()->html() ?>" class="hero-image" />
          <?php endif ?>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="articles-section-more"><a href="<?= page('known-by-god')->url() ?>" class="btn">show all &hellip;</a></p>
      </div>
      
    </section>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  

  </main>

<?php snippet('footer') ?>