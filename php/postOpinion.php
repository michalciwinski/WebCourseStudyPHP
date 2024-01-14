<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/htmlphp.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['surname'];
    $comment = $_POST['comment-form'];
    $gender = $_POST['gender-radio'];
    if($gender == "Men"){
        $gendernr = 1;
    }
    elseif ($gender == "Women"){
        $gendernr = 2;
    }
    elseif ($gender == "Other"){
        $gendernr = 3;
    }

    $date_and_time = date("Y-m-d H:i:s");
    echo $date_and_time;
    // Create connection
    $servername = "localhost";
    $username = "user";
    $password = "password";
    $dbname = "websitephp";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO comments (firstname, lastname, comment, date, gender_id_fk)
        VALUES ('$firstname', '$lastname', '$comment', '$date_and_time', $gendernr)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    echo "Thank You for your opinion $firstname $lastname" ;
    echo "<br>";

    //<?php
    echo "<script>
            setTimeout(function() {
                window.location.href = '../otherSites/opinions.php'; 
            }, 3000);  
          </script>";
} else {
    echo "Error, please try again later.";
    echo "<script>
            setTimeout(function() {
                window.location.href = '../otherSites/opinions.php'; 
            }, 3000);  
          </script>";
}
?>

</body>
</html>