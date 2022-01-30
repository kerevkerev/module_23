<?php
include './getFullnameFromParts.php';
include './getPartsFromFullname.php';
include './getShortName.php';
include './getGenderFromName.php';
include './getGenderDescription.php';
include './getPerfectPartner.php';
include './example_persons_array.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Итоговая работа модуля 23 "Типы данных "</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
  <div class="container">

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Функция</th>
          <th scope="col">Входные параментры</th>
          <th scope="col">Результат</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>getFullnameFromParts</td>
          <td>«Иванов», «Иван» «Иванович»</td>
          <td><?php echo '<pre>';
              print_r(getFullnameFromParts('Иванов', 'Иван', 'Иванович'));
              echo '</pre>'; ?></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>getPartsFromFullname</td>
          <td><?php echo $str ?></td>
          <td><?php echo '<pre>';
              print_r(getPartsFromFullname($str));
              echo '</pre>'; ?></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>getShortName</td>
          <td><?php echo $strCut ?></td>
          <td><?php echo '<pre>';
              print_r(getShortName($strCut));
              echo '</pre>'; ?></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>getGenderFromName</td>
          <td><?php echo $genderByName ?></td>
          <td><?php echo '<pre>';
              print_r(getGenderFromName($genderByName));
              echo '</pre>'; ?></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>getGenderDescription</td>
          <td><?php echo 'Массив: example_persons_array' ?></td>
          <td><?php echo '<pre>';
              echo getGenderDescription($example_persons_array);
              echo '</pre>'; ?></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>getPerfectPartnern</td>
          <td><?php echo 'Иванова Жанна Ивановна' ?></td>
          <td><?php echo '<pre>';
              print_r(getPerfectPartner('Иванова', 'Жанна', 'Ивановна', $example_persons_array));
              echo '</pre>'; ?></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

</html>