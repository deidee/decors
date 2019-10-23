<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 768, 'width' => 1536]);
if(isset($_GET['save'])) $im->save();
echo $im;
