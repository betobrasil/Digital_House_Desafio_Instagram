<?php // Rotas.

$rotas = key($_GET)?key($_GET):"formulario-login-user";

switch($rotas){
    case "posts":
        include "controllers/PostController.php"; 
        $controller = new PostController();
        $controller->acao($rotas);
    break;

    case "formulario-post":
        include "controllers/PostController.php";
        $controller = new PostController();
        $controller->acao($rotas);
    break;
    case "cadastrar-post":
        include "controllers/PostController.php";
        $controller = new PostController();
        $controller->acao($rotas);
    break;
    case "cadastrar-user":
        include "controllers/UserController.php";
        $controller = new UserController();
        $controller->acao($rotas);
    case "formulario-user":
        include "controllers/UserController.php";
        $controller = new UserController();
        $controller->acao($rotas);
    break;
    case "login-user":
        include "controllers/UserController.php";
        $controller = new UserController();
        $controller->acao($rotas);
    break;
    case "formulario-login-user":
        include "controllers/UserController.php";
        $controller = new UserController();
        $controller->acao($rotas);
    break;
    case "logout-user":
        include "controllers/UserController.php";
        $controller = new UserController();
        $controller->acao($rotas);
    break;

} 