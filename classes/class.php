<?php

class ClassInfo {
    public function get_data($sql){

        $query = $sql;

        $DB =  new Connection();
        $result = $DB->read($query);

        if ($result){
            return $result;
          } else{
            return false;
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