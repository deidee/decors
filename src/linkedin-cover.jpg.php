<?php

require_once 'class.decor.php';

$im = new Decor(['height' => 768, 'width' => 1536, 'type' => 'jpg']);
if(isset($_GET['save'])) $im->save();
echo $im;
