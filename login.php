<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!--   FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--   STYLE -->
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <section class="figura">
        <div class="ilustra">
            <img src="Imagens/Shopping.svg" alt="Ilustração da  página principal">
        </div>

    </section>
    <section class="formulario">
        <div class="container-form">
            <h2>Faça seu Cadastro</h2>
            <p>Acesse sua conta informando seu nome de usuário e a senha </p>
            <ul class="menu-form">
                <li><a href="index.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <form method="POST" action="Controller/logar.php">
                <input type="text" required   placeholder="Nome" maxlength="80" name="nome">
                <input type="password" required placeholder="Senha" maxlength="15" name="senha">
                <input class="bt-login"  type="submit" name="submit" value="ACESSAR">
            </form>
        </div>
    </section>
    
</body>

</html>