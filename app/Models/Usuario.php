<?php


class Usuario
{
    
    private $db;
    
    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function armazenar($dados)
    {
        $this->db->query("INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)");
        $this->db->bind(':nome', $dados['nome']);
        $this->db->bind(':email', $dados['email']);
        $this->db->bind(':senha', $dados['senha']);
        
        if ($this->db->executa()) :
            return true;
        endif;
        return false;
    }
    
    public function checarSeEmailJaCadastrado($email)
    {
        $this->db->query("SELECT email FROM usuarios WHERE email = :email");
        $this->db->bind(':email', $email);
        if ($this->db->resultado()) :
            return true;
        endif;
        return false;
    }
    
        public function checarSenha($senha)
    {
        $this->db->query("SELECT email FROM usuarios WHERE senha = :senha");
        $this->db->bind(':senha', $senha);
        if ($this->db->resultado()) :
            return true;
        endif;
        return false;
    }
    
    public function verificarUsuario($email, $senha)
    {
        if ($this->checarSeEmailJaCadastrado($email)) :
            if ($this->checarSenha($senha)) :
                return true;
            endif;
            return false;
        endif;
        return false;
    }
}
