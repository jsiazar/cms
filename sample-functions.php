<?php
require 'includes/config.php';
require 'includes/header.php';

function add($x, $y) {
    return $y + $x;
}
$x = 120;
$y = 80;
echo add($x, $y);


require 'includes/footer.php';

