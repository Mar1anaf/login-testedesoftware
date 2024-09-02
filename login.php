<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lg.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Login</title>
</head>

<!-- corpo da pagina -->
<body>

<div class="login-container">

        <h1>Bem-vindo(a) de volta</h1>

        <form action="./back-end/login_processo.php" method="post">
            <span>Entre com seu email e senha</span>
            <input type="text" id="username" name="username" placeholder="Endereço de email">
            <input type="password" id="password" name="password" placeholder="Senha">
            <button type="submit">Continuar</button>
        </form>

        <a href="cadastro.php">Não tem uma conta? Clique aqui</a>
</div>

</body>
<!-- fim corpo da pagina -->
</html>