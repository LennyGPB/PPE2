<?php
$hostnom = 'host=localhost';
$usernom = 'root';
$password = '';
$bdd = 'biblio2';

try 
{
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Message d'erreur à retirer à la publication
} catch (PDOException $e) 
{
    echo $e->getMessage();
    $monPdo = null;
}
?>