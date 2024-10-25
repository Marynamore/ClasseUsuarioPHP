<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Classe Usuario</title>
</head>
<body>
    <div class="img-wrapper">
        <img src="https://images.unsplash.com/photo-1685625971422-6fdc6c5129d6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=401&q=80" alt="Degradê de bolinhas">
        <main class="container">
            <h1>Informação do Usuário</h1>
            <form action="./usuario_action.php" method="post">
                <label for="nome" class="field-label">Nome:</label>
                <input type="text" name="nome" id="idnome" class="field">

                <label for="login" class="field-label">Login de Usuario:</label>
                <input type="text" name="login" id="idlogin" class="field">

                <label for="senha" class="field-label">Senha de Usuario:</label>
                <input type="password" name="senha" id="idsenha" class="field">

                <label for="confirmarSenha" class="field-label">Confirme sua Senha:</label>
                <input type="password" name="confirmaSenha" id="idcsenha" class="field">
                
                <input type="submit" value="Enviar" class="field-submit">
            </form>
        </main>
    </div>
</body>
</html>
