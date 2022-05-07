<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Caltulator</title>
</head>

<body>
  <?php
  $first_num = $_POST['first_num'];
  $second_num = $_POST['second_num'];
  $operator = $_POST['operator'];
  $result = '';
  if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
      case "Add":
        $result = $first_num + $second_num;
        break;
      case "Subtract":
        $result = $first_num - $second_num;
        break;
      case "Multiply":
        $result = $first_num * $second_num;
        break;
      case "Divide":
        $result = $first_num / $second_num;
    }
  }
  if (is_dir("./calculator_results")) {
    echo "file exists";
  } else {
    mkdir("./calculator_results");
  }

  if (!$fopen_dir = opendir("./calculator_results"))
    echo "Could not open directory";
  else {
    if (!$file = fopen("./calculator_results/results.txt", "r+"))
      echo "Error while opening the file";
    else {
      if (fwrite($file, $result) === false)
        echo "Error while writting in to file";
      else
        echo "Added result into file";
    }
    fclose($file);
  }


  ?>
  <div id="page-wrap">
    <h1>PHP - Simple Calculator Program</h1>
    <form action="" method="post" id="quiz-form">
      <p>
        <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
      </p>
      <p>
        <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
      </p>
      <p>
        <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
      </p>
      <input type="submit" name="operator" value="Add" />
      <input type="submit" name="operator" value="Subtract" />
      <input type="submit" name="operator" value="Multiply" />
      <input type="submit" name="operator" value="Divide" />
    </form>
  </div>
</body>

</html>