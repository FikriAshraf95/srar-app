<?php

require_once('../config/connect.php');

class StudentController {

    public function create($data) {
        // $csrfToken = filter_var($data['csrfToken'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlyear = filter_var($data['ddlYear'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlclass = filter_var($data['ddlCLass'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txticNo = filter_var($data['txtICNo'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtname = filter_var($data['txtName'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtdob = filter_var($data['txtDOB'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtbirthno = filter_var($data['txtBirthNo'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtpob = filter_var($data['txtPOB'], FILTER_SANITIZE_SPECIAL_CHARS);
        $radiowarganegara = filter_var($data['radioWarganegara'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtnote = filter_var($data['txtNote'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtparent = filter_var($data['txtParent'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txttelno = filter_var($data['txtTelNo'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtnote = filter_var($data['txtNote'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtaddress = filter_var($data['txtAddress'], FILTER_SANITIZE_SPECIAL_CHARS);
        
        $vbol = true;

        print_r($data);

        //UNCOMMENT WHEN CSRF TOKEN IS SETUP
        // foreach($data as $key => $value){
        //     if($value == ''){
        //         $vbol = false;
        //         return $vbol;
        //     }
        // }

        // if($csrfToken != $_SESSION['csrfToken']){
        //     $vbol = false;
        //     return $vbol;
        // }

        // if(!$vbol){
        //     return false;
        // } else {
        //     $query = "INSERT INTO classes (YEAR, PARAMETER_CODE, PIC_ID, SEQUENCE) ";
        //     $query .= "VALUES ";
        //     $query .= "('$ddlyear','$ddlclass','$ddlpic','$txtseq') ";
    
        //     $DB = New Connection();
        //     try {
        //         $result = $DB->save($query);
        //         return $result;
        //     } catch (Exception $e) {
        //         return $e;
        //     }
        // }
    }

    public function read($data) {
        return true;
    }

    public function readAll() {
        return true;
    }

    public function update($data) {
        return true;
    }

    public function delete($data) {
        return true;
    }

    public function readclass() {
        
    }

}

?>