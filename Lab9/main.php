<!DOCTYPE html>
<html lang="en">
<?php 
function GetYfromX($x, $min, $max){
  $array = [];
  $array[3] = 0;
  $array[1] = 100000;
  $array[2] = -10000;
  $array[4]=0;
  for ($x = $min; $x <= $max; $x = $x + $step) {
    $flag = 0;
    array_push($array,$x);
    max($array);
    switch ($x) {
      case ($x <= 10):
        if (($x - 5) == 0) {
          $array[0] = "error";
          $flag = 1;
          break;
        }
        $array[0] = round((6 / ($x - 5)) * $x - 5,2);
        break;
      case ($x > 10 && $x < 20):
        $array[0] = ($x * $x - 1) * $x + 7;
        break;
      case ($x >= 20):
        $array[0] = 4 * $x + 5;
        break;
    }
    echo '<li> f(', $x, ') = ', $array[0], '</li>';
    if ($flag == 0 && $array[0] > $array[1]) $array[1] = $array[0];
    if ($flag == 0 && $array[0] < $array[2]) $array[2] = $array[0];
    if ($flag == 0) $array[3] += $array[0];
  }
 
  if (abs($max) + abs($min)!= 0) $array[4] = round($array[3] / (abs($max) + abs($min)), 2);
  
}
?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet" />
  <title>Лабораторная9</title>
</head>

