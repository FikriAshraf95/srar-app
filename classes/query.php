<?php

class SqlQuery {
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

}

?>