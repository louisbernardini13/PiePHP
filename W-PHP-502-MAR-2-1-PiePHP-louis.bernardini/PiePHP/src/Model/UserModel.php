<?php

namespace Model;

class UserModel {

    private $email;
    private $password;

    static function save($email, $password) {
        if (isset($data['id']) && $data['id']){
            // update
        }
        else {
            unset($data['id']);
            $sql = "INSERT INTO utilisateurs (" . implode( ',' ,array_keys($data)) . ")
            VALUES ('" . implode( '\',\'' , $data) . "')";
            if (self::$connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . self::$connection->error;
                return false;
            }
        }  
    }
    
}

?>