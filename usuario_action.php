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
        <img src="https://www.ssu.ca/wp-content/uploads/2021/03/surface-E9NcsvbRVqo-unsplash-e1615815768341.jpg" alt="menina estudando">
    </div>
    <main class="container">
        <div>
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
</body>
</html>
