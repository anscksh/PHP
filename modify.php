<?php
    function getContents() {
        if (isset($_GET['title'])) {
            echo file_get_contents('data/' . $_GET['title']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify!</title>
</head>

<body>
    <form action="saveFile.php" method="post">
        <p>
            <input type="text" name="title" placeholder="<?=$_GET['title']?>">
        </p>
        <p>
            <input type="text" name="contents" placeholder="<?=getContents()?>">
        </p>
        <p>
            <input type="submit" value="Modify">
            <button onclick="list.php">Cancle</button>
        </p>
    </form>
</body>
</html>