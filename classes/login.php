<?php

class Login {

    public $error = "";

    public function evaluate($data, $error) {
        foreach($data as $key => $value) {

            if($key == "username") {
                if(empty($value)) {
                    $error = $error . "Username" . " is cannot be empty! <br/>";
                }
            }

            if($key == "password") {
                if(empty($value)) {
                    $error = $error . "Password" . " is cannot be empty! <br/>";
                }
            }
        }

        if($error == "") {
            // $this->create_user($data);
            return "";
        } else {
            return $error;
        }

    }

    public function login_user($data, $error){

        $username = addslashes($data['username']);
        $password = addslashes($data['password']);

        $query = "SELECT * FROM admin WHERE username ='$username' LIMIT 1 ";

        $DB = New Connection();
        $result = $DB->read($query);

        try {
            if($result){
                $row = $result[0];
                if($password == $row['password']){
                    $_SESSION['userid'] = $row['id'];
                } else {
                    $error .= "Wrong password!";
                }
            } else {
                $error .= "Username Not Found!";
            }
        }
        catch(Exception $e) {
            $error .= $e->getMessage();
        }

        return $error;
        
    }

    public function checkLogin ($id, $error){

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