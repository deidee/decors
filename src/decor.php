<?php

class Decor
{
    public function __construct() {
        $this->im = new Imagick();
        $this->im->newImage(300, 300, new ImagickPixel('#ffffff'));
        $this->im->setImageFormat('png');

        $this->draw();
    }

    public function __toString() {
        return $this->im->getImageBlob();
    }

    public function draw() {
        $draw = new ImagickDraw();
        $draw->setFillColor('#00ff00');
        $draw->rectangle(20, 20, 40, 40);

        $this->im->drawImage($draw);
    }
}

$im = new Decor;
header('Content-type: image/png');
//header('Content-Type: image/svg');
echo $im;
