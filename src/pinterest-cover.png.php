<?php

require_once 'class.decor.php';

$multiplier = 2;

$im = new Decor(['height' => 450 * $multiplier, 'width' => 800 * $multiplier, 'type' => 'png']);
if(isset($_GET['save'])) $im->save();
echo $im;
