<?php
$msg = <<<EOD
サンプルは、「サーバサイド技術の学びの舎(http://www.wings.msn.to/)」から入手できます。執筆のノウ
ハウ集集「WINGS Knowlegde」(HTTP://www31.atwiki.jp/wingsproject)もどうぞ。
EOD;

print preg_replace('|http(s)?://([\w-]+\.)+[\w]+(/[\w ./?%&=-]*)?|i', '<a href="$0">$0</a>', $msg);
