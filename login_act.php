<?php
session_start();

//外部ファイルの読み込み
include("functions.php");

$lid = $_POST["lid"];
$lpw = $_POST["lpw"];


//1.DBを接続する
$pdo = db_con();



//try {
//    $pdo = new PDO('mysql:dbname=dict_db;charset=utf8;host=localhost','root','');
//} catch (PDOException $e){
//    exit('DbConnectError:'.$e->getMessage());
//}

//2.データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM dict_user_table WHERE lid=:lid AND lpw=:lpw");
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();
//
//$sql = "SELECT * FROM dict_user_table WHERE lid=:lid AND lpw=:lpw";
//$stmt = $pdo->prepare($sql);
//$stmt->bindValue(':lid', $lid);
//$stmt->bindValue(':lpw', $lpw);
//$res = $stmt->execute();//executeで実行


//$sql = "SELECT * FROM dict_user_table WHERE lid=:lid AND lpw=:lpw";
//$stmt = $pdo->prepare($sql);
//$stmt->bindValue(':lid', $lid);
//$stmt->bindValue(':lpw', $lpw);
//$res = $stmt->execute();//executeで実行


//3.SQL実行時にエラーがある場合の処理

if($res==false){
    queryError($stmt);
}

//if($res==false
//   $error = $stmt->errorInfo();
//    exit ("QueryError:".$error[2]);
   
   
   
//    $error = $stmt->errorInfo();
//    exit("QueryError:".$error[2]);
//
//}

//4.抽出データ数取得
//$count = $stmt->fetchColum();//SELECT COUNT(*)で使用可能
$val = $stmt->fetch();//1レコードだけ取得する方法


//5.該当レコードがあればSESSIONに値を代入

if(
$val["id"]!=""){
    $_SESSION["chk_ssid"] =session_id();
    $_SESSION["name"] = $val['name'];
//    print"a";
    header("Location: select.php");
}else{
    header("Location: logout.php");
//    print"b";
}
exit();

//password_verify($_POST["lpw"],$val["lpw"])){
//    $_SESSION["chk_ssid"] = session_id();
//    $_SESSION["name"]     = $val['name'];
//    header("Location: select.php");
//}else{
//
//
//    header("Location: logout.php");
//}
//exit();


//if( $val["id"]!=""){
//    $_SESSION["chk_ssid"] = session_id();
//    $_SESSION["name"]     = $val['name'];
//    header("Location: select.php");

//if( password_verify($_POST["lpw"],$val["lpw"])){
//  $_SESSION["chk_ssid"]  = session_id();
//  $_SESSION["kanri_flg"] = $val['kanri_flg'];
//  $_SESSION["name"]      = $val['name'];
//  header("Location: select.php");

//}else{
//    //でなければlogout処理を
//    header("Location: logout.php");
//}
//
//exit();

?>