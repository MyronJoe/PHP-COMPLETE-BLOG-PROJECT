<?php
    require 'connect.php';


    //funtion for texting - will be deleted
    function dump($value){
        echo '<pre>';
            var_dump($value);
        echo '</pre>';
        exit;
    }

    
    //function that select from db and also checks conditions to select
    function selectAll($table, $conditions = []){
        global $conn;
        $sql = "SELECT * FROM $table";
        if (empty($conditions)) {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }else{
            $i = 0;
            
            foreach ($conditions as $key => $value) {

                if ($i === 0) {
                    $sql = $sql . "WHERE $key=$value";
                }else{
                    $sql = $sql . "AND $key=$value";
                }
                $i++;
            }
            // dump(($sql));
        }
        
    }

    $conditions = [
        'email' => 'MyronJoe@gmail.com'
    ];

    $users = selectAll('users', $conditions);
    // dump($users)
?>