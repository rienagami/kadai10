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
   <form name="form1" action="login_act.php" method="post">
   ID:<input  type="text" name="lid" />
   PASS:<input type="password" name="lpw" />
   <input type="submit" value="LOGIN"><br>
   </form>
</div>
   
<div>
   <a href="user_index.php">サインイン</a>
</div>

</div>
</body>
</html>