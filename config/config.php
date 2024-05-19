<?php
#Diretórios Raizes
#Variavel de alteração de pasta interna
$PastaInterna="";

#CONSTANTE CAMINHO ABSOLUTO HTTP
define('DIRPAGE' ,"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

#Condição para colocar barra caso o servidor não entregue, para que não haja erro na requisição
if(substr($_SERVER['DOCUMENT_ROOT'], -1) == "/"){
    #Definição do caminho fisico para buscar arquivo
    define('DIRREQ' ,"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    #Definição do contrabarra no caminho fisico
    define('DIRREQ' ,"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}



#Diretório de upload Financeiro

define('UPLOADDOCGERAL' ,DIRREQ."public/upload/financeiro/documentos gerais/");

define('UPLOADCONTASPAGAR' ,DIRREQ."public/upload/financeiro/contas a pagar/");

define('UPLOADCONTASPAGAS' ,DIRREQ."public/upload/financeiro/contas pagas/");

define('UPLOADBOLETOS' ,DIRREQ."public/upload/financeiro/boletos/");

#Diretório de upload Contabilidde

define('UPLOADCONTABEIS' ,DIRREQ."public/upload/contabilidade/documentos contabeis/");

define('UPLOADMOVCONTABEIS' ,DIRREQ."public/upload/contabilidade/movimento contabeis/");

define('UPLOADDEMONSTRATIVO' ,DIRREQ."public/upload/contabilidade/demonstrativo/");

define('UPLOADFISCAL' ,DIRREQ."public/upload/contabilidade/fiscal/");

#Diretório de upload Administrativo


define('UPLOADNFE' ,DIRREQ."public/upload/administrativo/NFE/");

define('UPLOADDANFE' ,DIRREQ."public/upload/administrativo/DANFE/");

define('UPLOADPLANILHASADM' ,DIRREQ."public/upload/administrativo/Planilhas/");

#Diretório de upload Estoque

define('UPLOADBALANCO',DIRREQ."public/upload/estoque/Balanço/");

define('UPLOADNOTAENTRADA',DIRREQ."public/upload/estoque/Nota Entrada/");

define('UPLOADNOTASAIDA',DIRREQ."public/upload/estoque/Nota Saida/");



#Diretório de Administração
define('DIRADM' ,DIRPAGE."public/admin/");

#Definição diretório de audio
define('DIRAUDIO' ,DIRPAGE."public/audio/");

#Definição diretório de css
define('DIRCSS' ,DIRPAGE."public/css/");

#Definição diretório de design
define('DIRDESIGN' ,DIRPAGE."public/design/");

#Definição diretório de fontes
define('DIRFONTES' ,DIRPAGE."public/fontes/");

#Definição diretorio de imagem
define('DIRIMG' ,DIRPAGE."public/images/");

#Definição diretório de JavaScript
define('DIRJS' ,DIRPAGE."public/js/");

#Definição diretório de video
define('DIRVIDEO' ,DIRPAGE."public/video/");

#Diretório de icones
define('DIRICON' ,DIRPAGE."public/icon/");



#ACESSO AO BANCO DE DADOS

define('HOST', "localhost");
define('DB', "ged");
define('USER', "root");
define('PASS', "");



