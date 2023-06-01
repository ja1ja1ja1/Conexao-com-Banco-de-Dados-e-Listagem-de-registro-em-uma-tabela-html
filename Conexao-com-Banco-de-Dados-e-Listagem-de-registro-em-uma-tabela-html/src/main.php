<?php
include_once(__DIR__."/../vendor/autoload.php");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use App\Model\Aluno;

$nomeBD = 'chamadasonline';
$localhost = 'localhost';
$usuario = 'root';
$senha = '';

$logger = new Logger("projeto php");
$logger->pushHandler(new StreamHandler(__DIR__.'/App.log', Logger::DEBUG));

$logger->info("testando testando testando");

function get_connection(){
    $dns = "mysql:host=localhost;dbname=chamadasonline;charset=utf8mb4";
    $con = new \PDO($dns,"root","");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}



$c = get_connection();

$query = "SELECT * FROM alunos";
$statement = $c->prepare($query);
$statement->execute();
echo "<table border>";
while ($dados = $statement->fetch(\PDO::FETCH_ASSOC)){
    echo "<tr><td>".$dados['id']."</td><td>".$dados['nome']."</td></tr>";
} 
echo "</table>";

