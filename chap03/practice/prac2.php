<?php
$a = 1;
$b = &$a;
$a++;

print $a;
print $b;
