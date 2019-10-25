<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 628, 'width' => 1200, 'type' => 'jpg']);
if(isset($_GET['save'])) $im->save();
echo $im;
