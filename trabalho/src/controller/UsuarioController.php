<?php

 

    include_once __DIR__ . "/../../vendor/autoload.php";

 

    use App\model\Usuario;

 

    $u = new Usuario("joao", 14);

 

    $attr = $_GET["atributo"];

    var_dump($attr);

 

    if ( $attr === "nome"){

        return $u->getNome();

    }

 

    if ( $attr === "idade"){

        return $u->getIdade();

    }
    ?>