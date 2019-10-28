<?php
$user_id=$_POST['user_id'];
$content=$_POST['content'];
$query = "SELECT user_id FROM Users WHERE user_id='$user_id'";
$mysqli =new mysqli("mysql.eecs.ku.edu\", \"q527d476\", \"aafei4ah\", \"q527d476");
$result = $mysqli->query($query);
if ($mysqli->connect_errno)
{
    die("Connect failed: %s\n". $mysqli->connect_error);
}
if($user_id==""){
    echo "Empty user ID!";
}
if(content==""){
    echo "Empty content!";
}
else {
    if ($result->num_rows > 0) {
        $query = "INSERT INTO Posts(content,author_id) VALUES ('$content','$user_id')";
        echo "Successfully added a post";
    } else {
        echo "Cannot find the username";
    }
}
    $result->free();
    $mysqli->close();
?>
