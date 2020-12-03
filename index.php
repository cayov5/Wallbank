<?php

use Esmeralda\Route;


include("src/app/config/Config.php");
include('src/app/config/Route.php');




function loadRoute($route, $info = array(), $config = array()) {
  function doCompress($content){
    return preg_replace(array('/<!--(.*)-->/Uis',"/[[:blank:]]+/"),array('',' '),str_replace(array("\n","\r","\t"),'',$content));
  }
  echo '<!--
  Esmeralda/ICA BANK Website
  Developed by 2020 (C) AQUARELA
  https://aquarela.io
-->

';
  ob_start("doCompress");
    include($route);
  ob_end_flush();
}

Route::add('/',function(){
  $data = array(
    'title' => null,
    'desc'=> 'Pra você que quer ter asas pra voar. Receba seus pagamentos, salário, recarregue seu celular, emita boletos ou faça transferências sem complicação',
    'style' => 'style',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/main.php', $data, $GLOBALS['config']);
});

Route::add('/campanhas',function(){
  $data = array(
    'title' => null,
    'desc'=> 'Pra você que quer ter asas pra voar. Receba seus pagamentos, salário, recarregue seu celular, emita boletos ou faça transferências sem complicação',
    'style' => 'style',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/main.php', $data, $GLOBALS['config']);
});

Route::add('/fale-conosco',function(){
  $data = array(
    'title' => 'Fale Conosco',
    'desc'=> 'Entre em contato conosco',
    'style' => 'pages/pages_contact',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/contact.php', $data, $GLOBALS['config']);
});

Route::add('/para-sua-empresa',function(){
  $data = array(
    'title' => 'Empresas',
    'desc'=> 'O banco que trás cashback da folha de pagamento. Veja benefícios para sua empresa.',
    'style' => 'pages/pages_empresas',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/empresa.php', $data, $GLOBALS['config']);
});

Route::add('/empresas',function(){
  $data = array(
    'title' => 'Empresas',
    'desc'=> 'O banco que trás cashback da folha de pagamento. Veja benefícios para sua empresa.',
    'style' => 'pages/pages_empresas',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/empresa.php', $data, $GLOBALS['config']);
});

Route::add('/campanhas/precadastro',function(){
  $data = array(
    'title' => 'Pré Cadastro',
    'desc'=> 'Faça seu Pré Cadastro',
    'style' => 'pages/pages_preregister',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/precadastro.php', $data, $GLOBALS['config']);
});

Route::add('/fale-conosco/submit',function(){
  loadRoute('src/app/Controllers/DoContact.php');
},['post']);


Route::add('/busca',function(){
  $data = array(
    'title' => 'Busca',
    'desc'=> 'Encontre o que quiser',
    'style' => 'style',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/search.php', $data, $GLOBALS['config']);
});


Route::add('/docs/tarifas',function(){
  $data = array(
    'title' => 'Tarifas ICA BANK - Junho 2020',
    'desc'=> null,
    'style' => 'pages/pages_pdf',
    'docTitle' => 'Tarifas ICA BANK - Junho 2020',
    'pdfFile' => 'icabank_tarifas.pdf'
  );
  loadRoute('src/app/pages/pdf.php', $data, $GLOBALS['config']);
});

Route::add('/docs/policy',function(){
  $data = array(
    'title' => 'Politicas de Uso ICA BANK - Junho 2020',
    'desc'=> null,
    'style' => 'pages/pages_pdf',
    'docTitle' => 'Politicas de Uso ICA BANK - Junho 2020',
    'pdfFile' => 'icabank_politica_de_uso.pdf'
  );
  loadRoute('src/app/pages/pdf.php', $data, $GLOBALS['config']);
});

Route::add('/docs/contrato',function(){
  $data = array(
    'title' => 'Contrato de Prestação de Serviços ICA BANK - Junho 2020',
    'desc'=> null,
    'style' => 'pages/pages_pdf',
    'docTitle' => 'Contrato de Prestação de Serviços ICA BANK - Junho 2020',
    'pdfFile' => 'icabank_contrato_prestacao_servicos.pdf'
  );
  loadRoute('src/app/pages/pdf.php', $data, $GLOBALS['config']);
});

Route::pathNotFound(function($path) {
  header('HTTP/1.0 404 Not Found');
  $data = array(
    'title' => 'Página não Encontrada.',
    'desc'=> null,
    'style' => 'style',
    'docTitle' => null,
    'pdfFile' => null
  );
  loadRoute('src/app/pages/404.php', $data, $GLOBALS['config']);
});


Route::methodNotAllowed(function($path, $method) {
  header('HTTP/1.0 405 Method Not Allowed');
  navi();
  echo 'Error 405 :-(<br>';
  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
});


Route::run(BASEPATH);
