<?php
include "connection.php";
$No = $_GET['No'];
$delete = mysql_query("DELETE FROM list_of_book WHERE No = '$No'");
if(!$delete) {
    echo mysql_error();
}
else { 
    header("Location: update.php");
}
?>