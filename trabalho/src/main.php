<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Usuario;


echo"<h1>estou realizando a atividade</h1>";

$u = new Usuario("joao", 14);


echo $u ->getNome();
echo $u ->getIdade();


?>