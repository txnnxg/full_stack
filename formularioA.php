<?php if (isset($_POST['submit'])) {
    include_once('bancoC.php');
    $Nome_Aluno = $_POST['Nome_Aluno'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $result = mysqli_query($conexao, "INSERT INTO aluno (Nome_Aluno, email, senha) VALUES ('$Nome_Aluno', '$email', '$senha')");
    $ultimo_id = mysqli_insert_id($conexao);
    echo "Novo registro inserido com o ID: " . $ultimo_id;
} ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #27ae60;
            margin-top: 15px;
            margin-left: 1px;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }

        fieldset {
            border: 3px solid #27ae60;
        }

        legend {
            border: 1px solid #27ae60;
            padding: 10px;
            text-align: center;
            background-color: #27ae60;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: #27ae60;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-color: #27ae60;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #submit:hover {
            background-color: #27ae89;
        }
        #voltar {
            background-color: #27ae60;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            background-color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
<a href="index.php" class="btn btn-primary" id="voltar" tabindex="-1" role="button">Voltar</a>
    <div class="box">
        <form action="formularioA.php" method="POST">
            <fieldset>
                <legend><b>Cadastro da Academia</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome_Aluno" id="Nome_Aluno" class="inputUser" required>
                    <label for="Nome_Aluno" class="labelInput"> Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="submit" name="submit" id="submit">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>