<?php
include_once '../app/configuracao.php'; 
include_once '../app/Libraries/Rota.php'; 
include_once '../app/Libraries/Controller.php';
include_once '../app/Libraries/Database.php';
$db = new Database();

/*
// simulando inserção de dados
$usuario_id = 10;
$titulo = 'Titulo do post';
$texto = 'Texto do post';

// insere no banco de dados
$db->query("INSERT INTO posts(usuario_id, titulo, texto) VALUES(:usuario_id, :titulo, :texto)");
$db->bind(':usuario_id', $usuario_id, PDO::PARAM_INT);
$db->bind(':titulo', $titulo, PDO::PARAM_STR);
$db->bind(':texto', $texto, PDO::PARAM_STR);
*/

// configura o timezone do servidor
date_default_timezone_set('America/Sao_Paulo');

// testando update
$id = 1;
$usuario_id = 5;
$titulo = 'Titulo do post 1';
$texto = 'Texto do post 1';
$criadoEm = date('Y-m-d H:i:s');

$sql = "UPDATE posts "
        . "SET usuario_id = :usuario_id, "
        . "titulo = :titulo, "
        . "texto = :texto, "
        . "criado_em = :criadoEm "
        . "WHERE id = :id";
$db->query($sql);
$db->bind(':id', $id);
$db->bind(':usuario_id', $usuario_id);
$db->bind(':titulo', $titulo);
$db->bind(':texto', $texto);
$db->bind(':criadoEm', $criadoEm);

$db->executa();

echo '<hr> Total Resultados: '.$db->totalResultados();
//echo '<hr> Último id: '.$db->ultimoIdInserido();

var_dump($db);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= APP_NOME ?></title>
        <link href="<?= URL ?>public/css/estilos.css" rel="stylesheet" type="text/css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
        
    </head>
    <body>
        
        <?php
            include_once APP."/Views/topo.php";
            $rotas = new Rota();
            include_once APP."/Views/rodape.php";
            
        ?>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="<?= URL ?>public/js/jquery.funcoes.js"></script>
    </body>
</html>
