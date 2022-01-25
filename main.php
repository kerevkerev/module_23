<?php
include './getFullnameFromParts.php';
include './getPartsFromFullname.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Генератор случайных пользователей</title>
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
          <td>«Иванов», «Иван» и «Иванович»</td>
          <td><?php getFullnameFromParts('Иванов', 'Иван', 'Иванович'); ?></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>getPartsFromFullname</td>
          <td>Иванов Иван Иванович</td>
          <td><?php getPartsFromFullname($str); ?></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>getPartsFromFullname</td>
          <td>Иванов Иван Иванович</td>
          <td><?php getPartsFromFullname($str); ?></td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="personGenerator.js"></script>
  <script src="init.js"></script>
</body>

</html>