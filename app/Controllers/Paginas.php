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
        $this->view('paginas/home');
    }
    
    public function sobre()
    {
        
    }
}
