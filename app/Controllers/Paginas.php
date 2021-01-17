<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paginas
 *
 * @author Loderdakar
 */
class Paginas extends Controller
{
    
    public function index()
    {
        $dados = [
            'tituloPagina' => 'Página inicial'
        ];
        
        $this->view('paginas/home', $dados);
    }
    
    public function sobre()
    {
        $dados = [
            'tituloPagina' => 'Página Sobre Nós'
        ];
        
        $this->view('paginas/home', $dados);
    }
}
