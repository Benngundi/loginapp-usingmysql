<?php
$db_connection = mysqli_connect("localhost","root","","login");
if (mysqli_connect_errno()){
    echo" failed to connect to my sql: ". mysqli_connect_error();
}
?>

