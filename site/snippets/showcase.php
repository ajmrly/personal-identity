<?php

$articles = page('known-by-god')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of articles:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $articles = $articles->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($articles as $article): ?>

    <li class="showcase-item column">
        <a href="<?= $article->url() ?>" class="showcase-link">
          <?php if($image = $article->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $article->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $article->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>