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



## :technologist: Tecnologias Ultilizadas
<p align="center">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=html,css,php" />
  </a>
</p>
