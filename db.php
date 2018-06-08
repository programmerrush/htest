<?php
   // connect to mongodb
   $m = new MongoClient(
mongodb://ad:12345q@ds247330.mlab.com:47330/programmerrush5
);
	
   echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
	
   echo "Database mydb selected";
?>
