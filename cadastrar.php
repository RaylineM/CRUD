<?php
 session_start();
include("conexao.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = "INSERT INTO usuarios(id,nome,email,senha) VALUES (null,'$nome','$email','$senha')";

if(mysqli_query($link,$sql)){
    echo "<script>
    alert('Usuário com sucesso');
    window.location.href = '../dashboard.php';
    </script>";
}
else{
    echo "<script>
    alert('Erro');
    window.location.href = '../index.php';
    </script>";
    echo "Erro".mysqli_error($link);
}
mysqli_close($link);

