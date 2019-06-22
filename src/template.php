<?php
header("Content-type: text/xml");
echo '<?xml version="' . $this->options['version'] . '" encoding="' . $this->options['encoding'] . '"?>';
?>

<urlset xmlns="<?= $this->options['xmlns']; ?>">
<?php
if( ! empty( $urls ) ) :
  foreach( $urls as $row ) :
    if( ! empty( $row ) ) : ?>
  <url>
<?php
  foreach( $row as $key => $value ) {
    if($value) {
      echo "\t<$key>$value</$key>\n";
    }
  }
?>
  </url>
<?php
endif;
  endforeach;
    endif;
?>
</urlset>