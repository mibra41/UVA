<?php 
    
    $hostname = "localhost:3306";
    $dbname = 'mi2ye';
    
    $username = 'web4640';
    $pwd = 'pwd4640';
    
    $dsn = "mysql:host=$hostname;dbname=$dbname";

    try {
        $db = new PDO($dsn, $username, $pwd);
    }
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p> An Error Ocurred: $error_message </p>";
    }
    catch (Exception $e) {
        $error_message = $e->getMessage();
        echo $error_message;
    }

?>