<?php
function replaceContent(string $path, string ...$args): string
{
    $data = file_get_contents($path);

    for ($i = 0; $i < count($args); $i++) {
        $data = str_replace('{' . ($i) . '}', $args[$i], $data);
    }

    return $data;
}

print replaceContent('data.dat', '鈴木太郎', '2021年5月1日');
