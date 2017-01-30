<?php

class UserController
{

    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)){
                $errors[] = 'invalid name';}

            if (!User::checkEmail($email)){
                $errors[] = 'invalid email';}

            if (!User::checkPassword($password)){
                $errors[] = 'invalid password';}
            if (User::checkEmailExists($email)){
                $errors[] = 'email is already exist';
            }

            if ($errors == false){
                $result = User::register($name, $email, $password);
            }
        }
        require_once(ROOT . '/views/user/register.php');


        return true;
    }




}