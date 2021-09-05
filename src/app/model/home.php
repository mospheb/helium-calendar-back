
<?php

if (!isset($_SESSION["reg_email"])){
    header("Location: https://helium-front.herokuapp.com/?page=index");
    exit();
}

$selMonth = date('F');
$email = $_SESSION["reg_email"];

echo "<script type='text/javascript'>calendarScript('$selMonth', '$email');</script>";