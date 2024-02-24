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
            if (password_verify($pwd, $user['pwd'])) {
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
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $pwdConfirm = $_POST['pwd_confirm'];

        if ($pwd === $pwdConfirm) {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $created = date('Y-m-d H:i:s');
            $user = $this->userModel->create($pseudo, $email, $hashedPwd, $created);

            if ($user) {
                $_SESSION['user'] = $user['id'];
                header('Location: index.php?page=dashboard');
            } else {
                $errorCode = '500';
                $errorMessage = "Une erreur est survenue lors de l'inscription.";
                $errorLink = "index.php?page=register";
                include('view/error.php');
            }
        } else {
            $errorCode = '403';
            $errorMessage = "Les mots de passe ne correspondent pas.";
            $errorLink = "index.php?page=register";
            include('view/error.php');
        }
    }

    public function logout()
    {
    }
}
