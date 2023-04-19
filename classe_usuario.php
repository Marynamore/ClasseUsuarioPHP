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
        if($this->nome == ""){
            echo "Preencha este campo<br>";            
        }elseif($this->login == ""){
            echo "Preencha este campo<br>"; 
        }elseif($this->senha == ""){
            echo "Preencha este campo<br>"; 
        }elseif($this->confirmaSenha == ""){
            echo "Preencha este campo<br>"; 
        }elseif($this->senha != $this->confirmaSenha){
            echo "A <strong>senha</strong> e o <strong>confirma senha NÃO</strong> estão iguais!<br>";
        }else{
            echo "<strong>Validação de usuário bem sucedida!</strong>";
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
        $this->confirmaSenha = $confirmaSenha;
    }
}

