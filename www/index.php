<?php 

    // phpinfo(); 
    
    # Verify Session PATH & checking if writable
    
    // print_r('Session PATH : '. session_save_path() . ' :: '. (is_writable(session_save_path())) );
    
    $db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');
    $databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);
    
    var_dump($databaseTest);
    
    
    $servername = "database";
    $username   = "myuser";
    $password   = "secret";
    $dbname     = "mydb";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $response = $mysqli->query("SELECT * FROM dockerSample")->fetch_all();

    var_dump($response);
    
?>

