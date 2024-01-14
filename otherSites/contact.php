<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kontakt</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contact.css">

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
          <div class="nav-option" id="contact"><a class="nav-a-style" style="color: #3BB0D1;" href="contact.php">Contact</a></div>
          <div class="nav-option" id="opinions"><a class="nav-a-style" href="opinions.php">Opinions</a></div>
        </div>
      </div>
    </header>

  <div id="contact-content">
    <div id="main-contact-content">
      <h1 id="main-header">Get a quote or schedule a consultation.</h1>
      <h2 class="tit-1">PHONE</h2>
      <h2 class="tit-2">123456789</h2>
      <h2 class="tit-1">EMAIL</h2>
      <h2 class="tit-2">hello@kitty.com</h2>
      <h2 class="tit-1">ADDRESS</h2>
      <h2 class="tit-2">Kraków, Nowohucka 54</h2>
      <h2 class="tit-1">SOCIAL MEDIA</h2>
      <div id="social-div"></div>
      <h1 id="send-email-header">Send email to us</h1>

      <div class="email-container">

            <form id ="form-email" method="post">
            <!--<form id ="form-email" action="../php/sendEmail.php" method="post">-->
              <label for="subject">Subject:</label>
              <input class ="form-input" type="text" id="subject" name="subject" required>

              <label for="sender_name">Name:</label>
              <input class ="form-input" type="text" id="sender_name" name="sender_name" required>

              <label for="sender_email">Email:</label>
              <input class ="form-input" type="text" id="sender_email" name="sender_email" required>

              <label for="message">Question:</label>
              <textarea class ="form-textarea" id="message" name="message" required></textarea>

              <div id="form-button-div">
                <input id ="form-button-submit" type="submit" value="Send" class="g-recaptcha"
                       data-sitekey="reCAPTCHA_site_key"
                       data-callback='onSubmitCaptcha'
                       data-action='submit'>
              </div>
            </form>
          </div>

        </div>
      </div>


    </div>


    </body>
    </html>
