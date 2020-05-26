<?php
    //defineDBconstants
    define('hostname', 'localhost');
    define('user', 'root');
    define('password', '');
    define('databaseName', 'inventorymain');
    
    
    $connect = mysqli_connect(hostname, user, password, databaseName);
    // if($connect){echo "success";}else die;



?>