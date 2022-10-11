<?php
//buscar local da pasta abaixo vendor/autoload para pegar tudo
require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
//abaixo tive que usar o 'verify' para validar a url
$client = new Client(['base_uri'=> 'https://www.alura.com.br/', 'verify'=> false]);
$crawler = new Crawler();


$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

//o foreach faz um loop com o conteudo e exibe na tela
//$cursos vira $curso
foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
    //chamo curso e recebo o textcontent
}


