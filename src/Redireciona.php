<?php

 function redireciona(string $url):void
{
//redirecionar
header("Location: $url");
// interropendo a execucao
die();    
}

