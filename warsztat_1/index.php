<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zajecia1</title>
</head>

<body>
  <?php
  echo ("Witaj w swiecie PHP");
  echo ("<br> Zad2 <br>");
  $a = 4;
  $b = 3;
  $c = 2;
  echo ("Pole prostokata rowna sie: " . $a * $b);
  echo ("<br> Zad3 <br>");
  $przed_pierwiastek = 11;
  echo ("Pierwiastek z liczby jest rowny: " . round(sqrt($przed_pierwiastek), 2));
  echo ("<br> Zad4 <br>");
  $x = 5;
  $y = 4;
  echo ("addition: " . $x + $y . " subtraction: " . $x - $y . " multiplication: " . $x * $y . "division modulo: " . $x % $y);
  echo ("<br> Zad5 <br>");
  $napis1 = "napis1";
  $napis2 = "napis2";
  echo ("%" . $napis2 . $napis1 . "%$#");
  echo "<br> Zad6 <br>";
  $tr1 = 3;
  $tr2 = 4;
  $tr3 = 5;
  if ($tr1 + $tr2 > $tr3 && $tr1 + $tr3 > $tr2 && $tr2 + $tr3 > $tr1)
    echo ("Mozna zbudowac trojkat z tych liczb");
  else
    echo "nie mozna zbudowac trojkata";
  echo "<br> Zad7 <br>";
  $miesiac = 3;
  switch ($miesiac) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
      echo ("miesiace ma 31 dni");
      break;
    case 2:
      echo "miesiac ma 29dni";
      break;
    case 4:
    case 6:
    case 9:
    case 11:
      echo "miesiac ma 30 dni";
      break;
    default:
      echo "Invalid month value. Please enter between 1-12";
      break;
  }
  echo "<br> Zad8 <br>";

  if ($a < $b && $b < $c) {
    echo " $a $b $c $c $b $a";
  } elseif ($a < $c && $c < $b) {
    echo " $a $c $b $b $c $a";
  } elseif ($b < $a && $a < $c) {
    echo " $b $a $c $c $a $b";
  } elseif ($b < $c && $c < $a) {
    echo "$b $c $a $a $c $b";
  } elseif ($c < $b && $b < $a) {
    echo " $c $b $a $a $b $c";
  } elseif ($c < $a && $a < $b) {
    echo " $c $a $b $b $a $c";
  }

  echo "<br> Zad9 <br>";

  $tab[0] = 5;
  $tab[1] = 4;
  $tab[2] = 3;
  $tab[3] = 2;
  $tab[4] = 1;

  $tab1[0] = 1;
  $tab1[1] = 2;
  $tab1[2] = 3;
  $tab1[3] = 4;
  $tab1[4] = 5;

  $wynik = 0;

  for ($i = 0; $i <= 4; $i++) {
    $wynik += $tab[$i] * $tab1[$i];
    echo "\n" . $wynik;
  }

  echo "<br> Zad10 <br>";
  $loop_number = 3;
  function print_star($number)
  {
    for ($i = 1; $i <= $number; $i++) {
      for ($j = 0; $j < $i; $j++) {
        echo ("*");
      }
      echo "<br>";
    }
    for ($i = $number; $i >= 0; $i--) {
      for ($j = $i; $j > 0; $j--) {
        echo ("*");
      }
      if ($i == 1)
        echo ("");
      else
        echo "<br>";
    }

    for ($i = $number; $i >= 0; $i--) {
      for ($j = $number; $j > $i; $j--)
        echo ("&nbsp&nbsp");
      for ($j = $i; $j > 0; $j--) {
        if ($j > $i)
          echo ("*");
        else {
          echo ("*");
        }
      }
      if ($i == 1)
        echo ("");
      else
        echo "<br>";
    }

    for ($i = 1; $i <= $number; $i++) {
      for ($j = $number; $j > $i; $j--)
        echo ("&nbsp&nbsp");
      for ($j = 0; $j < $i; $j++) {
        if ($j > $i)
          echo ("*");
        else {
          echo ("*");
        }
      }
      echo "<br>";
    }
  }

  print_star($loop_number);

  echo "<br> Zad11 <br>";

  function isPangram($input)
  {
    $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $isPangram = false;
    $array = str_split($input);
    foreach ($array as $char) {
      if (ctype_alpha($char)) {
        if (ctype_upper($char)) {
          $char = strtolower($char);
        }
        $key = array_search($char, $alphabet);
        if ($key !== false) {
          unset($alphabet[$key]);
        }
      }
    }
    if (!$alphabet) {
      $isPangram = true;
    }
    return $isPangram;
  }
  $text = "The quick brown fox jumps over the lazy dog";
  echo (isPangram($text));

  ?>
</body>

</html>