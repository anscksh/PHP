<?php
    function getTitle() {
        if (isset($_GET['title'])) {
            echo $_GET['title'];
        } else {
            echo "Non Title";
        }
    }

    function printList() {
        $list = scandir('data');
        $i = 0;

        while ($i < count($list)) {
            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo "<li><a href=\"list.php?title=$list[$i]\">$list[$i]</a></li>";
                }
            }
            $i = $i + 1;
        }
    }

    function getContents() {
        if (isset($_GET['title'])) {
            echo file_get_contents('data/' . $_GET['title']);
        } else {
            echo "Select Title";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php getTitle() ?> </title>
</head>

<body>
    <a href="/form.php">Create!</a>
    <h3> <?php getTitle() ?> </h3>
    <p> <?php getContents() ?> </p>
    <ol> <?php printList() ?> </ol>
</body>
</html>