<?php

session_start();

include("functions.php");
ssidChk();

try{
    
    $pdo = new
    PDO('mysql:dbname=dict_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。' .$e->getMessage());
}


//データ登録SQL
$stmt = $pdo->prepare("SELECT * FROM dict_user_table");
$status = $stmt->execute();

//データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC))
   {
//    $view .= 'ここにユーザートップページ';
    
    
    
    
    }
  
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ユーザートップページ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/dict.css">
</head>
<body>
  
   
 <header>
       <nav>
           <div >
<!--<img class="head" src="img/dictorange.png" alt="">-->
           </div>
       </nav>
   </header>
<!--   headerここまで-->
<!--   ここからメイン-->
  
<!--ここでnameをひっぱ  -->
  <div>ようこそ<?=$_SESSION["name"]?>さん</div>
  <div>
    <div>
   <a href="logout.php">ログアウト</a>
</div>
    <div>
   <a href="mypage.php">マイページ</a>
</div>
     
      <div><?=$view?></div>
  </div>
  

</body>
</html>