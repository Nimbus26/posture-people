<?php

 define('DBHOST', 'sql12.freemysqlhosting.net');
    define('DBUSER', 'sql12276887');
    define('DBPASS', '12rIkxfetk');
    define('DBNAME',  'sql12276887');
    
    $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
    $dbcon = mysqli_select_db($conn,DBNAME);
    
    if ( !$conn ) 
    {
        die("Connection failed : " . mysqli_error($conn));
    }
    
    if ( !$dbcon ) 
    {
        die("Database Connection failed : " . mysqli_error($conn));
    }

$status=$_GET['up_id'];
echo $status;
$sql="UPDATE pending SET AMOUNT='0' WHERE id= $status ";
$result=mysqli_query($conn,$sql);








 header('Location: bill.php');













?>