<?php
$dbname='mysql:host=localhost;dbname=esalau01;port=1521;charset=utf8';
$username='esalau01';
$password='22302676';
try{
    $pdo=new PDO($dbname,$username,$password);
    echo("vous etes connecte ");
}
catch(exception $e){
    die('erreur:'.$e->getmessage());
}
?>