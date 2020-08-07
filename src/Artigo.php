<?php

class Artigo
{
    private $mysql;
    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT id,conteudo,titulo from artigos');
        $artigos =  $resultado->fetch_all(MYSQLI_ASSOC);
        return $artigos;
    }
    public function encontrarPorId (string $id) :array
    {
        //echo $id;
      $selecionarArtigo= $this->mysql->prepare("SELECT id,titulo,conteudo FROM artigos WHERE id=?");
      $selecionarArtigo->bind_param('s',$id);
      $selecionarArtigo->execute();
      $artigo=$selecionarArtigo->get_result()->fetch_assoc();
      return $artigo;
    }
}
