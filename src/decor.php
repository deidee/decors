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
        $this->draw = new ImagickDraw();
        $this->draw->setFillColor('#00ff00');
        $this->draw->rectangle(20, 20, 40, 40);

        $this->im->drawImage($this->draw);
    }
}

$im = new Decor;
header('Content-type: image/png');
echo $im;
