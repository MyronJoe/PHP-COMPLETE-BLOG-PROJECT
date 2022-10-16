<?php
    require 'connect.php';


    //funtion for texting - will be deleted
    function dump($value){
        echo '<pre>';
            var_dump($value);
        echo '</pre>';
        exit;
    }

    //execute the querry for selectone and selectall fn
    function executeQuery($sql, $data){
        global $conn;
        $stmt = $conn->prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        return $stmt;
    }

    
    // function that select from db and also checks conditions to select
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
                    $sql = $sql . " WHERE $key = ?";
                }else{
                    $sql = $sql . " AND $key =  ?";
                }
                $i++;
            }
            
            $stmt = executeQuery($sql, $conditions);
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
        
    }

    //select one based on a condition
    function selectOne($table, $conditions){
        global $conn;
        $sql = "SELECT * FROM $table";
        $i = 0;
        foreach ($conditions as $key => $value) {

            if ($i === 0) {
                $sql = $sql . " WHERE $key = ?";
            }else{
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }

        //RETURNS THE FIRST CONDITION FOUND
        $sql = $sql . " LIMIT 1";

        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
       
        
    }


    //here is the db create funtion 
    function create($table, $data){
        global $conn;
        $sql = "INSERT INTO $table SET ";

        $i = 0;
        foreach ($data as $key => $value) {

            if ($i === 0) {
                $sql = $sql . " $key = ?";
            }else{
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $id;
    }


    //here is the db update funtion
    function update($table, $id,  $data){
        global $conn;
        $sql = "UPDATE $table SET ";

        $i = 0;
        foreach ($data as $key => $value) {

            if ($i === 0) {
                $sql = $sql . " $key = ?";
            }else{
                $sql = $sql . ", $key = ?";
            }
            $i++;
        }
        $sql = $sql . " WHERE id = ?";

        $data['id'] = $id;
        $stmt = executeQuery($sql, $data);
        return $stmt->affected_rows;
    }


    $data = [
        'admin' => 1,
        'username' => 'joemin Kelani',
        'email' => 'Oelani@gmail.com',
        'password' => 'shitappens'
    ];

    $id = update('users', 4, $data);
    dump($id)
?>