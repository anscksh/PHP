<?php
    unlink('data/' . $_GET['title']);
    header('Location: list.php');
?>

