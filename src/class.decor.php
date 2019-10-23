<?php

class Decor
{
    private $height = 300;
    private $width = 300;
    private $size = 24;

    public function __construct($settings = []) {

        if(!empty($settings)):
            foreach($settings as $key => $value):
                $this->$key = $value;
            endforeach;
        endif;

        $this->cols = ceil($this->width / $this->size);
        $this->rows = ceil($this->height / $this->size);

        $this->im = new Imagick();
        $this->im->newImage($this->width, $this->height, new ImagickPixel('#ffffff'));
        $this->im->setImageFormat('png');

        $this->draw();
    }

    public function __toString() {
        header('Content-Type: ' . $this->im->getImageMimeType());

        return $this->im->getImageBlob();
    }

    public function deJade() {
        $r = mt_rand(0, 127);
        $g = mt_rand(127, 255);
        $b = mt_rand(0, 191);

        $color = "rgb($r, $g, $b)";

        return $color;
    }

    public function draw() {
        $draw = new ImagickDraw();
        $draw->setStrokeWidth(0);

        for($row = 0; $row < $this->rows; $row++) {
            for($col = 0; $col < $this->cols; $col++) {
                $x1 = $col * $this->size;
                $x2 = $x1 + $this->size + mt_rand(-1, 1);
                $y1 = $row * $this->size;
                $y2 = $y1 + $this->size + mt_rand(-1, 1);
                $color = $this->deJade();

                $draw->setFillColor(new ImagickPixel($color));
                $draw->setFillOpacity(.5);
                $draw->rectangle($x1, $y1, $x2, $y2);
            }
        }

        $this->im->drawImage($draw);
    }
}
