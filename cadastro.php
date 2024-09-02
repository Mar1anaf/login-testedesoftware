<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lg.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Cadastro</title>
</head>

<!-- corpo da pagina -->
<body>

<div class="login-container">

        <h1>Crie sua conta</h1>

        <form action="./back-end/cadastro_processo.php" method="post">
            <span>Registre-se abaixo</span>
            <input type="text" name="nome" placeholder="Nome de usuário">
            <input type="email" name="email" placeholder="Endereço de email">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Continuar</button>
        </form>

        <a href="login.php">Já tem uma conta? Clique aqui</a>
</div>

</body>
<!-- fim corpo da pagina -->
</html>