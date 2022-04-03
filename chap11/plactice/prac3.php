<?php
$dt = new ReflectionClass(DateTime::class);
$di = new ReflectionClass(DateInterval::class);
$method = $dt->getMethod('add');
$idt = $dt->newInstance('2021/06/25 11:37:36');
$idt = $di->newInstance('P2M');
$result = $method->invoke($idt, $idi);
