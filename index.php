<?php
// 假设这是您的用户凭据信息（在实际项目中，应该从数据库中获取）
    //_GET是系統的method，[]裡放的參數一定要打在URL上 
    //例:_GEt["name"] ,URL -> 127.0.0.1/?name=(你要輸入的值) 
    // echo "get 值是 :" . $_GET["yourName"] . "<br/>";
    //echo "post 值是 :" . $_POST["test"] . "<br/>";
    $_myURL = "https://ohimeopp.github.io/index/indexTWO.html";
    $_myURL2 = "https://ohimeopp.github.io/index/index.html";

    if($_POST["test"] == "asd123" && $_POST["password"] == "asd123"){
        header("Location: $_myURL");
        //echo "登入成功!!";
    }else if($_POST["test"] != "OHIMEOPP" && $_POST["password"] != "J9012015"){
        echo "登入失敗". "</br>";
    }
    if($_POST["NAME"] != null ){
        $_POST["status"] = "S";
        if( $_POST["status"] == "S"){
            $javascript = "https://script.google.com/macros/s/AKfycbwachmPba1rnFEbOhZNUaxtQVSIEONTkUW2NvRgB8MAZnKFF3zSeQQ4L7ZRC-lP5le1Lw/exec" . "?NAME=". $_POST["NAME"] . "&data=" . "ASD" . "&action=S";
            header("Location: $javascript");
            echo "對了";
        }
    }
    if($_POST["Add"] != null && $_POST["password"] != null){
        $_POST["status"] = "C";
        if($_POST["status"] == "C"){
            $javascript = "https://script.google.com/macros/s/AKfycbwachmPba1rnFEbOhZNUaxtQVSIEONTkUW2NvRgB8MAZnKFF3zSeQQ4L7ZRC-lP5le1Lw/exec" . "?NAME="."asd" . "&data=" . $_POST["Add"] . "&password=" . $_POST["password"] . "&action=C";
            header("Location: $javascript");
        }
    }if($_POST["password"] == null || $_POST["Add"] == null){
        //header("Location: $_myURL2");
    }
    
    ?>
<a href="https://ohimeopp.github.io/index/"> 回html</a>
