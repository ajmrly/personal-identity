<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

  $perpage  = $page->perpage()->int();
  $articles = $page->children()
                   ->visible()
                   ->flip();
 
  // add the tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }
  // fetch all tags
  $tags = $articles->pluck('tags', ',', false);
  
  // apply pagination
  $articles   = $articles->paginate(5);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'pagination');

};
