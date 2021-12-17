<!-- <?php
    //phpinfo();
    echo date('Y-m-d H:i:s');
    echo "<br>";
    $a = 100.12;
    var_dump($a);
    echo "<br>";
    $a = "korea";
    var_dump($a);
    echo "<br>";

    echo "안녕하세요..." . $_GET['name'] . "님";
    echo "<br>";
    echo $_GET['address'] . "에 사시는군요...";
?>

<ol>
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li>
</ol>
<h1>
    <?php
        if(isset($_GET["id"])) {
            echo $_GET["id"] . "로 로그인함";
        } else {
            echo "로그인 필요";
        }
    ?>
</h1> -->

<ol>
    <?php
        $list = scandir('data');
        $i = 0;
        while ($i < count($list)) {
            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    ?>
                    <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                    <?php
                }
            }
            $i = $i + 1;
        }
    ?>
</ol>