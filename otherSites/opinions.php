<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="../css/opinions.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div class="background">
    <header>
        <div class="navigation">
            <div class="nav-logo">
                <img src="../img/logo.png" alt="" id="logo-picture" >
            </div>
            <div class="nav-options">
                <div class="nav-option" id="home"><a class="nav-a-style" href="../mainSite.html">Home</a></div>
                <div class="nav-option" id="garage"><a class="nav-a-style" href="garage.php" >Garage</a></div>
                <div class="nav-option" id="contact"><a class="nav-a-style" href="contact.php">Contact</a></div>
                <div class="nav-option" id="opinions"><a class="nav-a-style" style="color: #3BB0D1;" href="opinions.php">Opinions</a></div>
            </div>
        </div>
    </header>


    <?php include '../php/showOpinions.php'; ?>



    <div class="opinions-form">
        <form class ="form-opinion" action="../php/postOpinion.php" method="post">
            <label for="firstname">Imię:</label>
            <input class ="form-input" type="text" id="firstname" name="firstname" required>

            <label for="surname">Nazwisko:</label>
            <input class ="form-input" type="text" id="surname" name="surname" required>
            <div class="radio-div">
                <div class="radio-element">
                    <input type="radio" id="men" name="gender-radio" value="Men">
                    <label for="Men">Men</label><br>
                </div>
                <div class="radio-element">
                    <input type="radio" id="women" name="gender-radio" value="Women">
                    <label for="Women">Women</label><br>
                </div>
                <div class="radio-element">
                    <input type="radio" id="other" name="gender-radio" value="Other">
                    <label for="Other">Other</label>
                </div>
            </div>

            <label for="comment-form">Komentarz:</label>
            <textarea class ="form-textarea" id="comment-form" name="comment-form" required></textarea>

            <input class ="form-button-submit" type="submit" value="Wyślij">
        </form>
    </div>







</div>
</body>
</html>
