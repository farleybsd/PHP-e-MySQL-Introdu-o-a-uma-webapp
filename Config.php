<?php
$mysql = new mysqli('localhost', 'root', '', 'blog');
$mysql->set_charset('utf8');

if ($mysql == true) {
    echo "Banco Conectado";
} else {
    echo "Erro na conexao com o DB";
}
