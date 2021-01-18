<?php

class Usuarios extends Controller
{
    
    public function cadastrar()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
            ];
        
            if (in_array("", $formulario)) :
           
                // verifica se os campos foram preenchidos
                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome <br />';
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail <br />';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha <br />';
                endif;

                if (empty($formulario['confirmar_senha'])) :
                    $dados['confirmar_senha_erro'] = 'Preencha o campo confirmar senha <br />';
                endif;

            else:
                if(strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                
                elseif($formulario['confirmar_senha'] != $formulario['senha']) :
                    $dados['confirmar_senha_erro'] = 'As senhas são diferentes';
                else:
                    echo 'Pode cadastrar os dados <br />';
                endif;
                
            endif;
            
        else:
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirmar_senha' => ''
            ];
        endif;
        
        var_dump($dados);
        $this->view('usuarios/cadastrar', $dados);
        
    }
    
}
