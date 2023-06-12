<?php

require_once('../config/connect.php');

class GL {

    public function glParameterParentAll() {
        $query = "SELECT * FROM gl_parameter_description ORDER BY sequence ASC";
        $DB = New Connection();
        $result = $DB->read($query);

        return $result;
    }

    public function glParameterParent($id) {
        $query = "SELECT * FROM gl_parameter_description WHERE id = '$id'";
        $DB = New Connection();
        $result = $DB->read($query);

        return $result;
    }

    public function glParameter($parameterCodeP) {
        $query = "SELECT * FROM gl_parameter WHERE PARAMETER_PARENT_CODE = '$parameterCodeP' ORDER BY sequence ASC";
        $DB = New Connection();
        $result = $DB->read($query);

        return $result;
    }

}

?>