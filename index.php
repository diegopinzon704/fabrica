<!-- index para manejar los controladores -->
<?php
//Se crea la variable x con $_REQUEST.
if (!isset($_REQUEST['x'])){
    //Se llama el controlador Landing con require once.
    require_once "controllers/Landing.php";
    //Se crea la variable para el nuevo landing
    $controller = new Landing;
    //Se llama al index que tiene la página principal.
    $controller->index();
} else {
    //
    $controller = $_REQUEST['x'];
    //Se concatenan las extensiones
    require_once "controllers/" . $controller . ".php";
    //Se llama al controlador
    $controller = new $controller;
    //Se crea la acción.
    $action = isset($_REQUEST['y']) ? $_REQUEST['y'] : "index";
    //Se llama a la accion y a al controlador.
    call_user_func(array($controller, $action));
}
?>