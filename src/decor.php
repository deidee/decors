<?php

class Decor
{
    private $height = 300;
    private $width = 300;
    private $size = 24;

    public function __construct() {
        $this->cols = ceil($this->width / $this->size);
        $this->rows = ceil($this->height / $this->size);

        $this->im = new Imagick();
        $this->im->newImage($this->width, $this->height, new ImagickPixel('#ffffff'));
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
