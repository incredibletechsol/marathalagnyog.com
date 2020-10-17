<?php
error_reporting(0);
date_default_timezone_set('Asia/Calcutta');

backupTables('localhost','incredib_matrimony','Incr254@#$','incredib_marathalagnyog');
sendMail();

function sendMail() {
include('/home/incredib/public_html/MyApps/Clientbackup/phpmailer/class.phpmailer.php');
$content = 'All Clients Database Backup Done Sucessfully....';
$email = new PHPMailer();
$email->From      = 'incredib@lin6.plreseller.com';
$email->FromName  = 'MarathaLagnyog';
$email->Subject   = 'MarathaLagnyog Database Backup';
$email->Body      = $content;
$email->AddAddress( 'marathalagnyog@gmail.com' );

$file = '/home/incredib/public_html/marathalagnyog.com/database/marathalagnyog.sql';

$email->AddAttachment( $file, 'marathalagnyog.sql' );

$b=$email->Send();
 
}

function backupTables($host,$username,$password,$database_name){

// Get connection object and set the charset
$conn = mysqli_connect($host, $username, $password, $database_name);
$conn->set_charset("utf8");


// Get All Table Names From the Database
$tables = array();
$sql = "SHOW TABLES";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_row($result)) {
    $tables[] = $row[0];
}

$sqlScript = "";
foreach ($tables as $table) {
    
    // Prepare SQLscript for creating table structure
    $query = "SHOW CREATE TABLE $table";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    
    $sqlScript .= "\n\n" . $row[1] . ";\n\n";
    
    
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    
    $columnCount = mysqli_num_fields($result);
    
    // Prepare SQLscript for dumping data for each table
    for ($i = 0; $i < $columnCount; $i ++) {
        while ($row = mysqli_fetch_row($result)) {
            $sqlScript .= "INSERT INTO $table VALUES(";
            for ($j = 0; $j < $columnCount; $j ++) {
                $row[$j] = $row[$j];
                
                if (isset($row[$j])) {
                    $sqlScript .= '"' . $row[$j] . '"';
                } else {
                    $sqlScript .= '""';
                }
                if ($j < ($columnCount - 1)) {
                    $sqlScript .= ',';
                }
            }
            $sqlScript .= ");\n";
        }
    }
    
    $sqlScript .= "\n"; 
}

if(!empty($sqlScript))
    {
    array_map('unlink', glob("/home/incredib/public_html/marathalagnyog.com/database/*"));    
    // Save the SQL script to a backup file
    $backup_file_name = "/home/incredib/public_html/marathalagnyog.com/database/marathalagnyog.sql";
    $fileHandler = fopen($backup_file_name, 'w+');
    $number_of_lines = fwrite($fileHandler, $sqlScript);
    fclose($fileHandler); 

    }
}
?>