<?php
$str = 'にわにはにわにわとりがいる';
print mb_substr_count($str, 'にわ');

$str = 'いちいちいちばにいち';
print mb_substr_count($str, 'いちいち');
