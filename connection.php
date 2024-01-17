<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','booklist');
$dbc=@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) OR die ('Could not connect to MYSQL:'.mysql_error());
@mysql_select_db (DB_NAME) OR die ('Could not select the database: '.mysql_error());
if(!$dbc) {
    echo "not connected";
}
else {
    echo "";
}
$sysname="E-Books Management System";
?>