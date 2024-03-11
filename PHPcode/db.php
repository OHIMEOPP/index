<?php 
    $host = "localhost";
    $userAccount = "OHIMEOPP";
    $userPassword = "J9012015";
    $dbName = "my_db";

    $sql = "SELECT * FROM ust8";

    $link = new mysqli($host,$userAccount,$userPassword,$dbName); 

    if($link -> connect_error){
        echo '無法連接資料庫 : ' . $link -> connect_error;
        die("Connection failed: " . $link->connect_error);
    }else{
        $link->set_charset("utf8");
        // mysqli_select_db($dbName,$link);
        if($link){
        //    echo " 已連接正確資料庫 : " . $dbName;
        }
        else{
            // echo '無法連接正確資料庫 : ';
        }
    }

?>