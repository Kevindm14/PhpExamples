<!DOCTYPE html>
<html>
<head>
  <title>Operations</title>
</head>
<body>
  <form name="form1" method="post" action="operations.php">
    <input type="text" name="number1" id="number1">
    <input type="text" name="number2" id="number2">
    <select name="operation" id="operation">
      <option value"">Please select</option>
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicacion</option>
      <option>Division</option>
      <option>Modulo</option>
    </select>
    <input type="submit" name="button" id="button" value="Send" onClick="test" >
  </form>

  <?php

    if(isset($_POST['button'])){

      $num1 = $_POST['number1'];
      $num2 = $_POST['number2'];
      $result = $_POST['operation'];

      switch ($result) {
        case 'Suma':
          echo "The result is: " . ($num1 + $num2);
          break;
        case 'Resta':
          echo "The result is: " . ($num1 - $num2);
          break;
        case 'Multiplicacion':
          echo "The result is: " . ($num1 * $num2);
          break;
        case 'Division':
          echo "The result is: " . ($num1 / $num2);
          break;
        case 'Modulo':
          echo "The result is: " . ($num1 % $num2);
          break;
        default:
          echo "Elige una operacion!";
          break;
      }
    }

  ?>

</body>
</html>
