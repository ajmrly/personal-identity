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
      
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="articles-section-more"><a href="<?= $page->children()->first() ?>" class="btn">show all &hellip;</a></p>
      
    </section>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
  

  </main>

<?php snippet('footer') ?>