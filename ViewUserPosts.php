<?php

$mysqli =new mysqli("mysql.eecs.ku.edu", "q527d476", "aafei4ah", "q527d476");
$user_id = $_POST['select'];
$query="SELECT * FROM Posts WHERE author_id= '$user_id'";
if ($mysqli->connect_errno)
{
    die("Connect failed: %s\n". $mysqli->connect_error);
}
if($result = $mysqli->query($query)){
    while($row = $result->fetch_assoc()){
        echo "<table>";
        echo "POST:";
        echo "<tr><td>"."@".$row["post_id"].":".$row["content"]."</td></tr>";
        echo "</table>";
    }
}
$result->free();
$mysqli->close();
?>
