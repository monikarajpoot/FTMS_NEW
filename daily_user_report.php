<?php 
//error_reporting(E_ALL);
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
/*Database Setting*/
$servername = "localhost";
$username = "dbadmin";
$password = "password";
$dbname = "db_ftms_eoffice_dev_18";
/*Database Setting*/

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$date_day = date('Y-m-d');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$rec_query = "SELECT `emp_id` , (SELECT count(file_id) as pending_file FROM `ft_files` WHERE file_hardcopy_status!='close' and `file_received_emp_id`= ft_employee.emp_id) as pending_file , (SELECT count(ft_file_movements.fmove_file_id) as today_dispatch FROM ft_file_movements join ft_files on ft_files.file_id = ft_file_movements.fmove_file_id where ft_file_movements.fmove_previous_user_id = ft_employee.emp_id and date(`fmove_created_datetime`) = '".$date_day."' and (`fmove_current_user_id`!=`fmove_previous_user_id` || (`fmove_current_user_id`=`fmove_previous_user_id` and ft_file_movements.file_return = '2' and ft_files.file_hardcopy_status = 'close'))) as work_done FROM `ft_employee` WHERE `role_id` IN (3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,26,31,33,37,38,39,41) and ft_employee.emp_status = '1' and ft_employee.emp_is_retired = '0' and ft_employee.emp_posting_location = '1' order by emp_id ASC";
$record_report = $conn->query($rec_query);

    while($row = $record_report->fetch_array()) {		
		$insert_sql = "INSERT INTO `ft_daily_user_report`(`report_user_id`, `report_pending_file`, `report_dispatch_file` , `report_datetime`) VALUES (".$row["emp_id"].",".$row["pending_file"].",".$row["work_done"]." , '".$date."')";
		$conn->query($insert_sql);
    }

$conn->close();

?>