<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 1000, 'width' => 3000, 'type' => 'jpg']);
if(isset($_GET['save'])) $im->save();
echo $im;
