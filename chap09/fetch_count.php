<?php
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT COUNT(*) FROM book');
print "{$stt->fetchColumn()}件";
