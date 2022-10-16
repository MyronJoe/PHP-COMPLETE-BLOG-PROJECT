<?php
    require 'connect.php';


    //funtion for texting - will be deleted
    function dump($value){
        echo '<pre>';
            var_dump($value);
        echo '</pre>';
        exit;
    }

    
    //function that select from db
    function selectAll($table){
        global $conn;
        $sql = "SELECT * FROM $table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

    $users = selectAll('users');
    dump($users)
?>