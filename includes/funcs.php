<?php
function iSize($filename) {
  echo '<p class="caption">' . $filename . ': ' . filesize("/var/www/jpgorgiforpng/html/content/images/$filename") . ' bytes </p>';
}
function iDims($filename) {
  list($width, $height, $type, $attr) = getimagesize("/var/www/jpgorgiforpng/html/content/images/$filename");
  echo '<img src="/content/images/' . $filename . '" width="' . $width . '" height="' . $height . '" alt="' . $filename . '" />';
}
?>
