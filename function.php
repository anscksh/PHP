<?php
    function get_title() {
        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "Welcome!";
        }
    }

    function print_list() {
        $list = scandir('data');
        $i = 0;

        while ($i < count($list)) {
            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo "<li><a href=\"function.php?id=$list[$i]\">$list[$i]</a></li>";
                }
            }
            $i = $i + 1;
        }
    }

    function get_contents() {
        if (isset($_GET['id'])) {
            echo file_get_contents("data/" . $_GET['id']);
        } else {
            echo "Choose HyperLink";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php get_title() ?> </title>
</head>

<body>
    <h1>PHP TEST</h1>
    <ol> <?php print_list() ?> </ol>
    <h3> <?php get_contents() ?> </h3>
</body>
</html>