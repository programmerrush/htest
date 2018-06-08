<?php
require_once "vendor/autoload.php";

   // connect to mongodb
   $m = new MongoClient("mongodb://ad:12345q@ds247330.mlab.com:47330/programmerrush5");
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->programmerrush5;
	
   echo "Database mydb selected";
?>
