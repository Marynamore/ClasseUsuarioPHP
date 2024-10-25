<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultado Usuário</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://images.unsplash.com/photo-1685625971422-6fdc6c5129d6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=401&q=80" alt="Degradê de bolinhas">
        <main class="container">
            <div class="content">
                <p>
                    <?php 
                        require_once 'classe_usuario.php';
                        
                        $nome = $_REQUEST["nome"];
                        $login = $_REQUEST["login"];
                        $senha = $_REQUEST["senha"];
                        $confirmaSenha = $_REQUEST["confirmaSenha"];

                        $usu = new Usuario($nome,$login);

                        $usu->setSenha($senha);
                        $usu->setConfirmaSenha($confirmaSenha);
                        $usu->verificar();

                    ?>
                </p>
                <button onclick="javascript:history.go(-1)">Voltar</button>
            </div>
        </main>
    </div>
</body>
</html>
