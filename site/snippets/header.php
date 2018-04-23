<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?php echo js('assets/scripts/main.js') ?>
  <?= css('assets/css/index.css') ?>
  <!-- custom css -->    
  <?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
  <?php echo css($css->url()) ?>
  <?php endforeach ?>
  <link href="https://fonts.googleapis.com/css?family=Eczar:400,500,800" rel="stylesheet">

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="headerGrid grid">
      <div class="branding column">
        <a href="http://brian.rosner.id.au/" rel="home" class="rosner"><?=$site->rosner()->html() ?></a>
        <a href="<?= url() ?>" rel="home" class="siteTitle"><?= $site->title()->html() ?></a>
      </div>
      <?php snippet('menu') ?>

    </div>
  </header>
