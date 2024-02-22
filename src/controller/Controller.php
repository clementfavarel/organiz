<?php
require_once('./controller/AuthController.php');

class Controller
{
    private $authController;

    public function __construct()
    {
        $this->authController = new AuthController();
    }

    public function invoke()
    {
        if (!isset($_SESSION['user'])) {
            $page = isset($_GET['page']) ? $_GET['page'] : 'welcome';

            switch ($page) {
                case 'welcome':
                    include('view/welcome.php');
                    break;
                case 'login':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $this->authController->login();
                    } else {
                        include('view/login.php');
                    }
                    break;
                case 'register':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $this->authController->register();
                    } else {
                        include('view/register.php');
                    }
                    break;
                default:
                    include('view/welcome.php');
                    break;
            }
        } else {
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

            switch ($page) {
                case 'dashboard':
                    include('view/dashboard.php');
                    break;
                case 'logout':
                    $this->authController->logout();
                    break;
                default:
                    include('view/dashboard.php');
                    break;
            }
        }
    }
}
