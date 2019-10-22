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

        for($row = 0; $row < $this->rows; $row++) {
            for($col = 0; $col < $this->cols; $col++) {
                $x1 = $col * $this->size;
                $x2 = $x1 + $this->size;
                $y1 = $row * $this->size;
                $y2 = $y1 + $this->size;

                $draw->setFillColor(new ImagickPixel('#00ff00'));
                $draw->rectangle($x1, $y1, $x2, $y2);
            }
        }

        $this->im->drawImage($draw);
    }
}

$im = new Decor;
header('Content-type: image/png');
//header('Content-Type: image/svg');
echo $im;
