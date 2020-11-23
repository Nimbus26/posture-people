<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
    // but I strongly suggest you to use PDO or MySQLi.
    
    define('DBHOST', 'sql12.freemysqlhosting.net');
    define('DBUSER', 'sql12375516');
    define('DBPASS', 'DHPvCFwJf4');
    define('DBNAME',  'sql12375516');
    
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
?>
