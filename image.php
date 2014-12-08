<?php

require "bootstrap.php";

$whatSide = isset($_GET['side']) ? $_GET['side'] : 'Long';
$seed = isset($_GET['seed']) ? $_GET['seed'] : '1';


mt_srand($seed);

if (!in_array(strtolower($whatSide), ['long', 'short'])) {
    throw new InvalidArgumentException('Only Short and Long sides are available!');
}
$whatSide = ucfirst($whatSide) . 'Side';
// die(var_dump($whatSide));

$sideCollection = new $whatSide();

// die(var_dump($sideCollection));




$side = imagecreatefrompng($sideCollection->getImageUrl());
imagealphablending($side, false);
imagesavealpha($side, true);

foreach ($sideCollection->items as $index => $icon) {
    $pos = $sideCollection->getPosition($index);
    $icon = imagecreatefrompng($icon->getUrl());
    imagecopy($side, $icon, $pos['x'], $pos['y'], 0, 0, 40, 40);
    imagedestroy($icon);
}
// die();

header('Content-Type: image/png');
imagepng($side);

imagedestroy($side);


?>
