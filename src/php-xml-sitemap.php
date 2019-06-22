<?php
class PHPXMLSitemap {
  public $items = [];

  public function __construct($root = null, $options = []) {
    $this->options = array_merge($this->defaults(), $options);
    $this->root = ($root) ? $root : '';
  }

  public function add($loc, $priority = null, $changefreq = null, $lastmod = null) {
    $loc = ($loc == '/') ? '' : $loc;
    $loc = ($this->root == '' || $loc == '') ? $loc : '/' . $loc;

    $this->items[] = [
      'loc' => $this->root . $loc,
      'priority' => $priority,
      'changefreq' => $changefreq,
      'lastmod' => $lastmod,
    ];
  }

  public function render() {
    $urls = $this->items;
    include __DIR__ . '/template.php';
  }

  private function defaults() {
    return [
      'version' => '1.0',
      'encoding' => 'utf-8',
      'xmlns' => 'http://www.sitemaps.org/schemas/sitemap/0.9',
    ];
  }
}