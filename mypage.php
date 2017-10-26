<?php
//マイページはどう作るんだろう？
//さらにマイページから登録内容を変更する画面へ行きたいのだけれど
//detail.phpだとDB上全ての情報が出てきてしまう・・・。
//どうしたらログインユーザーだけの情報を持ってこられるのだろう？
session_start();







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/dict.css">
</head>
<body>
 
<div class="total">
   
   <img class="logo" src="img/dictorange.png">

   
<div>
   <a href="user.php">登録内容を確認・編集する</a>
</div>

</div>
</body>
</html>