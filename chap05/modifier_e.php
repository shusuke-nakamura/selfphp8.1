<?php
$msg = <<<EOD
サンプルは、「サーバサイド技術の学びの舎(http://www.wings.msn.to/)」から入手できます。執筆のノウ
ハウ集集「WINGS Knowlegde」(http://www31.atwiki.jp/wingsproject)もどうぞ。
EOD;

print preg_replace_callback('|http(s)?://([\w-]+\.)+[\w]+(/[\w ./?%&=-]*)?|i', function ($matches) {
    foreach ($matches as $match) {
        return mb_convert_case($match, MB_CASE_UPPER);
    }
}, $msg);
