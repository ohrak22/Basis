<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <h1>로그인 PHP 2</h1>
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "1111"){
        echo "주인님 환영합니다";
    } else {
        echo "뉘신지?";
    }
   ?>
</body>
</html>
