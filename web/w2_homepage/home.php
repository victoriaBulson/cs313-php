<?php
$image = exif_thumbnail('../pics/wedding1.JPG', $width, $height, $type);

echo "<img  width='$width' height='$height' src='data:image/gif;base64,".base64_encode($image)."'>";
?>
