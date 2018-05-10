<?php
$config = [
    "host" => "localhost",
    "dbname" => "escola",
    "user" => "root",
    "pass" => "",
    ];

try {
$pdo = new PDO(
    "mysql:host=$config[host];dbname=$config[dbname]",
        $config['user'],
        $config['pass']
            );
}catch (Exception $e){
    var_dump($e);
}
?>