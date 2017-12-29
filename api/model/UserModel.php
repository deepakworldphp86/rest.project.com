<?php

Class UserModel extends DBModel {

    private $mobiles = array();

    public function __construct() {

        parent::__construct();
    }

    public function getAllUser() {
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            $query = 'SELECT * FROM tbl_user WHERE name LIKE "%' . $name . '%"';
        } else {
            $query = 'SELECT * FROM tbl_user';
        }
        $dbmodel = new DBModel();
        $this->users = $dbmodel->executeSelectQuery($query);
        return $this->users;
    }

    public function addUser() {
        // echo json_encode($_POST);
        ///exit;
        $email = '';
        $email = $_POST['email'];
        $password = '';
        $password = $_POST['password'];
        $firstName = '';
        $firstName = $_POST['firstName'];
        $lastName = '';
        $lastName = $_POST['lastName'];
        $houseNumber = '';
        $houseNumber = $_POST['houseNumber'];
        $pincode = '';
        $pincode = $_POST['pincode'];
        $phoneNumber = '';
        $phoneNumber = $_POST['phoneNumber'];
        $mobileNumber = '';
        $mobileNumer = $_POST['mobileNumer'];
        $qualification = '';
        $qualification = $_POST['qualification'];
        $gender = '';
        $gender = $_POST['gender'];
        $hobbies = '';
        $hobbies = $_POST['hobbies'];
        $status = '';
        $status = $_POST['status'];
        $country = '';
        $country = $_POST['country'];
        $state = '';
        $state = $_POST['state'];
        $city = '';
        $city = $_POST['city'];
        $dob = '';
        $dob = $_POST['dob'];
        //echo "<pre>";print_r($this->connectDB());exit;
        //$dbh = $this->connectDB();
        if ($this->isValueExisted("fld_userName", $email, "tbl_users")) {
            // user already existed
            $response["rest_code"] = 409;
			$response["rest_message"] = $this->getHttpStatusMessage(409);
            $response["result"] = false;
            $response["message"] = "User already existed with " . $email;
            return $response;
        } else {
			// Generating API key
            
            $stmt = $this->dbh->prepare("INSERT INTO tbl_users (fld_userName,fld_password,fld_firstName,fld_lastName,
                                                       fld_houseNumber,fld_country,fld_state,fld_city,
                                                       fld_pinCode,fld_phoneNumber,fld_mobileNumber,fld_qualification,
                                                       fld_dob,fld_gender,fld_hobbies,fld_status,fld_updateDate) 
                                                       VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            @$stmt->bind_param("sssssssssssssssss", $email, $password, $firstName, $lastName, $houseNumber, $country, $state, $city, $pincode, $phoneNumber, $mobileNumber, $qualification, $dob, $gender, $hobbies, $status, date('Y - m - d'));
            @$result = $stmt->execute();
            $insertId = $stmt->insert_id;
            if (!empty($insertId)) {
				$api_key = $this->generateApiKey();
				$stmt = '';
				$stmt = $this->dbh->prepare("INSERT INTO tbl_apiKeys (fld_email,fld_apiKey,fld_tblUsersId) VALUES(?,?,?)");
				@$stmt->bind_param("sss", $email,$api_key,$insertId);
                @$result = $stmt->execute();
                $response["rest_code"] = 201;
                $response["rest_message"] = $this->getHttpStatusMessage(201);
                $response["result"] = true;
                $response["message"] = "Registration Successful";
                return $response;
            } else {
				$response["rest_code"] = 403;
				$response["rest_message"] = $this->getHttpStatusMessage(403);
                $response["result"] = false;
                $response["message"] = "Registration Not Successful";
                return $response;
            }
            $stmt->close();
            $dbh->close();
        }
    }

    public function deleteUser($parameter) {
        if (isset($parameter)) {
            //echo $parameter;exit;
            $query = "DELETE FROM tbl_user WHERE name = '$parameter'";
            //echo $query;exit;
            $dbmodel = new DBModel();
            $result = $dbmodel->executeQuery($query);
            if ($result != 0) {
                $result = array('success' => 1);
                return $result;
            }
        }
    }

    public function editUser() {
        if (isset($_POST['name']) && isset($_GET['id'])) {
            $name = $_POST['name'];
            $model = $_POST['email'];
            $query = "UPDATE tbl_user SET name = '" . $name . "',email ='" . $email . "' WHERE id = " . $_GET['id'];
        }
        $dbmodel = new DBModel();
        $result = $dbmodel->executeQuery($query);
        if ($result != 0) {
            $result = array('success' => 1);
            return $result;
        }
    }

}
