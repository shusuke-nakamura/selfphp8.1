<?php
$str = '仕事用はwings@exmaple.comです。';
if (preg_match("/
[a-z0-9.!#$%&'*+\/=?^_{|}~-] +
@
[a-z0-9-]+(\.[a-z0-9-]+)*
/x", $str, $data)) {
    print "Mail:{$data[0]}";
}
