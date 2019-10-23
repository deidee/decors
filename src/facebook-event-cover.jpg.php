<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 628, 'width' => 1200]);
if(isset($_GET['save'])) $im->save();
echo $im;
