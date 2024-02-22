<?php
require_once('./model/User.php');

class AuthController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function login()
    {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        $user = $this->userModel->getUserByEmail($email);

        if (!$user) {
            $errorCode = '404';
            $errorMessage = "L'utilisateur n'existe pas, veuillez vous inscrire.";
            $errorLink = "index.php?page=register";
            include('view/error.php');
        } else {
            if (password_verify($pwd, $user['password'])) {
                $_SESSION['user'] = $user;
                header('Location: index.php?page=dashboard');
            } else {
                $errorCode = '403';
                $errorMessage = "Le mot de passe est incorrect.";
                $errorLink = "index.php?page=login";
                include('view/error.php');
            }
        }
    }

    public function register()
    {
    }

    public function logout()
    {
    }
}
