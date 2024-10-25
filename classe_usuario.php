<?php 

class Usuario{

    private $nome;
    private $login;
    private $senha;
    private $confirmaSenha;

    function __construct($nome, $login)
    {
      $this->nome = $nome;
      $this->login = $login;   
    }

    public function verificar(){
        if(empty($this->nome)){
            echo "Preencha o campo 'Nome'<br>";            
        }elseif(empty($this->login)){
            echo "Preencha o campo 'Login'<br>"; 
        }elseif(empty($this->senha)){
            echo "Preencha o campo 'Senha'<br>"; 
        }elseif(empty($this->confirmaSenha)){
            echo "Preencha o campo 'Confirme a Senha'<br>"; 
        }elseif($this->senha !== $this->confirmaSenha){
            echo "A senha e o confirma senha NÃO correspondem!<br>";
        }else{
            echo "Cadastro realizado com sucesso!";
        }
    }

    public function getNome(){
        return $this->nome;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getConfirmaSenha(){
        return $this->confirmaSenha;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function setSenha($senha){
        $this->senha = trim($senha);
    }

    public function setConfirmaSenha($confirmaSenha){
        $this->confirmaSenha = trim($confirmaSenha);
    }
}


