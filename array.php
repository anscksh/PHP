<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Array PHP</title>
    </head>

    <body>
        <h1>Array Example</h1>
        <?php
            $coWorkers = array(
                "반장" => "정승목",
                "부반장"=> "김희교",
                "총무" => "고은희");
            // echo $coWorkers[0] . "<br>";
            echo $coWorkers["반장"] . "<br>";
            var_dump($coWorkers);
            echo "<br>" . count($coWorkers) . "<br>";
            var_dump(count($coWorkers));
            echo "<br>";

            // array_push($coWorkers, "고유비");
            $coWorkers += ["유하르방" => '고유비'];
            var_dump($coWorkers);
        ?>
    </body>
</html>