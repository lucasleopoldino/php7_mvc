<?php


class Controller
{
    
    public function model($model)
    {
        require_once '../app/Models/'.$model.'.php';
        return new $model;
    }
    
    public function view($view, $dados = [])
    {
        // Obs: talves compense usar o header('Location: caminho_pagina') para chamar a pagina
        $arquivo = ('../app/Views/'.$view.'.php');
        if (file_exists($arquivo)) :
            require_once $arquivo;
        else:
            die('O arquivo de view não existe!');
        endif;
    }
    
}
