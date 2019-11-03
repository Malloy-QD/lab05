<?php
$mysqli =new mysqli("mysql.eecs.ku.edu", "q527d476", "aafei4ah", "q527d476");
$query = "select * from Users";
if ($mysqli->connect_errno)
{
    die("Connect failed: %s\n". $mysqli->connect_error);
}
if($result = $mysqli->query($query)){
    echo"<table border ='1'>Users<tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['user_id']."</td></tr>";
    }
    echo "</table>";
}
$result->free();
$mysqli->close();
?>
