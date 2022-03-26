<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像のアップロード</title>
</head>

<body>
    <form action="bindValue_process.php" enctype="multipart/form-data" method="post">
        <input type="file" name="photo" id="photo" size="50" />
        <input type="submit" value="アップロード" />
    </form>
</body>

</html>