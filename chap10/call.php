<?php
require_once 'MyMail.php';

$m = new MyMail();
$m->From('admin@exmple.com');
print $m->From();
