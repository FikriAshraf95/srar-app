<?php 

class Signup {

    public $error = "";

    public function evaluate($data, $error) {
        foreach($data as $key => $value) {

            // if(empty($value)) {
            //    $error = $error . $key . " is empty! <br/>"; 
            // }

            if(empty($value)) {
                if($key == "name") {
                    $error = $error . "Name" . " is empty! <br/>";
                } else if($key == "username") {
                    $error = $error . "Username" . " is empty! <br/>";
                } else if($key == "password") {
                    $error = $error . "Password" . " is empty! <br/>";
                }
            }

            if($key == "name") {
                if(is_numeric($value)) {
                    $error = $error . "Name" . "  is cannot be numbers! <br/>";
                }
            }

            if($key == "username") {
                if(is_numeric($value)) {
                    $error = $error . "Username" . " is cannot be numbers! <br/>";
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

    public function create_user($data){

        $username = $data['username'];
        $password = $data['password'];
        $name = $data['name'];

        $query = "INSERT INTO admin (username, password, name) VALUES ('$username','$password','$name')";

        $DB = New Connection();
        $DB->save($query);
        
    }
}

?>