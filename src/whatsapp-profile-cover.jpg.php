<?php

require_once 'class.decor.php';

// Dimensions are taken from https://wabetainfo.com/whatsapp-is-releasing-cover-photos-for-business-profiles/, which is not an official source.
$im = new Decor(['height' => 681, 'width' => 1211, 'type' => 'png']);
if(isset($_GET['save'])) $im->save();
echo $im;
