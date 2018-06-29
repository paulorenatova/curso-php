<?php
require "vendor/autoload.php";
require "setup.php";
$configuration = ["settings"=>["displayErrorDetails"=>true]];
$c=new Slim\Container($configuration);
$app = new \Slim\App($c);

$app->get("/", function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    require "view/topo.php";
});

$app->get('/listar',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $contas = Banco::getContas();
    require "view/topo.php";
    require "view/listar.php";
});

$app->get('/novaconta',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $clientes = Banco::getClientes();
    require "view/topo.php";
    require "view/abrirconta.php";
});

$app->post('/novaconta',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []) use($app){
    $conta= new ContaBanco($req->getParam("tTipo","CC"),$req->getParam("tCliente",""));
    $conta= Banco::abrirConta($conta);
 return $res->withStatus(302)->withHeader("Location", 'listar');
});

//Cliente

$app->get('/listarclientes',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $clientes = Banco::getClientes();
    require "view/topo.php";
    require "view/listarclientes.php";
});

$app->get('/novocliente',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    require "view/topo.php";
    require "view/novocliente.php";

});
$app->post('/novocliente',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []) use($app){

    $cliente= new Cliente($_POST);
    return $res->withStatus(302)->withHeader("Location", 'listarclientes');

});

$app->get('/editarcliente/{id}',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $cliente=Banco::getCliente($args["id"]);
    require "view/topo.php";
    require "view/editarcliente.php";

});

$app->post('/editarcliente/{id}',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []) use($app){
    $cliente=Banco::getCliente($args["id"]);
    $cliente->updateCliente($args["id"],$_POST);

    return $res->withStatus(302)->withHeader("Location", base_url.'/listarclientes');

});

$app->get('/excluircliente/{id}',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $cliente=Banco::delCliente($args["id"]);
    return $res->withStatus(302)->withHeader("Location", base_url.'/listarclientes');
});

$app->run();
//echo "oi";
