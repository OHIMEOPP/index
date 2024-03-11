<?php
// 假设这是您的用户凭据信息（在实际项目中，应该从数据库中获取）
//_GET是系統的method，[]裡放的參數一定要打在URL上 
//例:_GEt["name"] ,URL -> 127.0.0.1/?name=(你要輸入的值) 
// echo "get 值是 :" . $_GET["yourName"] . "<br/>";
//echo "post 值是 :" . $_POST["test"] . "<br/>";
require_once 'db.php';

//mysqli搜尋 = 放到變數
$sel = "SELECT * FROM `user_account`;";

//查詢成功時給qurrySel值為true，否為false
$querySel = mysqli_query($link, $sel);
//如果有查到
if ($querySel) {
    //如果querySel的資料大於0
    if (mysqli_num_rows($querySel) > 0) {
        //在querySelc還有列時，將資料傳給$data
        while ($row = mysqli_fetch_assoc($querySel)) {
            $data[] = $row;
        }
    }
    mysqli_free_result($querySel);
} else {
    echo "{$sel}無法查詢" . mysqli_error($link);
}


$frontpage = "indexTWO.php?page=frontpage"; //https://ohimeopp.github.io/index/indexTWO.html
$loginpage = "indexAcount.php"; //https://ohimeopp.github.io/index/index.html

session_start();
// $_SESSION['account'] = $_POST['account'];
// $_SESSION['passworf'] = $_POST['password'];
// setcookie("myName","",time());

$_javaURL = "https://script.google.com/macros/s/AKfycbwbYeFHFeZCu0IIdCwbU5TzKGizQCgCLBElzDmz_EM5Z-oLSi4BAHFDMkBFnF2fDrRtgQ/exec";

// 檢查登入涵式
function login()
{
    global $frontpage;
    global $loginpage;
    global $data;

    $searchAccount = $_POST["account"]; // 要尋找的值
    $searchPassword = $_POST["password"]; // 要尋找的值

    // 使用 foreach 遍歷 $data 陣列，查找特定值是否存在
    $accountCheck = false;
    $passwordCheck = false;
    //將每一列的每個欄位給陣列$user
    foreach ($data as $row1) {
        $user = array(
            'name' => array(
                $row1['name']
            ),
            'account' => array(
                $row1['account']
            ),
            'password' => array(
                $row1['password']
            )
        );
        //將給予user的值與使用者輸入的值做比對
        if (in_array($searchAccount, $user['account'])) {
            $accountCheck = true;
            if (in_array($searchPassword, $user['password'])) {
                $passwordCheck = true;
                break;
            }
        }
    }

    if ($accountCheck && $passwordCheck) {
        $_SESSION['is_login'] = true;
        header("Location: $frontpage");
    } else if (!$accountCheck || !$passwordCheck) {
        $_SESSION['is_login'] = false;
        $_SESSION['msg'] = "登入失敗，請重新登入";
        header("Location: $loginpage");
    }
}
function signUp()
{
    global $loginpage;
    //要增加的帳密
    $increaseAccount = $_POST['increaseaccount'];
    $increasePassword = $_POST['increasepassword'];
    if(strlen($increaseAccount) >= 5){
        $_SESSION['msg'] = "增加了";
        header("Location: $loginpage");
    }
}
function asd()
{
    global $_javaURL;
    $javascript = $_javaURL . "?NAME=" . "asd" . "&data=" . $_POST["Add"] . "&password=" . $_POST["password"] . "&action=C";
    // header("Location: $javascript");
}

// 如果有設定號密欄位，就使用檢查登入涵是login()
if (isset($_POST["account"]) && isset($_POST["password"])) {
    login();
    echo "有";
} else {
    header("Location: $_myURL2");
}

if(isset($_POST['increaseaccount']) && isset($_POST['increasepassword']) ){
    signUp();
    echo "有輸入";
}else{
    header("Location: $_myURL2");
}

?>
<a href="https://ohimeopp.github.io/index/"> 回html</a>
<!DOCTYPE html>
<html>

<body>
    <img src="imag\photo_01.jpg">
</body>

</html>