<?php
//$mysql = new mysqli('localhost', 'root', '', 'blog'); univale
$mysql = new mysqli('localhost', 'root', '', 'blog',3307); //casa
$mysql->set_charset('utf8');

if ($mysql == true) {
    echo "Banco Conectado";
} else {
    echo "Erro na conexao com o DB";
}
