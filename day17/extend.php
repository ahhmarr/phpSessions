<?php
require_once 'database.php';
$res=$db->query("select * from blogs");
echo "total no of rows returned".$db->totRows;


?>