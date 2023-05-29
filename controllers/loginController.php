<?php

require_once('config/connect.php');

class LoginController {

    public function evaluate($data) {
        $username = filter_var($data['username'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_var($data['password'], FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function loginUser($data){
        $username = filter_var($data['username'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_var($data['password'], FILTER_SANITIZE_SPECIAL_CHARS);
        $DB = New Connection();
        $query = "SELECT * FROM admin WHERE username = '$username' LIMIT 1";
        $DB = New Connection();
        $result = $DB->read($query);
        if($result){
            $row = $result[0];
            if($password == $row['password']){
                // print_r($result);
                session_start();
                $_SESSION['userID'] = $row['id'];
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                return true;
            } else {
                // echo("password not match");
            return false;
            }
        } else {
            // echo("user not found");
            return false;
        }

        // $query = "SELECT username FROM admin WHERE username = ? LIMIT 1";
        // $bindParams = array(
        //     '0' => 'username',
        //     '1' => 's'
        // );
        // $bindData = array(
        //     '0' => $bindParams
        // );
        // $result = $DB->preparedStatement($query, $bindData);
    }

    public function checkLogin ($id){
        $query = "SELECT * FROM admin WHERE id ='$id' LIMIT 1 ";
        $DB = New Connection();
        $result = $DB->read($query);
        try {
            if($result){
                return true;
            } else {
                return true;
            }
        }
        catch(Exception $e) {
            $error .= $e->getMessage();
        }
        return $error;
    }

}

?>