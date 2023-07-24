<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('conexao.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha'";

        $result = $link->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header('Location: ../login.php');
        }
        else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: ../dashboard.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>