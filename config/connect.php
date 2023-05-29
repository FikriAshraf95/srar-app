<?php  

require_once('config.php');

class Connection{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $password = DB_PASSWORD;
    public $db_name = DB_DATABASE;
    public $conn;

    function connect(){
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        return $conn;
    }
  
    function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result){
            return false;
        } else {
            $data = false;
        //shortcut
        for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
            return $set;  
        }
    }

    function preparedStatement($query, $bindData){
        $conn = $this->connect();
        $stmt = mysqli_prepare($conn, $query);

        foreach($bindData as $key => $value) {
            $dataName = $value[0];
            $dataType = $value[1];
        }

        print_r($stmt);

        // mysqli_stmt_bind_param($stmt, $dataType, $dataName );
        // mysqli_stmt_execute($stmt);
        // $result = mysqli_stmt_get_result($stmt);

        // print_r($result);

        // if(!$result){
        //     return false;
        // } else {
        //     $data = false;
        // //shortcut
        // for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
        //     return $set;  
        // }
    }
   
    function save($query) {
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);

        if(!$result) {
            return false;
        } else {
            return true;
        }
    }
}
?>  