<?php
require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);

session_start();

use App\Controller\AuthController;
use App\config\DatabaseConnection;

$db = new DatabaseConnection();
$conn = $db->establishConnection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/login':
        $controller = new AuthController($conn);
        $controller->loginForm();
        break;

    case '/signup':
        $controller = new AuthController($conn);
        $controller->signupForm();
        break;

    case '/logout':
        $controller = new AuthController($conn);
        $controller->logOutForm();
        break;

    case '/main':
        if (!isset($_SESSION["id"])) {
            header("Location: /login");
        }
        
        $controller = new AuthController($conn);
        $controller->mainPage();
        break;

    case '/':
        if (isset($_SESSION['id'])) {
            require_once __DIR__ . '/src/views/main.php';
        } else {
            require_once __DIR__ . '/src/views/login.php';
            exit;
        }
        break;

    case "/loginProcess":
        $controller = new AuthController($conn);
        $controller->loginUser();

    case "/registerProcess":
        $controller = new AuthController($conn);
        $controller->createUser();

    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
