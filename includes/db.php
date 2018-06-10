<?php 

$db['db_host'] = 'webappwithmysqldb.mysql.database.azure.com';
$db['db_user'] = 'zeeshanmcp12@webappwithmysqldb';
$db['db_pass'] = '';
$db['db_name'] = 'cms';

foreach($db as $key => $value){
    
    define(strtoupper($key), $value);
}



$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
    
    echo "We are connected.";
}



?>
