<?php
    $login;
    $userName = "홍길동";
    if(isset($login)) {
?>
    <h1><?=$userName . "님이 로그인 하였습니다." ?></h1>
<?php
    } else {
?>
    <h1>로그인이 필요합니다.</h1>
<?php
    }
?>