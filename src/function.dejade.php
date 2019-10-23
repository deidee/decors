<?php

function deJade() {
    $r = mt_rand(0, 127);
    $g = mt_rand(127, 255);
    $b = mt_rand(0, 191);

    $color = "rgb($r, $g, $b)";

    return $color;
}