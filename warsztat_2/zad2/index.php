<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
</head>
<body>
<?php
echo ("Dane osoby rezerwujacej: ");
?>

<FORM method="POST" action="">
    <INPUT TYPE="TEXT" placeholder="NAME*" name="Name" size="10">
    <INPUT TYPE="TEXT" placeholder="SURNAME*" name="Surname" size="10">
    <br>
    <INPUT TYPE="TEXT" placeholder="EMAIL*" name="email" size="26">
    <br>
    <INPUT TYPE="TEXT" placeholder="NR KARTY*" name="nrkarty" size="26">
    <br>
    Arrival*:
    <input type="date" name="arrival_date" value="<?php echo date('Y-m-d'); ?>" />
    <br>
    <br>
    Departure*:
    <input type="date" name="departure_date" value="<?php echo date('Y-m-d'); ?>" />
    <br>
    <br>
    <input TYPE=CHECKBOX VALUE="lozko dzieciene" name="lozko" size="5">
    <label for="lozko">Dodatkowe lozko dzieciece</label>
    <br>
    <input TYPE=CHECKBOX VALUE="klimatyzacja" name="klimatyzacja" size="5">
    <label for="klima">Klimatyzacja</label>
    <br>
    <input TYPE=CHECKBOX VALUE="popielniczka" name="popielniczka" size="5">
    <label for="popielniczka">Popielniczka dla palaczy</label>
    <br>
    Liczba osob*:
    <select name="number_of_people">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <INPUT TYPE=SUBMIT value="Submit">
</FORM>

<?php
echo ("* - required fields");
$number_of_people = $_POST['number_of_people'];
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$arrival_date = $_POST['arrival_date'];
$departure_date = $_POST['departure_date'];
$lozko = $_POST['lozko'];
$klimatyzacja = $_POST['klimatyzacja'];
$popielniczka = $_POST['popielniczka'];

$w = "";
$table = array();

if ($number_of_people == "1")
    $w = $number_of_people;

else if ($number_of_people == "2")
    $w = $number_of_people;

else if ($number_of_people == "3")
    $w = $number_of_people;

else if ($number_of_people == "4")
    $w = $number_of_people;

else 
  echo"Invalid input";

if($lozko == true)
  array_push($table, 'lozko');
if($klimatyzacja == true)
  array_push($table, 'klimatyzacja');
if($popielniczka == true)
  array_push($table, 'popielniczka');

echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("Booking summary: ");
echo ("<br>");
echo ("Name: ");
echo $name;
echo ("<br>");
echo ("Surname: ");
echo $surname;
echo ("<br>");
echo ("Arrival: ");
echo $arrival_date;
echo ("<br>");
echo ("Departure: ");
echo $departure_date;
echo ("<br>");
echo ("Number of people: ");
echo $w;
echo ("<br>");
echo"Aenities";
echo ("<br>");
print_r($table);
?>
</body>
</html>