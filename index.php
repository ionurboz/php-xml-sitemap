<?php
include __DIR__ . '/src/php-xml-sitemap.php';

$sitemap = new PHPXMLSitemap('https://example.com');
$sitemap->add('/', '1.0', 'daily', '2019-03-20');
$sitemap->add('about');
$sitemap->render();