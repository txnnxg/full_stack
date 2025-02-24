<?php if (!empty($_GET['id'])) {
    include_once('bancoC.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM aluno WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0) {
        while($user_data = mysqli_fetch_assoc($result)) {
            $Nome_Aluno = $user_data['Nome_Aluno'];
            $Peso_Aluno = $user_data['Peso_Aluno'];
            $Altura_Aluno = $user_data['Altura_Aluno'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
        }
    } else {
        header('Location: chamabanco.php');
    }
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

        #update {
            background-color: #27ae60;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #update:hover {
            background-color: #27ae89;
        }
        #h1 {
            background-color: #27ae60;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            text-align: center;
        }
    @media (max-width: 400px) {
    .box {
        width: 50%;
    }
}
    </style>
</head>

<body>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Cadastro da Academia</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome_Aluno" id="Nome_Aluno" class="inputUser" value="<?php echo $Nome_Aluno ?>" required>
                    <label for="Nome_Aluno" class="labelInput"> Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="float" name="Peso_Aluno" id="Peso_Aluno" class="inputUser" value="<?php echo $Peso_Aluno ?>" required>
                    <label for="Peso_Aluno" class="labelInput">Peso</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="float" name="Altura_Aluno" id="Altura_Aluno" class="inputUser" value="<?php echo $Altura_Aluno ?>" required>
                    <label for="Altura_Aluno" class="labelInput">Altura</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="update" id="update">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>