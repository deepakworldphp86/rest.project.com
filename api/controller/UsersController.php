<?php

class UsersController  {

    public function getAction($request) {//echo "<pre>";print_r($request->url_elements[1]);exit;
        if (isset($request->url_elements[2])) {

            if ($request->url_elements[3] != '') {
                $user_id = (int) $request->url_elements[3];
            }

            if (isset($request->url_elements[2])) { //print_r($request->url_elements[2]);exit;
                switch ($request->url_elements[2]) {
                    case 'alluser':
                        $data ["message"] = $this->getAllUser();
                        break;
                    default:
                        // do nothing, this is not a supported action
                        break;
                }
            } else {
                $data["message"] = "here is the info for user " . $user_id;
            }
        } else {
            $data["message"] = "you want a list of users";
        }
        return $data;
    }

    public function postAction($request) {
        if (isset($request->url_elements[2])) {
            if (isset($request->url_elements[2])) {
                switch ($request->url_elements[2]) {
                    case 'ucreate':
                        $data ["data"] = $this->createUser();
                        break;
                    default:
                        // do nothing, this is not a supported action
                        break;
                }
            } else {
                $data["data"] = "here is the info for user " . $user_id;
            }
        } else {
            $data["data"] = "you want a list of users";
        }
        return $data;
    }

    public function deleteAction($request) {
        if (isset($request->url_elements[2])) {

            if (!empty($request->url_elements[3])) {
                $parameter = $request->url_elements[3];
            }

            if (isset($request->url_elements[2])) { //print_r($request->url_elements[2]);exit;
                switch ($request->url_elements[2]) {
                    case 'deletebyname':
                        $data ["message"] = $this->deleteUserByName($parameter);
                        break;
                    case 'deletebyid':
                        $data ["message"] = $this->deleteUserById($parameter);
                        break;
                    default:
                        // do nothing, this is not a supported action
                        break;
                }
            } else {
                $data["message"] = "here is the info for user " . $user_id;
            }
        } else {
            $data["message"] = "you want a list of users";
        }
        return $data;
    }

    public function putAction($request) {
        if (isset($request->url_elements[2])) {

            if (!empty($request->url_elements[3])) {
                $parameter = $request->url_elements[3];
            }

            if (isset($request->url_elements[2])) { //print_r($request->url_elements[2]);exit;
                switch ($request->url_elements[2]) {
                    case 'deletebyname':
                        $data ["message"] = $this->deleteUserByName($parameter);
                        break;
                    case 'deletebyid':
                        $data ["message"] = $this->deleteUserById($parameter);
                        break;
                    default:
                        // do nothing, this is not a supported action
                        break;
                }
            } else {
                $data["message"] = "here is the info for user " . $user_id;
            }
        } else {
            $data["message"] = "you want a list of users";
        }
        return $data;
    }

    function getAllUser() {

        $userModel = new UserModel();
        $rawData = $userModel->getAllUser();

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        } else {
            $statusCode = 200;
        }

        //$requestContentType = $_SERVER['HTTP_ACCEPT'];
        //$this->setHttpHeaders($requestContentType, $statusCode);

        $result["output"] = $rawData;

        return $result;
    }

    function createUser() {

        $userModel = new UserModel();
        $rawData = $userModel->addUser();
        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        } else {
            $statusCode = 200;
        }

        //$requestContentType = $_SERVER['HTTP_ACCEPT'];
       // $this->setHttpHeaders($requestContentType, $statusCode);
        $result = $rawData;
        return $result;
    }

    function deleteUserByName($parameter) {
        $userModel = new UserModel();
        $rawData = $userModel->deleteUser($parameter);

        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        $result = $rawData;

        if (strpos($requestContentType, 'application/json') !== false) {
            $response = $this->encodeJson($result);
            echo $response;
        }
    }

    function editUserById() {
        $userModel = new UserModel();
        $rawData = $userModel->editUser();
        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        } else {
            $statusCode = 200;
        }

        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this->setHttpHeaders($requestContentType, $statusCode);
        $result = $rawData;

        if (strpos($requestContentType, 'application/json') !== false) {
            $response = $this->encodeJson($result);
            echo $response;
        }
    }

    public function encodeJson($responseData) {
        $jsonResponse = json_encode($responseData);
        return $jsonResponse;
    }

}
