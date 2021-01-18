<?php


class Checa
{
    
    public static function checarEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            $dados['email_erro'] = 'O e-mail informado é invalido';
            return true;
        endif;
        return false;
    }
    
    public static function checarNome($nome)
    {
        if (!preg_match('/[a-zA-Z]+/m', $nome)) :
            $dados['nome_erro'] = 'O nome informado é invalido';
            return true;
        endif;
        return false;
    }
    
                
}
