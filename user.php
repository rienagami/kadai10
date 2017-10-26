<?
//これは登録ユーザーを一覧に表示させるページ
try{
    $pdo = new
    PDO('mysql:dbname=dict_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e){
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//2データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM dict_user_table");
$status = $stmt->execute();


//データ表示
$view="";
if($status==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<p>';
        $view .='<a href="detail.php?id='.$result["id"].'">';
        $view .=$result["name"]."
        [".$result["indate"]."]<br>";
        $view .='</a> ';
        
        
//デリート処理の時に書いた
        $view .='<a href="delete.php?id='.$result["id"].'">';
        $view .='[削除]';
        $view .='</a>';
        $view .='</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/dict.css">
</head>
<body>
    
 
    
    
 <div>
            <div class="container jumbotron">
                <?=$view?>
            </div>
</div>   
    
    
    
    
    
</body>
</html>














