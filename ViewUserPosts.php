<?php

$mysqli =new mysqli("mysql.eecs.ku.edu", "q527d476", "aafei4ah", "q527d476");
$user_id = $_POST['select'];
$post="SELECT content FROM Posts WHERE author_id= $user_id";
if ($mysqli->connect_errno)
{
    die("Connect failed: %s\n". $mysqli->connect_error);
}
echo "<table>";
echo "POST:";
if($result = $mysqli->query($post))
{
    while($row = $result->fetch_assoc())
    {
      echo "<tr>";
      echo "<td>".$row['content']."</td>";
      echo "</tr>";
    }

    $result->free();
}

        echo "</table>";

$mysqli->close();
?>
