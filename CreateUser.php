<?php
$user_id = $_POST["user_id"];
$query = "INSERT INTO Users(user_id) VALUES ('user_id')";
$mysqli =new mysqli("mysql.eecs.ku.edu\", \"q527d476\", \"aafei4ah\", \"q527d476");
if ($mysqli->connect_errno)
{
    die("Connect failed: %s\n". $mysqli->connect_error);
}
if($user_id ==""){
    echo('Enter a valid username');
}
elseif($result = $mysqli->query($query)){
    echo('Successfully added a new username');
}

$result->free();
$mysqli->close();
?>