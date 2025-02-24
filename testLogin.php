<?php
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        include_once('bancoC.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM professor WHERE email = '$email' AND senha = '$senha'";
        $sql1 = "SELECT Nome_Aluno FROM aluno WHERE email = '$email' AND senha = '$senha'";
        $result1 = $conexao->query($sql1);
        $result = $conexao->query($sql);
        if (mysqli_num_rows($result) >= 1) {
            header('Location: chamabanco.php');
        } else {
            if (mysqli_num_rows($result1) >= 1) {
                echo "Área do aluno";
                if ($result1->num_rows > 0) { 
                    // Inicializar uma string vazia
                     $resultString = ""; 
                     // Iterar sobre os resultados 
                     while ($row = $result1->fetch_assoc()) { 
                        // Concatenar cada linha em uma string 
                        $resultString .= implode(", ", $row) . "\n"; } // Exibir a string final
                         echo $resultString; } 
                        else { echo "Nenhum resultado encontrado."; }
            } elseif (mysqli_num_rows($result) >= 1) {
                echo "Área do profesor";
            }
        } 
    }
    else {
        header('Location: tela-de-login.php');
    }
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="#home"><i class="fas fa-user"></i><span>Aluno</span></a>
        </nav>
    </header>

    <div class="container">
        <section id="home" class="home"><?php echo $resultString ?></section>
    </div>
</body>
</html>