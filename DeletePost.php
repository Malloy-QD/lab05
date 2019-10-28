<?php
$post_id=$_POST['del'];
$final= implode(",",$post_id);
$mysqli =new mysqli("mysql.eecs.ku.edu\", \"q527d476\", \"aafei4ah\", \"q527d476");
if(count($post_id)==0)
{
    echo "Choose which one to delete";
}
else {
    if ($mysqli->connect_errno) {
        die("Connect failed: %s\n" . $mysqli->connect_error);
    }
    for($i=0;$i<count($post_id);$i++){
        $current = $post_id[$i];
        $query = "DELETE FROM Posts WHERE post_id ='$current'";
        if($result = $mysqli->query($query)){
            echo "Successfully deleted the post:".$current."<br>";
        }
    }
}
$mysqli->close();
?>