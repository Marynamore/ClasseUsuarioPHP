# Classe Usuario 

:pushpin: Orientação a Objetos – Estudo das Classes e Objetos


## :pencil: Exercicio de POO 
- [x] Crie uma classe USUARIO com os atributos nome, login, senha, confirmaSenha
- [x] Crie um CONSTRUTOR que receba o nome e o login para inicializar os valores desse atributo
- [x] Crie os METODOS acessores de cada atributo. 
- [x] Crie um método VERIFICAR que vai exibir quais atributos estão em branco e se a senha e confirmaSenha estão iguais... caso todos os atributos estejam preenchidos e a senha e confirmaSenha forem iguais, o método emitira uma mensagem de "Validação de usuário bem sucedida!".

## :joystick: Algumas Telas do Front-End
### :small_blue_diamond: Senha e Confirmar senha IGUAIS
![index](https://user-images.githubusercontent.com/86386469/233237650-b3d5407f-5507-4d7f-9396-91399396610d.png)
![result_true](https://user-images.githubusercontent.com/86386469/233236961-3baade12-3926-410f-8f92-8d2bbd8c607a.png)
***
### :small_blue_diamond: Senha e Confirmar senha DIFERENTES
![index_err](https://user-images.githubusercontent.com/86386469/233237112-ae48367d-4df7-4f4c-9535-3cdd236762ee.png)
![result_err](https://user-images.githubusercontent.com/86386469/233237133-6c94d05c-0d8e-4770-9b39-c1e48641efaf.png)


## Classe 
:pushpin: Em orientação a objetos, o conceito de classe nada mais é do que uma estrutura que define uns tipos de dados, podendo conter variáveis (chamaremos de atributos) e também funções (chamaremos de métodos). Classes manipulam definições e objetos manipulam valores.

```php
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
?>

```
## Contribuição

Contribuições são bem-vindas! Se você deseja contribuir para este projeto, siga as etapas abaixo:

1. Faça um fork deste repositório.
2. Crie um branch para a sua contribuição.
3. Faça as alterações desejadas.
4. Envie um pull request descrevendo suas alterações.

Todas as contribuições passarão por uma revisão antes de serem incorporadas ao projeto.

## :technologist: Tecnologias Ultilizadas
<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=html,css,php" />
  </a>
</p>
