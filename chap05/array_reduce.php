<?php
$data = [2, 4, 6, 8];
$mutli = array_reduce($data, function ($result, $x) {
    return $result * $x;
}, 1);
print $mutli;
