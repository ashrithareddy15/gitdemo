<?php
$dbHost = 'localhost';
// MySQL Database Name
$dbName = 'hrdb';
// MySQL Database User
$dbUser = 'hrdbadmin';
// MySQL Database Password
$dbPass = '12345';

// DAtabase Connection
try
{
$dbConnect = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser, $dbPass);
$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>