<?php
////外部ファイル読み込み
//include("functions.php");
//登録はできるが文字化けした状態で登録されている。

if(
!isset($_POST["name"]) || $_POST["name"]=="" ||
!isset($_POST["native"]) || $_POST["native"]=="" ||
!isset($_POST["practicing"]) || $_POST["practicing"]=="" ||
!isset($_POST["email"]) || $_POST["email"]=="" ||
!isset($_POST["lid"]) || $_POST["lid"]=="" ||
!isset($_POST["lpw"]) || $_POST["lpw"]==""
    ){
    exit('ParamError');
}

//1.POSTデータ取得
$name       = $_POST["name"];
$country    = $_POST["country"];
$town       = $_POST["town"];
$gender     = $_POST["gender"];
$native     = $_POST["native"];
$practicing = $_POST["practicing"];
$image      = $_POST["image"];
$description= $_POST["description"];
$email      = $_POST["email"];
$lid        = $_POST["lid"];
$lpw        = $_POST["lpw"];


//2 DBを接続
//$pdo = db_con();
////ハッシュ化？？？？とは？？？
//$pw = password_hash("test3", PASSWORD_DEFAULT);
try{
$pdo = new
PDO('mysql:dbname=dict_db;charset=utf8;host=localhost','root','');
}catch(PDOEception $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//3 データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO dict_user_table(id, name, country, town, gender, native, practicing, image, description, email, lid, lpw, indate)VALUES(NULL, :name, :country, :town, :gender, :native, :practicing, :image, :description, :email, :lid, :lpw, sysdate())");


$stmt->bindValue(':name',$name);
$stmt->bindValue(':country',$country);
$stmt->bindValue(':town',$town);
$stmt->bindValue(':gender',$gender);
$stmt->bindValue(':native',$native);
$stmt->bindValue(':practicing',$practicing);
$stmt->bindValue(':image',$image);
$stmt->bindValue(':description',$description);
$stmt->bindValue(':email',$email);
$stmt->bindValue(':lid',$lid);
$stmt->bindValue(':lpw',$lpw);
$status = $stmt->execute();


//データ登録後処理
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: user_index.php");
    exit;
}

?>
