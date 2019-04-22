<?php
class PHPXMLSitemap {
  public $items = [];

  public function __construct($root = null) {
    $this->root = ($root) ? $root : '';
  }

  public function add($loc, $priority = null, $changefreq = null, $lastmod = null) {
    $loc = ($loc == '/') ? '' : $loc;
    $loc = ($this->root == '' || $loc == '') ? $loc : '/' . $loc;

    $this->items[] = array_merge($this->defaults(), array_filter([
      'loc' => $this->root . $loc,
      'priority' => $priority,
      'changefreq' => $changefreq,
      'lastmod' => $lastmod,
    ]));
  }

  public function render() {
    $urls = $this->items;
    include __DIR__ . '/template.php';
  }

  private function defaults() {
    return [
      'priority' => '0.5',
      'changefreq' => 'daily',
      'lastmod' => date('Y-m-d'),
    ];
  }
}