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
                    echo "<tr>
                        <td><a href=\"list.php?title=$list[$i]\">$list[$i]</a></td>
                        <td><a href=\"modify.php?title=$list[$i]\">Modify</a></td>
                        <td><a href=\"delete.php?title=$list[$i]\">Delete</a></td>
                    </tr>";
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
    <style>
        table, th, td {
            margin: 5px;
            border: 1px solid #000;
            text-align: center;
        }
        a {
            color: darkslategray;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h3> <?php getTitle() ?> </h3>
    <p> <?php getContents() ?> </p>
    <table>
        <tr>
            <th>Title</th>
            <th>Modify</th>
            <th>Delete</th>
        </tr>
        <?php printList() ?>
    </table>
    <a href="form.php">Create</a>
</body>
</html>