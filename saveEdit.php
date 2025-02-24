<?php
    include_once('bancoC.php');

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $Nome_Aluno = $_POST['Nome_Aluno'];
        $Peso_Aluno = $_POST['Peso_Aluno'];
        $Altura_Aluno = $_POST['Altura_Aluno'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE aluno SET Nome_Aluno='$Nome_Aluno', Peso_Aluno='$Peso_Aluno', Altura_Aluno='$Altura_Aluno', email='$email', senha='$senha' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: chamabanco.php')
?>