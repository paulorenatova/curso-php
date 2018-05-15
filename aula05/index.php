<?php
require "vendor/autoload.php";
require "setup.php";
$configuration = ["settings"=>["displayErrorDetails"=>true]];
$c=new Slim\Container($configuration);
$app = new \Slim\App($c);

$app->get('/listar',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    $contas = Banco::getContas();
//    var_dump($contas);
    require "view/listar.php";
//    return $res->getBody()->write("ola");
});

$app->get('/novaconta',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []){
    require "view/abrirconta.php";
//    echo "ola";
//    return $res->getBody()->write("ola");
});
$app->post('/novaconta',function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []) use($app){
//    var_dump($req->getParams());
    $conta= new ContaBanco();
    $conta->abrirConta($req->getParam("tTipo","CC"),$req->getParam("tDono",""));
//    $app->redirect('/','listar');
    return $res->withStatus(302)->withHeader("Location", 'listar');
    //    require "view/abrirconta.php";
    //    echo "ola";
    //    return $res->getBody()->write("ola");
});

$app->run();
//echo "oi";
