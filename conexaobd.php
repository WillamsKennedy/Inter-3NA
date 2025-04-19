<?php
$host = "localhost";
$dbname = "inter3an";
$usuario = "root";
$senha = "root";



try {

    $pdo = new PDO("mysql:host=$host;
        dbname=$dbname", $usuario, $senha);

    //var_dump($pdo);

} catch (PDOException $e) {
    echo $e->getMessage();
}
