<?php

class AutocompleteTest extends PanelTestCase {

  protected function setUp() {

    parent::setUp();

    $this->createAdmin('homer')->login('test');
    $this->createAdmin('marge');
    $this->createEditor('lisa');
    $this->createEditor('bart');

    $articles = $this->site->children()->create('articles', 'articles', array(
      'title' => 'articles'
    ));

    $articles->children()->create('article-a', 'article', array(
      'title' => 'article A',
      'tags'  => 'design, photography'
    ));

    $articles->children()->create('article-b', 'article', array(
      'title' => 'article B',
      'tags'  => 'photography, architecture'
    ));

    $articles->children()->create('article-c', 'article', array(
      'title' => 'article C',
      'tags'  => 'architecture, illustration'
    ));

  }

  public function testUsernames() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'usernames');
    $expected     = array('bart', 'homer', 'lisa', 'marge');

    $this->assertEquals($autocomplete->result(), $expected);

  }

  public function testEmails() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'emails');
    $expected     = array('bart@getkirby.com', 'homer@getkirby.com', 'lisa@getkirby.com', 'marge@getkirby.com');

    $this->assertEquals($autocomplete->result(), $expected);

  }

  public function testUris() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'uris');
    $expected     = array('articles', 'articles/article-a', 'articles/article-b', 'articles/article-c');

    $this->assertEquals($autocomplete->result(), $expected);

  }

  public function testFieldWithDefaults() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'field', array(
      'uri'       => 'articles/article-a',
      'separator' => ','
      // default: 'field' => 'tags',
      // default: 'index' => 'siblings'
    ));

    $expected = array('architecture', 'design', 'illustration', 'photography');

    $this->assertEquals($autocomplete->result(), $expected);

  }

  public function testFieldWithSiblingsIndex() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'field', array(
      'uri'       => 'articles/article-a',
      'separator' => ',',
      'index'     => 'siblings'
      // default: 'field' => 'tags',
    ));

    $expected = array('architecture', 'design', 'illustration', 'photography');

    $this->assertEquals($autocomplete->result(), $expected);

  }

  public function testFieldWithChildrenIndex() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'field', array(
      'uri'       => 'articles',
      'separator' => ',',
      'index'     => 'children',
      'field'     => 'tags'
    ));

    $expected = array('architecture', 'design', 'illustration', 'photography');

    $this->assertEquals($autocomplete->result(), $expected);

  }

  public function testFieldWithTemplateIndex() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'field', array(
      'uri'       => 'articles',
      'separator' => ',',
      'index'     => 'template',
      'field'     => 'tags'
    ));

    $expected = array('architecture', 'design', 'illustration', 'photography');

    $this->assertEquals($autocomplete->result(), $expected);

  }

  public function testFieldWithAllIndex() {

    $autocomplete = new Kirby\Panel\Autocomplete($this->panel, 'field', array(
      'uri'       => 'articles',
      'index'     => 'all',
      'field'     => 'title'
    ));

    $expected = array('article A', 'article B', 'article C', 'articles');

    $this->assertEquals($autocomplete->result(), $expected);

  }

}