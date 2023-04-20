# Classe Usuario 

:pushpin: Orientação a Objetos – Estudo das Classes e Objetos
***

## Classe 
:pushpin: Em orientação a objetos, o conceito de classe nada mais é do que uma estrutura que define uns tipos de dados, podendo conter variáveis (chamaremos de atributos) e também funções (chamaremos de métodos). Classes manipulam definições e objetos manipulam valores.

```ruby
<?php 

class Calculadora{
    private $valor1;
    private $valor2;
    
    
    function soma($valor1,$valor2){
        return $this->valor1 = $valor1 += $this->valor2 = $valor2;
        
    }

    function subtracao($valor1, $valor2){
        return $this->valor1 = $valor1 -= $this->valor2 = $valor2;
    }

    function multiplicacao($valor1, $valor2){
        return $this->valor1 = $valor1 *= $this->valor2 = $valor2;
    }

    function divisao($valor1, $valor2){
        return $this->valor1 = $valor1 /= $this->valor2 = $valor2;
    }

    function getValor1(){
        return $this->valor1;
    }

    function setValor1($valor1){
        $this->valor1 = $valor1;
    }

    function getValor2(){
        return $this->valor2;
    }

    function setValor2($valor2){
        $this->valor2 = $valor2;
    }
}

?>
```
  
## :pencil: Exercicio de POO 
- [x] Crie uma classe USUARIO com os atributos nome, login, senha, confirmaSenha
- [x] Crie um CONSTRUTOR que receba o nome e o login para inicializar os valores desse atributo
- [x] Crie os METODOS acessores de cada atributo. 
- [x] Crie um método VERIFICAR que vai exibir quais atributos estão em branco e se a senha e confirmaSenha estão iguais... caso todos os atributos estejam preenchidos e a senha e confirmaSenha forem iguais, o método emitira uma mensagem de "Validação de usuário bem sucedida!".



## :technologist: Tecnologias Ultilizadas
<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=html,css,php" />
  </a>
</p>

***
