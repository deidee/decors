<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 1000, 'width' => 3000]);
if(isset($_GET['save'])) $im->save();
echo $im;
