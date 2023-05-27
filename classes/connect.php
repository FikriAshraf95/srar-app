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
        //deprecated
        //   while($row = mysqli_fetch_assoc($result)){
        //     $data[] = $row;
        //   }
        //shortcut
        for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);
            return $set;  
        }
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

    // function save($stmt) {
    //     // $conn = $this->connect();
    //     $result = mysqli_stmt_execute($stmt);

    //     if(!$result) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }
  
}
  
    // $DB = new Connection();

    // $query = "SELECT * FROM admin";
    // $data = $DB->read($query);
    // echo("<pre>");
    // print_r($data);
    // echo("</pre>");

?>  