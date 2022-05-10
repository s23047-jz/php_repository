<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
      background-color: #222;
      color: white;
    }

    form {
      display: block;
      margin: 0 auto;
      width: 300px;
      min-height: 40vh;
      background-color: #444;
      text-align: center;
      justify-content: center;
      align-items: center;
    }

    form input {
      margin-top: 40%;
      width: 70%;
      margin: 5px;
      padding: 10px;
      font-size: 20px;
      background-color: #666;
      color: #fff;
      border-radius: 20px;
    }

    form button {
      font-size: 20px;
      width: 40%;
      margin-top: 20px;
      padding: 10px;
      transition: .3s;
      border-radius: 20px;
      background: transparent;
      border: 2px solid white;
      color: white;
    }

    form button:hover {
      box-shadow: 0 0 5px 10px royalblue;
      background-color: royalblue;
    }
  </style>
</head>

<?php
if (isset($_COOKIE['username'])) {
  setcookie("user", "");
}
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username == "" || $password == "") {
    echo "<script type='text/javascript'>alert('Empty fields!');</script>";
  } else {
    $cookie_name = "user";
    setcookie($cookie_name, $username, time() + (86400 * 30), "/");
    echo "<script type='text/javascript'>window.top.location='http://localhost:8080/zajecia4_cookies/zad1/count_page.php/';</script>";
    exit;
  }
}

?>

<body>
  <form method="post">
    <input type="text" name="username" placeholder="username" />
    <input type="password" name="password" placeholder="password" />
    <button type="submit" name='login'>Login</button>
  </form>
</body>



</html>