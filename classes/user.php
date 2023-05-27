<?php

class User {
    public function get_data($id){

        $query = "SELECT * FROM admin WHERE id = '$id' LIMIT 1";

        $DB =  new Connection();
        $result = $DB->read($query);

        if ($result){
            $row = $result[0];
            return $row;
        } else {
            return false;
        }

    }
}

?>