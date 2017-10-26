<?php
$id = $_GET["id"];


//DB接続
try{
    $pdo = new
    PDO('mysql:dbname=dict_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e){
  exit('データベースに接続できませんでした。'.$e->getMessage());
}



//SQL作成と実行
$stmt = $pdo->prepare("DELETE FROM dict_user_table WHERE id=:id");
$stmt->bindValue(':id',$id);
$status = $stmt->execute();


//Errorチェック＆エラーがなければuser.phpへ
if($status==false){
    
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: user.php");
    exit;
}


?>