<body>
  <div id="wrap">
    <header>
      <img src="pics/mospolytech.png" class="logo" />
      <h1>Сыров Максим Евгеньевич</h1>
      <h3>211-361</h3>
      <p>Вариант 7</p>
    </header>
    <main>
      <div class="ttype">
        <form name="type" id="type" method="POST">
          Введите тип верстки: <input type="text" NAME="verstka" id="username" class="text" maxlength="1" /><br>
          Введите левую границу x: <input type="text" NAME="min" id="min" class="number" maxlength="30" /><br>
          Введите правую границу x: <input type="text" NAME="max" id="max" class="number1" maxlength="30" /><br>
          Введите шаг: <input type="text" NAME="step" id="step" class="number1" maxlength="30" /><br>
          <input type="submit">
        </form>
        <?php
        $verstka = " ";
        $max = 0;
        $min = 0;
        $step = 1;
        $verstka = $_POST['verstka'];
        $min = $_POST['min'];
        $max = $_POST['max'];
        $step = $_POST['step'];
        echo '<b>тип верстки ',$verstka, '</b><br>';
        echo '<b>левая граница ',$min, '</b><br>';
        echo '<b>правая граница ',$max, '</b><br>';
        echo '<b>шаг ',$step, '</b><br>';
        ?>

        <?php
        $function = 0;
        $sum = 0;
        $maxVal = -100;
        $minVal = 100000;
        $average = 0;
        switch ($verstka) {
          case 'A':
          case 'a':
            $x = $min;
            while( $x <= $max) {
              $flag = 0;
              switch ($x) {
                case ($x <= 10):
                  if (($x - 5) == 0) {
                    $function = "error";
                    $flag = 1;
                    break;
                  }
                  $function = round((6 / ($x - 5)) * $x - 5,2);
                  break;
                case ($x > 10 && $x < 20):
                  $function = ($x * $x - 1) * $x + 7;
                  break;
                case ($x >= 20):
                  $function = 4 * $x + 5;
                  break;
              }
              echo 'f(', $x, ') = ', $function, '<br>';
              if ($flag == 0 && $function > $maxVal) $maxVal = $function;
              if ($flag == 0 && $function < $minVal) $minVal = $function;
              if ($flag == 0) $sum += $function;
              $x = $x + $step;
            }
            if (abs($max) + abs($min)!= 0) $average = round($sum / (abs($max) + abs($min)), 2);
            echo 'Минимальное значение функции = ', $minVal, '<br>';
            echo 'Максимальное значение функции = ', $maxVal, '<br>';
            echo 'Сумма всех значений = ', $sum, '<br>';
            echo 'Среднее значение = ', $average;
            break;
          case 'b':
          case 'B':
            echo '<ul>';
            $x = $min-1;
            do{
              $x = $x + $step;
              if($x > $max)break;
              $flag = 0;
              switch ($x) {
                case ($x <= 10):
                  if (($x - 5) == 0) {
                    $function = "error";
                    $flag = 1;
                    break;
                  }
                  $function = round((6 / ($x - 5)) * $x - 5,2);
                  break;
                case ($x > 10 && $x < 20):
                  $function = ($x * $x - 1) * $x + 7;
                  break;
                case ($x >= 20):
                  $function = 4 * $x + 5;
                  break;
              }
              echo '<li> f(', $x, ') = ', $function, '</li>';
              if ($flag == 0 && $function > $maxVal) $maxVal = $function;
              if ($flag == 0 && $function < $minVal) $minVal = $function;
              if ($flag == 0) $sum += $function;
            }while($x <= $max);
            echo '</ul>';
            if (abs($max) + abs($min)!= 0) $average = round($sum / (abs($max) + abs($min)), 2);
            echo 'Минимальное значение функции = ', $minVal, '<br>';
            echo 'Максимальное значение функции = ', $maxVal, '<br>';
            echo 'Сумма всех значений = ', $sum, '<br>';
            echo 'Среднее значение = ', $average;
            break;
          case 'c':
          case 'C':
            echo '<ol>';
            for ($x = $min; $x <= $max; $x = $x + $step) {
              $flag = 0;
              switch ($x) {
                case ($x <= 10):
                  if (($x - 5) == 0) {
                    $function = "error";
                    $flag = 1;
                    break;
                  }
                  $function = round((6 / ($x - 5)) * $x - 5,2);
                  break;
                case ($x > 10 && $x < 20):
                  $function = ($x * $x - 1) * $x + 7;
                  break;
                case ($x >= 20):
                  $function = 4 * $x + 5;
                  break;
              }
              echo '<li> f(', $x, ') = ', $function, '</li>';
              if ($flag == 0 && $function > $maxVal) $maxVal = $function;
              if ($flag == 0 && $function < $minVal) $minVal = $function;
              if ($flag == 0) $sum += $function;
            }
            echo '</ol>';
            if (abs($max) + abs($min)!= 0) $average = round($sum / (abs($max) + abs($min)), 2);
            echo 'Минимальное значение функции = ', $minVal, '<br>';
            echo 'Максимальное значение функции = ', $maxVal, '<br>';
            echo 'Сумма всех значений = ', $sum, '<br>';
            echo 'Среднее значение = ', $average;
            break;
          case 'd':
          case 'D':
            echo '<table >';
            echo '<tr>';
            echo '<th> Номер строки таблицы </th>';
            echo '<th> Значения аргументов </th>';
            echo '<th> Значения функции </th>';
            echo '</tr>';
            $i = 0;
            for ($x = $min; $x <= $max; $x = $x + $step) {
              $flag = 0;

              switch ($x) {
                case ($x <= 10):
                  if (($x - 5) == 0) {
                    $function = "error";
                    $flag = 1;
                    break;
                  }
                  $function = round((6 / ($x - 5)) * $x - 5,2);
                  break;
                case ($x > 10 && $x < 20):
                  $function = ($x * $x - 1) * $x + 7;
                  break;
                case ($x >= 20):
                  $function = 4 * $x + 5;
                  break;
              }
              echo '<tr>';
              echo '<td>', $i, '</td>';
              $i++;
              echo '<td> ', $x, ' </td>';
              echo '<td> ', $function, ' </td>';
              echo '</tr>';
              if ($flag == 0 && $function > $maxVal) $maxVal = $function;
              if ($flag == 0 && $function < $minVal) $minVal = $function;
              if ($flag == 0) $sum += $function;
            }
            echo '</table>';
            if (abs($max) + abs($min)!= 0) $average = round($sum / (abs($max) + abs($min)), 2);
            echo 'Минимальное значение функции = ', $minVal, '<br>';
            echo 'Максимальное значение функции = ', $maxVal, '<br>';
            echo 'Сумма всех значений = ', $sum, '<br>';
            echo 'Среднее значение = ', $average;
            break;
          case 'e':
          case 'E':
            for ($x = $min; $x <= $max; $x = $x + $step) {
              echo '<div class = "creative" >';
              $flag = 0;
              switch ($x) {
                case ($x <= 10):
                  if (($x - 5) == 0) {
                    $function = "error";
                    $flag = 1;
                    break;
                  }
                  $function = round((6 / ($x - 5)) * $x - 5,2);
                  break;
                case ($x > 10 && $x < 20):
                  $function = ($x * $x - 1) * $x + 7;
                  break;
                case ($x >= 20):
                  $function = 4 * $x + 5;
                  break;
              }
              echo 'f(', $x, ') = ', $function, '</div>';
              if ($flag == 0 && $function > $maxVal) $maxVal = $function;
              if ($flag == 0 && $function < $minVal) $minVal = $function;
              if ($flag == 0) $sum += $function;
            }
            if (abs($max) + abs($min) != 0) $average = round($sum / (abs($max) + abs($min)), 2);
            echo '<br>Минимальное значение функции = ', $minVal, '<br>';
            echo 'Максимальное значение функции = ', $maxVal, '<br>';
            echo 'Сумма всех значений = ', $sum, '<br>';
            echo 'Среднее значение = ', $average;
            break;
          default:
            

        }
        ?>
      </div>
    </main>
    <footer>&copy;Сыров.М.Е, 2022 <br />Сформированно: 24.11.2022</footer>
  </div>
</body>

</html>