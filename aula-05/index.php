<?php
require "vendor/autoload.php";
require "setup.php";
$configuration = ["settings"=>["displayErrorDetails"=>true]];
$c=new Slim\Container($configuration);
$app = new \Slim\App($c);

$app->get("/", function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    require "view/topo.php";
    require "view/inicio.php";
//    return $res->getBody()->write("ola");
});

$app->get('/listar',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $contas = Banco::getContas();
//    var_dump($contas);
    require "view/topo.php";
    require "view/inicio.php";
    require "view/listar.php";
//    return $res->getBody()->write("ola");
});

$app->get('/novaconta',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $clientes = Banco::getClientes();
    require "view/topo.php";
    require "view/inicio.php";
    require "view/abrirconta.php";
//    echo "ola";
//    return $res->getBody()->write("ola");
});

$app->post('/novaconta',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []) use($app){
    $conta= new ContaBanco($req->getParam("tTipo","CC"),$req->getParam("tCliente",""));
    $conta= Banco::abrirConta($conta);
 return $res->withStatus(302)->withHeader("Location", 'listar');
});

//Cliente

$app->get('/listarclientes',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $cliente = Banco::getClientes();
//    var_dump($contas);
    require "view/topo.php";
    require "view/inicio.php";
    require "view/listarclientes.php";
//    return $res->getBody()->write("ola");
});

$app->get('/novocliente',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    require "view/topo.php";
    require "view/inicio.php";
    require "view/novocliente.php";
//    echo "ola";
//    return $res->getBody()->write("ola");
});
$app->post('/novocliente',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []) use($app){
//    var_dump($req->getParams());
    $cliente= new Cliente($_POST);
    var_dump($cliente);
    return $res->withStatus(302)->withHeader("Location", 'listarclientes');
    //    require "view/abrirconta.php";
    //    echo "ola";
    //    return $res->getBody()->write("ola");
});

$app->run();
//echo "oi";
