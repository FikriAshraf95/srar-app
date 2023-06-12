<?php

require_once('../config/connect.php');

class ClassContoller {

    public function create($data) {
        // $csrfToken = filter_var($data['csrfToken'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlyear = filter_var($data['ddlYear'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlclass = filter_var($data['ddlCLass'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlpic = filter_var($data['ddlPIC'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtseq = filter_var($data['txtSeq'], FILTER_SANITIZE_SPECIAL_CHARS);

        $vbol = true;

        //UNCOMMENT WHEN CSFR IS SETUP
        // foreach($data as $key => $value){
        //     if($value == ''){
        //         $vbol = false;
        //         return $vbol;
        //     }
        // }

        // if($csrfToken != $_SESSION['csrf_token']){
        //     $vbol = false;
        //     return $vbol;
        // }

        if(!$vbol){
            return false;
        } else {
            $query = "INSERT INTO classes (YEAR, PARAMETER_CODE, PIC_ID, SEQUENCE) ";
            $query .= "VALUES ";
            $query .= "('$ddlyear','$ddlclass','$ddlpic','$txtseq') ";
    
            $DB = New Connection();
            try {
                $result = $DB->save($query);
                return $result;
            } catch (Exception $e) {
                return $e;
            }
        }
    }

    public function readAll() {
        $query = "SELECT ";
        $query .= "A.ID, A.YEAR, A.PARAMETER_CODE, A.PIC_ID, ";
        $query .= "B.PARAMETER_NAME, B.PARAMETER_CODE ";
        $query .= "FROM classes A ";
        $query .= "LEFT JOIN gl_parameter B ON B.PARAMETER_CODE = A.PARAMETER_CODE ";
        $query .= "WHERE PARAMETER_PARENT_CODE = '1002' AND IS_DELETED = '0'";
        
        $DB = New Connection();
        $result = $DB->read($query);
        return $result;
    }

    public function read($id) {
        $query = "SELECT ";
        $query .= "ID, YEAR, PARAMETER_CODE, PIC_ID, SEQUENCE ";
        $query .= "FROM classes ";;
        $query .= "WHERE ID = " . $id;
        
        $DB = New Connection();
        $result = $DB->read($query);
        return $result;
    }

    public function update($data) {
        // $csrfToken = filter_var($data['csrfToken'], FILTER_SANITIZE_SPECIAL_CHARS);
        $id = filter_var($data['id'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlyear = filter_var($data['ddlYear'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlclass = filter_var($data['ddlCLass'], FILTER_SANITIZE_SPECIAL_CHARS);
        $ddlpic = filter_var($data['ddlPIC'], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtseq = filter_var($data['txtSeq'], FILTER_SANITIZE_SPECIAL_CHARS);
        
        $vbol = true;

        //UNCOMMENT WHEN CSFR IS SETUP
        // foreach($data as $key => $value){
        //     if($value == ''){
        //         $vbol = false;
        //         return $vbol;
        //     }
        // }

        // if($csrfToken != $_SESSION['csrf_token']){
        //     $vbol = false;
        //     return $vbol;
        // }

        if(!$vbol){
            return false;
        } else {
            $query = "UPDATE classes ";
            $query .= "SET ";
            $query .= "YEAR = '".$ddlyear."', ";
            $query .= "PARAMETER_CODE = '".$ddlclass."', ";
            $query .= "PIC_ID = '".$ddlpic."', ";
            $query .= "SEQUENCE = '".$txtseq."' ";
            $query .= "WHERE id = " . $id;

            $DB = New Connection();
            try {
                $result = $DB->save($query);
                return $result;
            } catch (Exception $e) {
                return $e;
            }
        }
    }

    public function delete($data) {
        $id = filter_var($data['id'], FILTER_SANITIZE_SPECIAL_CHARS);
        
        $vbol = true;

        if(!$vbol){
            return false;
        } else {
            $query = "UPDATE classes ";
            $query .= "SET ";
            $query .= "is_deleted = '1'";
            $query .= "WHERE id = '$id' ";
    
            $DB = New Connection();
            $result = $DB->save($query);
            return $result;
        }
    }

    public function readClass() {
        $query = "SELECT PARAMETER_NAME, PARAMETER_CODE FROM gl_parameter WHERE PARAMETER_PARENT_CODE = '1002' ORDER BY SEQUENCE ASC "; // 1002(PARAMETER_NAME) = CLASS_NAME(PARAMETER_CODE) -> dbo.gl_parameter_description
        $DB = New Connection();
        $result = $DB->read($query);
        return $result;
    }

    public function countClass() {
        $query = "SELECT COUNT(ID) AS 'COUNT' FROM classes WHERE IS_DELETED = '0'";
        $DB = New Connection();
        $result = $DB->read($query);
        foreach($result as $value){
            $id = $value['COUNT'];
            $id ++;
        }
        return $id;
    }

    public function countYear() {
        $query = "SELECT YEAR FROM classes GROUP BY YEAR ORDER BY YEAR ASC";
        $DB = New Connection();
        $result = $DB->read($query);
        return $result;
    }

}

?>