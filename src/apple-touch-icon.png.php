<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 512, 'width' => 512, 'type' => 'png']);
if(isset($_GET['save'])) $im->save();
echo $im;
