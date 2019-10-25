<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 360, 'width' => 820, 'type' => 'jpg']);
if(isset($_GET['save'])) $im->save();
echo $im;
