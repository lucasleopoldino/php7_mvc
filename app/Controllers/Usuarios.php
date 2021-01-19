<?php

class Usuarios extends Controller
{
    
    public function __construct()
    {
        $this->usuarioModel = $this->model('Usuario');
    }
    
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
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

                if (empty($formulario['confirmar_senha'])) :
                    $dados['confirmar_senha_erro'] = 'Preencha o campo confirmar senha';
                endif;

            else:
                // depois procurar aprender expressões regulares pra melhorar o filtro
                if (Checa::checarNome($formulario['nome'])) :
                    $dados['nome_erro'] = 'O nome informado é invalido';
                elseif (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                endif;
                
                if (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                
                elseif ($formulario['confirmar_senha'] != $formulario['senha']) :
                    $dados['confirmar_senha_erro'] = 'As senhas são diferentes';                    
                else:

                    if (!$this->usuarioModel->checarSeEmailJaCadastrado($formulario['email'])) :
                        if ($this->usuarioModel->armazenar($dados)) :
                            $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
                            echo 'Cadastro realizado com sucesso <hr>';
                        else:
                            die("Erro ao armazenar usuario no banco de dados");
                        endif;
                    else:
                        $dados['email_erro'] = 'O e-mail informado ja esta cadastrado';
                    endif;
                    

                endif;
                
            endif;
            
        else:
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirmar_senha_erro' => '',
            ];
        endif;
        
        var_dump($dados);
        $this->view('usuarios/cadastrar', $dados);
        
    }
    
    public function login()
    {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($formulario)) :
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha'])
            ];
        
            if (in_array("", $formulario)) :
            
                // verifica se os campos foram preenchidos

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

            else:
                // depois procurar aprender expressões regulares pra melhorar o filtro
                if (Checa::checarEmail($formulario['email'])) :
                    $dados['email_erro'] = 'O e-mail informado é invalido';
                endif;
                
                if (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                   
                else:
                    if ($this->usuarioModel->verificarUsuario($formulario['email'], $formulario['senha'])) :
                        echo 'Usuario cadastrado <br />';
                    else:
                        $dados['usuario'] = 'Usuario não cadastrado ou senha incorreta';
                    endif;
                    

                endif;
                
            endif;
            
        else:
            $dados = [
                'email' => '',
                'senha' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'usuario_erro' => ''
            ];
        endif;

        $this->view('usuarios/login', $dados);
    }
    
}
