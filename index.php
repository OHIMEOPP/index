<?php
// 假设这是您的用户凭据信息（在实际项目中，应该从数据库中获取）
    //_GET是系統的method，[]裡放的參數一定要打在URL上 
    //例:_GEt["name"] ,URL -> 127.0.0.1/?name=(你要輸入的值) 
    // echo "get 值是 :" . $_GET["yourName"] . "<br/>";
    //echo "post 值是 :" . $_POST["test"] . "<br/>";

    if($_POST["test"] == "OHIMEOPP" && $_POST["password"] == "J9012015"){
        echo "登入成功!!";
    }else{
        echo "登入失敗";
    }
    ?>
