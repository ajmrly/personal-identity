<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
        <ul class="tags">
          <?php foreach($tags as $tag): ?>
          <li class="tag">
            <a href="<?= url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>">
              <?= html($tag) ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
      <hr />
    </header>
      
    <div class="wrap wide">    
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>