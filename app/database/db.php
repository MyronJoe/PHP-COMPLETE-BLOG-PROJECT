<?php
    require 'connect.php';


    //funtion for texting - will be deleted
    function dump($value){
        echo '<pre>';
            var_dump($value);
        echo '</pre>';
        exit;
    }

    
    // function that select from db and also checks conditions to select
    // function selectAll($table, $conditions = []){
    //     global $conn;
    //     $sql = "SELECT * FROM $table";
    //     if (empty($conditions)) {
    //         $stmt = $conn->prepare($sql);
    //         $stmt->execute();
    //         $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    //         return $records;
    //     }else{
    //         $i = 0;
            
    //         foreach ($conditions as $key => $value) {

    //             if ($i === 0) {
    //                 $sql = $sql . "WHERE $key = '%', ?, '%'";
    //             }else{
    //                 $sql = $sql . "AND $key = '%', ?, '%'";
    //             }
    //             $i++;
    //         }
    //         $stmt = $conn->prepare($sql);
    //         $values = array_values($conditions);
    //         $types = str_repeat('s', count($values));
    //         $stmt->bind_param($types, ...$values);
    //         $stmt->execute();
    //         $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    //         return $records;
    //     }
        
    // }

    function selectOne($table, $conditions){
        global $conn;
        $sql = "SELECT * FROM $table";
        $i = 0;
        foreach ($conditions as $key => $value) {

            if ($i === 0) {
                $sql = $sql . "WHERE $key = ?";
            }else{
                $sql = $sql . "AND $key = ?";
            }
            $i++;
        }
        $stmt = $conn->prepare($sql);
        $values = array_values($conditions);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
       
        
    }

    $conditions = [
        'email' => 'MyronJoe@gmail.com'
    ];

    $users = selectOne('users', $conditions);
    dump($users)
?>