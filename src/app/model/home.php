
<?php

if (!isset($_SESSION["reg_email"])){
    echo '<script>window.location.replace("https://helium-front.herokuapp.com/?page=index")</script>';
}

$selMonth = date('F');
$email = $_SESSION["reg_email"];

echo "<script type='text/javascript'>calendarScript('$selMonth', '$email');</script>";