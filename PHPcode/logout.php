<?php
    $_myURL2 = "indexAcount.php";

    session_start();

    session_unset();

    header("Location: $_myURL2");
?>