<?php
session_start();

require 'validator.php';
require 'dbConnection.php';
require 'uploader.php';


class student
{


    private $name;
    private $email;
    private $password;
    private $image;
    private $result = null;

    public function register($data, $file)
    {

        # Create Validator Obj ....
        $validator = new Validator;

        $this->name = $validator->Clean($data['name']);
        $this->email = $validator->Clean($data['email']);
        $this->password = $validator->Clean($data['password'], 1);

        # Validate Inputs ....
        $errors = [];

        # Validate Name .....
        if (!$validator->validate($this->name, 1)) {
            $errors['name'] = "Field Required";
        } elseif (!$validator->validate($this->name, 8)) {
            $errors['name'] = "Invalid String";
        }

        # Validate Email .....
        if (!$validator->validate($this->email, 1)) {
            $errors['email'] = "Field Required";
        } elseif (!$validator->validate($this->email, 2)) {
            $errors['email'] = "Invalid Email";
        }

        # Validate Password ...
        if (!$validator->validate($this->password, 1)) {
            $errors['password'] = "Field Required";
        } elseif (!$validator->validate($this->password, 3)) {
            $errors['password'] = "Invalid password";
        }


        # Validate Image .... 
        if (!$validator->validate($file['image']['name'], 1)) {
            $errors['Image'] = "Field Required";
        } elseif (!$validator->validate($file, 5)) {
            $errors['Image'] = "Invalid Extension";
        }

        #  Check Errors ...
        if (count($errors) > 0) {

            $this->result = $errors;
        } else {

            # Create DB Object
            $dbObj = new DB;

            # Create Upload Object ...
            $uploader = new Upload();

            $this->image = $uploader->UploadFiles($file);

            $this->password = md5($this->password);

            $sql = "insert into users (name,email,password,image) values ('$this->name','$this->email','$this->password','$this->image')";

            $op = $dbObj->doQuery($sql);

            if ($op) {
                $this->result = ["Success" => "data Inserted"];
            } else {
                $this->result = ["Error" => "Error Try Again"];
            }
        }

        return $this->result;
    }


    public function showData()
    {

        # Create Db Obj ....
        $dbObj = new DB;

        $sql = "select * from users";

        $result = $dbObj->doQuerySelect($sql);

        return $result;

    }


    public function remove($id)
    {

        # Create Db Obj ....
        $dbObj = new DB;

        $sql = "delete from users where id = $id";

        $this->result = $dbObj->doQuery($sql);

        return $this->result;

    }

    public function getData($id)
    {

        # Create Db Obj ....
        $dbObj = new DB;

        $sql = "select *  from users where id = $id";

        $this->result = $dbObj->doQuerySelect($sql);

        return $this->result;

    }


    public function update($data, $id)
    {

        # Create Validator Obj ....
        $validator = new Validator;

        $this->name = $validator->Clean($data['name']);
        $this->email = $validator->Clean($data['email']);

        # Validate Inputs ....
        $errors = [];

        # Validate Name .....
        if (!$validator->validate($this->name, 1)) {
            $errors['name'] = "Field Required";
        } elseif (!$validator->validate($this->name, 8)) {
            $errors['name'] = "Invalid String";
        }

        # Validate Email .....
        if (!$validator->validate($this->email, 1)) {
            $errors['email'] = "Field Required";
        } elseif (!$validator->validate($this->email, 2)) {
            $errors['email'] = "Invalid Email";
        }


        #  Check Errors ...
        if (count($errors) > 0) {

            $this->result = $errors;
        } else {
            // db OP
            $dbObj = new DB;

            $sql = "update  users set name = '$this->name' , email = '$this->email' where id = $id ";

            $op = $dbObj->doQuery($sql);

            if ($op) {
                $this->result = ["Success" => "data updated"];
            } else {
                $this->result = ["Error" => "Error Try Again"];
            }
        }

        return $this->result;
    }


}


?>