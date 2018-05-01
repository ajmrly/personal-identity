<?php

// /site.php

$kirby   = kirby();
$domain  = server::get('server_name');
$domains = array('rosner.id.au', 'brian.rosner.id.au');

function is_localhost() {
    $whitelist = array( '127.0.0.1', '::1' );
    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) )
        return true;
}
if(is_localhost()) $domain = 'rosner.id.au';

if(in_array($domain, $domains)) {

  // custom roots
  $kirby->roots->content = __DIR__ . DS . 'content' . DS . $domain;
  $kirby->roots->avatars = __DIR__ . DS . 'assets' . DS . 'avatars' . DS . $domain;
  $kirby->roots->thumbs  = __DIR__ . DS . 'thumbs' . DS . $domain;

  // custom urls
  $kirby->urls->index    = url::scheme() . '://' . $domain;
  $kirby->urls->content  = $kirby->urls->index . '/content/' . $domain;
  $kirby->urls->avatars  = $kirby->urls->index . '/assets/avatars/' . $domain;
  $kirby->urls->thumbs   = $kirby->urls->index . '/thumbs/' . $domain;

}