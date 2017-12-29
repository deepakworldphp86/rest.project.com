<?php

class DBModel extends RestModel{

    private $conn = "";
    public  $dbh  = "";
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "db_phonedirectory";

    public function __construct() {
        $this->dbh = $this->connectDB();
    }

    function connectDB() {
        //echo $this->user;exit;
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

	 function generateApiKey() {
        return md5(uniqid(rand(), true));
    }


    function executeQuery($query) {
        $conn = $this->connectDB();
        $result = mysqli_query($conn, $query);
        if (!$result) {
            //check for duplicate entry
            if ($conn->errno == 1062) {
                return false;
            } else {
                trigger_error(mysqli_error($conn), E_USER_NOTICE);
            }
        }
        $affectedRows = mysqli_affected_rows($conn);
        return $affectedRows;
    }

    function executeSelectQuery($query) {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;
    }

    public function isValueExisted($field,$value,$table) { //echo $field,$value,$table;exit;
        $stmt = $this->dbh->prepare("SELECT $field from $table WHERE $field = ?");

        $stmt->bind_param("s", $value);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // user existed 
            $stmt->close();
            return true;
        } else {
            // user not existed
            $stmt->close();
            return false;
        }
    }
    
    // destructor
    function __destruct() {
         
    }

}

?>
