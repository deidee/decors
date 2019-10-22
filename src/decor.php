<?php

class Decor
{
    public function __construct() {
        $this->im = new Imagick();
        $this->im->setResolution(300, 300);
        $this->im->setBackgroundColor(new ImagickPixel('transparent'));
        $this->im->setImageFormat('png32');
    }

    public function __toString() {
        return $this->im->getImageBlob();
    }
}

$im = new Decor;
header('Content-type: image/png');
echo $im;
