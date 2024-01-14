<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="../css/htmlphp.css">
</head>
<body>


  <div class="echo-class-div">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <label for="ksywka">Ksywka:</label><br>
      <input type="text" id="ksywka" name="ksywka" value="Ciwek"><br>
      <label for="numerbuta">Numer buta:</label><br>
      <input type="text" id="numerbuta" name="numerbuta" value="44"><br><br>
      <div>
        <input type="radio" id="inne" name="drone" value="Inne" checked />
        <label for="inne">Inne</label>
      </div>
      <div>
        <input type="radio" id="kobieta" name="drone" value="Kobieta" />
        <label for="kobieta">Kobieta</label>
      </div>
      <div>
        <input type="radio" id="mezczyzna" name="drone" value="Mezczyzna" />
        <label for="louie">Mezczyzna</label>
      </div>
      <input type="submit" value="Submit">
    </form>

  </div>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $ksywka = $_POST['ksywka'];
      if (empty($ksywka)) {
          echo "Name is empty";
          echo "<br>";
      } else {
          echo "Ksywka: $ksywka";
          echo "<br>";
      }

      $numerbuta = $_POST['numerbuta'];
      if (empty($numerbuta)) {
          echo "Name is empty";
          echo "<br>";
      } else {
          echo "Numer buta: $numerbuta";
          echo "<br>";
      }

      $drone = $_POST["drone"];
      if (empty($drone)) {
          echo "Name is empty";
          echo "<br>";
      } else {
          echo "Plec: $drone";
          echo "<br>";
      }
  }
  ?>

</body>
</html>
