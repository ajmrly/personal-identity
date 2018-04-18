<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap">
      
      <header>
        <h1>About</h1>
          <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
          </div>
        <hr />
      </header>
      <section class="team wrap">

        <h2><?= $site->title()->html() ?></h2>

        <ul class="team-list grid gutter-1">
          <?php foreach($page->children()->visible() as $member): ?>
            <li class="team-item column">

              <figure class="team-portrait">
                <img src="<?= $member->image()->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
              </figure>

            </li>
          <?php endforeach ?>
        </ul>

      </section>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </div>

  </main>

<?php snippet('footer') ?>