<?php
date_default_timezone_set('asia/kolkata');
$dbhost   = "localhost";
$dbuser   = "dbadmin";
$dbpwd    = "password";
$dbname   = "db_ftms_eoffice_26";
$dumpfile = "database/".$dbname . "_" . date("Y-m-d_H-i-s") . ".sql";

shell_exec("/usr/bin/mysqldump --opt --host=$dbhost --user=$dbuser --password=$dbpwd $dbname > $dumpfile");

// report - disable with // if not needed
// must look like "-- Dump completed on ..." 

echo "$dumpfile ";
echo shell_exec("tail -1 $dumpfile");

?>
