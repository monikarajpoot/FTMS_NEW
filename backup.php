<html>
<head>
<head> <meta http-equiv="refresh" content="3000" /> </head>
</head>
<body>
<?php
error_reporting(E_ALL);
date_default_timezone_set("Asia/Calcutta");		
error_reporting(E_ALL);
$dbhost = "localhost";
$dbuser = "dbadmin";
$dbpass = "password";
$dbname = "db_ftms_testt";
// --- End: Function for creating Zip file --- //


	// DataBase Daily Backup
	$dumpfname = $dbname.date("Y-m-d-H-i-s") . '.sql';
	$backup_file = "/opt/rh/httpd24/root/var/www/html/ftms_live/database/".$dumpfname;

 	//passthru("mysqldump --opt --host=$dbhost --user=$dbuser --password=$dbpass $dbname > $backup_file");
	exec('mysqldump --user=$dbuser --password=$dbpass --host=$dbhost  $dbname >$dbpass $dbname > $backup_file');

echo passthru("mysqldump -h $dbhost -u $dbuser --password=\"$dbpass\" $dbname > $backup_file");

echo $backup_file;

?>
</body>
</html>