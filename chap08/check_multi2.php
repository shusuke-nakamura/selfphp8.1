<?php require_once '../Encode.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チェックボックス</title>
</head>

<body>
    選択されたのは、<?= e(implode(',', $_POST['lang'])) ?>です。
</body>

</html>