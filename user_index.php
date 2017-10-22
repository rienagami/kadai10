<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>サインイン画面</title>
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
   
   <header>
       <nav><a href="login.php">TOP</a></nav>
   </header>
    
    <form action="user_insert.php" method="post">
       <fielset>
           <legend>サインイン</legend>
           <label>名前<input type="text" name="name"></label><br>
           <label>出身国<input type="text" name="country"></label><br>
           <label>出身地<input type="text" name="town"></label><br>
           <label>性別<input type="text" name="gender"></label><br>
           <label>話す言語<input type="text" name="native"></label><br>
           <label>勉強している言語<input type="text" name="practicing"></label><br>
           <label>画像<input type="file" name="image"></label><br>
           <label>自己紹介<input type="text" name="description"></label><br>
           <label>email<input type="text" name="email"></label><br>
           <label>ログイン ID<input type="text" name="lid"></label><br>
            <label>パスワード<input type="password"
           name="lpw"></label><br>
           <input type="submit" value="サインイン">
           

       </fielset>
        
        
   
    </form>
</body>
</html>