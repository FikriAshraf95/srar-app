<?php

require_once('config/connect.php');

class UserController {

    public function create($data) {

        // $csrfToken = filter_var($data['csrfToken'], FILTER_SANITIZE_SPECIAL_CHARS);
        $username = filter_var($data['username'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_var($data['password'], FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_var($data['name'], FILTER_SANITIZE_SPECIAL_CHARS);

        $vbol = true;

        foreach($data as $key => $value){
            if($value == ''){
                $vbol = false;
                return $vbol;
            }
        }

        if($csrfToken != $_SESSION['csrf_token']){
            $vbol = false;
            return $vbol;
        }

        if(!$vbol){
            return false;
        } else {
            $query = "INSERT INTO admin (username, password, name) ";
            $query .= "VALUES ";
            $query .= "('$username','$password','$name') ";
    
            $DB = New Connection();
            $result = $DB->save($query);
            return $result;
            // return true;
        }
    }

    public function readAll() {
        $query = "SELECT * FROM admin WHERE is_deleted = '0' LIMIT 5";
        $DB = New Connection();
        $result = $DB->read($query);

        return $result;
    }

    public function read($id) {
        $query = "SELECT * FROM admin WHERE id = '$id' AND is_deleted = '0'";
        $DB = New Connection();
        $result = $DB->read($query);

        return $result;
    }

    public function update($data) {
        $id = filter_var($data['id'], FILTER_SANITIZE_SPECIAL_CHARS);
        $username = filter_var($data['username'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_var($data['password'], FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_var($data['name'], FILTER_SANITIZE_SPECIAL_CHARS);

        $vbol = true;

        foreach($data as $key => $value){
            if($value == ''){
                $vbol = false;
                return $vbol;
            }
        }

        if(!$vbol){
            return false;
        } else {
            $query = "UPDATE admin ";
            $query .= "SET ";
            $query .= "username = '$username', ";
            $query .= "password = '$password', ";
            $query .= "name = '$name' ";
            $query .= "WHERE id = '$id' ";
    
            $DB = New Connection();
            $result = $DB->save($query);
            return $result;
        }
    }

    public function delete($data) {
        $id = filter_var($data['id'], FILTER_SANITIZE_SPECIAL_CHARS);
        // echo($id);
        $vbol = true;

        if(!$vbol){
            return false;
        } else {
            $query = "UPDATE admin ";
            $query .= "SET ";
            $query .= "is_deleted = '1'";
            $query .= "WHERE id = '$id' ";
    
            $DB = New Connection();
            $result = $DB->save($query);
            return $result;
        }
        return true;
    }
}

?>