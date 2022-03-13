<?php
test();
$area = getTriangleArea(10, 8);
print "三角形の面積は{$area}です。";

function test()
{
    function getTriangleArea(float $base, float $height): float
    {
        return $base * $height / 2;
    }
}
