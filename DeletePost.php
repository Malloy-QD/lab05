<?php
$mysqli =new mysqli("mysql.eecs.ku.edu", "q527d476", "aafei4ah", "q527d476");

$select=$_POST['select'];
    if ($mysqli->connect_errno) {
        die("Connect failed: %s\n" . $mysqli->connect_error);
    }
    foreach($select as $delete){
        $query = "DELETE FROM Posts WHERE post_id ='$delete'";
        if($result = $mysqli->query($query)){
            echo "Successfully deleted the post:".$delete."<br>";
        }
    }

$mysqli->close();
?>
