
<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "websitephp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//SHOW WITHOUT NESTING
$results = $conn->query("SELECT ID, firstname, lastname, comment, comments.date FROM `comments` ORDER BY comments.date");

if ($results->num_rows > 0) {
    echo "<div class='comments-div'>";
    while ($row = $results->fetch_assoc()) {
        echo " 
        <div class='comment-div'> 
            <div class='bold-art'> " . $row['firstname'] . " " . $row['lastname']  .  " " . $row['date'] ." </div> 
            <div class='comment-row'> ". $row['comment'] ." </div> 
        </div>";
    }
    echo "</div>";
} else {
    echo "Brak opinii.";
}










$conn->close();


/*
 * //ONLY TO TEST
//$result_all = $conn->query("SELECT ID, firstname, lastname, comment, comments.date, ParentID FROM `comments` ORDER BY comments.date");

//ONLY PARENTS - THE HIGEST LEVEL OF COMMENTS
$result_parents = $conn->query("SELECT ID, firstname, lastname, comment, comments.date, ParentID FROM `comments` WHERE comments.ParentID IS NULL ORDER BY comments.date");

//CHECK HOW MUCH LEVELS
$result_nrOfLevels = $conn->query("SELECT MAX(Level) AS maxLevel FROM comments");
if ($result_nrOfLevels->num_rows > 0) {
    $row = $result_nrOfLevels->fetch_assoc();
    $max_parent_level = $row['maxLevel'];
} else {
    $max_parent_level = 0;
}

$children_array = array();
for($x = 0; $x < $max_parent_level; $x++){
    $children_array[$x] = $conn->query("SELECT ID, firstname, lastname, comment, comments.date, ParentID FROM `comments` WHERE comments.Level = '$x' ORDER BY comments.date");
}
 *if ($result_parents->num_rows > 0) {

    echo "<div class='comments-div'>";
    $result_parents_array = array();
    while ($row = $result_parents->fetch_assoc()) {
        $result_parents_array[$row['ID']] = $row;
        echo $row['ID']."</br>";
    }


    foreach ($result_parents_array as $parentID => $parentRow) {
        displayComments($parentID, 1, $max_parent_level, $result_parents_array, $children_array);
    }
    echo "</div>";

    echo $max_parent_level.'<br>';
}
else {
    echo "Brak opinii.";
}



function displayComments($parentID, $level, $max_level, $result_parents, $children_array) {
    echo $parentID."</br>";
    echo $level."</br>";
    echo $result_parents[$parentID]['firstname'].$result_parents[$parentID]['lastname']."</br>";
    echo $children_array."</br>";
    echo "<div class='comment-div' id='nav-fragment-" . $parentID . "'>
        <div class='bold-art'> " . $result_parents[$parentID]['firstname'] . " " . $result_parents[$parentID]['lastname'] . " " . $result_parents[$parentID]['date'] . " </div>
        <div class='comment-row'> " . $result_parents[$parentID]['comment'] . " </div>";

    if ($level < $max_level) {
        foreach ($children_array[$parentID] as $childID) {
            displayComments($childID, $level + 1, $max_level, $result_parents, $children_array);
        }
    }

    echo "</div>";
}
 *
 * */


?>

