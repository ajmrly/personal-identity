<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  
    <section class="articles-section">
      
      <div class="wrap wide">
        <h2>Latest Articles</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="articles-section-more"><a href="<?= page('known-by-god')->url() ?>" class="btn">show all articles &hellip;</a></p>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>