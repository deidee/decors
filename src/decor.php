<?php

class Decor
{
    public function __construct() {
        $this->im = new Imagick();
        $this->im->newImage(300, 300, new ImagickPixel('#ffffff'));
        $this->im->setImageFormat('png');
    }

    public function __toString() {
        return $this->im->getImageBlob();
    }
}

$im = new Decor;
header('Content-type: image/png');
echo $im;
