<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addsong.php" method="post" enctype="multipart/form-data">
       
        <label for="song">Song</label>
        <input type="file" id="song" name="song"><br>
        <label for="banner">Banner</label>
        <input type="file" id="banner" name="banner"><br>
        <input type="submit" value="Upload Song" name="uploadsong">
    </form>
</body>
</html>