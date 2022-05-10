<html>

<head>
  <title>Couter page</title>
</head>

<body>
  <?php
  if (!isset($_COOKIE['count'])) {
    echo "Welcome " .  $_COOKIE['user'] . " This is the first time you have viewed this page.";
    $cookie = 1;
    setcookie("count", $cookie);
  } else {
    $page = $_SESSION['count_page.php'];
    if ($page != "homepage") {
      $cookie = ++$_COOKIE['count'];
      setcookie("count", $cookie);
      echo "You have viewed this page " . $_COOKIE['count'] . " times. Very nice " . $_COOKIE['user'];
    } else {
      echo "Nothing increase " . $_COOKIE['count'] . " times. Very nice " . $_COOKIE['user'];
    }
  }
  if ($_COOKIE['count'] == 20) {
    setcookie('count', '');
    setcookie('user', '');
    echo "<script type='text/javascript'>alert('Nice, You have been here 20 times. Now we gonna logout You!');</script>";
    echo "<script type='text/javascript'>window.top.location='http://localhost:8080/zajecia4_cookies/zad1/';</script>";
    exit;
  }
  ?>
</body>

</html>