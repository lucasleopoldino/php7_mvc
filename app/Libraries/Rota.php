<?php


class Rota
{
    
    private $controlador = 'Paginas';
    private $metodo = 'index';
    private $parametros = [];
    
    public function __construct()
    {
        // se o url tiver valor é salvo na variavel, senão recebe um array vazio
        $url = $this->url() ? $this->url() : [0];
        
        // verifica se existe o controlador
        if (file_exists('../app/Controllers/'.ucwords($url[0]).'.php')) :
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        endif;
        
        require_once '../app/Controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;
        
        
        // verifica se o metodo existe
        if (isset($url[1])) :
            if (method_exists($this->controlador, $url[1])) :
                $this->metodo = $url[1];
                unset($url[1]);
            endif;
        endif;
        
        // verifica se na url existe parametros, se existir retorna 
        // os valores para o parametro, caso não exista retorna um aray vazio
        $this->parametros = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);

        var_dump($this);
    }
    
    // retorna a url em array sem a '/'
    private function url()
    {
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if (isset($url)) :
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            return $url;
        endif;
    }
    
}
