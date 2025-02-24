<?php if (!empty($_GET['id'])) {
    include_once('bancoC.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM aluno WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM aluno WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    } else {
        header('Location: chamabanco.php');
    }
} ?>