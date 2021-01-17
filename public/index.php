<?php
include_once '../app/configuracao.php'; 
include_once '../app/Libraries/Rota.php'; 
include_once '../app/Libraries/Controller.php'; 
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
        $rotas = new Rota();
            
            
        ?>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="<?= URL ?>public/js/jquery.funcoes.js"></script>
    </body>
</html>
