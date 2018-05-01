      <div class="wrap wide">
  
        <div class="hero grid gutter-1">
          <?php if($image = $page->images()->sortBy('sort', 'asc')->first()): $thumb = $image->height(596); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $page->title()->html() ?>" class="hero-image hero-item column" />
          <?php endif ?>
          <div class="column hero-item">
              <h2 class="left-align"><a href="" >Known by God</a></h2>
              <h3>A Biblical Theology of Personal&nbsp;Identity</h3>
              <ul class="">
                <li><a href="">Read an excerpt</a></li>
                <li><a href="">Buy the book</a></li>
                <li><a href="">Ask a question</a></li>
              </ul>
          </div>
        </div>
      </div>