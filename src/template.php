<?php
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
if( ! empty( $urls ) ) :
  foreach( $urls as $row ) :
    if( ! empty( $row ) ) : ?>
  <url>
<?php foreach( $row as $key => $value ) : ?>
    <<?= $key; ?>><?= $value; ?></<?= $key; ?>>
<?php endforeach; ?>
  </url>
<?php
endif;
  endforeach;
    endif;
?>
</urlset>