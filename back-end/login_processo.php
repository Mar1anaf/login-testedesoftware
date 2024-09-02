<?php
session_start();
include '../conexao.php';

$email = $_POST['username']; 
$senha = md5($_POST['password']);

if ($result->num_rows > 0) {
    $_SESSION["loggedin"] = true;
    header("Location: ../index_adm.php");
} else {
    // Consulta para verificar se o usuário é um usuário regular
    $sql = "SELECT * FROM cadastro WHERE cadastro_email = '$email' AND cadastro_senha = '$senha'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["loggedin"] = true;
        $_SESSION['usuario_id'] = $row['cadastro_id'];
 
        header("Location: ../index.php");
    } else {
        print "<script>alert('Email ou senha incorretos');</script>";
        print "<script>location.href='../login.php';</script>";
    }
}

$conexao->close();
?>
