<?php
include '../php/dbCarsService.php';
//DB service
$conn = connectToDatabase();
$cars = fetchCarsFromDatabase($conn);
closeDatabaseConnection($conn);

$carsJson = json_encode($cars);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciwi Automotive - Garage</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.cdnfonts.com/css/racing-sans-one" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Public Sans' rel='stylesheet'>
    <script src='../js/firstCreate.js'></script>
    <script src='../js/showCars.js'></script>
    <script>
        var cars = <?php echo $carsJson; ?>;
        console.log(cars);
        var currentIndex = 0;
    </script>
</head>
<body onload="firstCreate()">

    <div class="background">
        <header>
            <div class="navigation">
                <div class="nav-logo">
                    <img src="../img/logo.png" alt="" id="logo-picture" >
                </div>
                <div class="nav-options">
                    <div class="nav-option" id="home"><a class="nav-a-style" href="../mainSite.html">Home</a></div>
                    <div class="nav-option" id="garage"><a class="nav-a-style" style="color: #3BB0D1;"  href="garage.php" >Garage</a></div>
                    <div class="nav-option" id="contact"><a class="nav-a-style" href="contact.php">Contact</a></div>
                    <div class="nav-option" id="opinions"><a class="nav-a-style" href="opinions.php">Opinions</a></div>
                </div>
            </div>
        </header>

        <div id="garage-content">
            <!-- dynamic JS content -->
        </div>


    </div>



</body>
</html>
