<?php
    require "../vendor/autoload.php"; //se trae el autoload desde el vendor creado por composer
    $router = new \Bramus\Router\Router();
    $dotenv = Dotenv\Dotenv::createImmutable("../")->load();

    $router->get("/prueba", function(){
        $cox = new \App\connect();
        $res = $cox->con->prepare("SELECT * FROM chapters");
        $res -> execute();
        $res = $res->fetchAll(\PDO::FETCH_ASSOC);
         // retorna la consulta como un array asociativo 
        echo json_encode($res);
    });

    $router->run();
    /*
        Preparar -> 
            - Se llama a la conexion    
        Enviar  ->
        Ejecutar ->
        Esperar ->
    */
?>