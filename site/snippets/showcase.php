<?php

$articles = page()->children()->visible();

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
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $article->title()->html() ?></h3>
            <p class="showcase-excerpt">"<?= $article->text()->html()->excerpt(150) ?></p>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>