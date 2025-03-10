<?php
// Obter variáveis de ambiente
$host = getenv('mysql.railway.internal');
$port = getenv('3306');
$user = getenv('root');
$password = getenv('TsTjwImSOaPjVEvpraPNVmAazRsYZkfY');
$database = getenv('railway');

// Criar conexão
$conn = new mysqli($host, $user, $password, $database, $port);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro ao conectar ao MySQL: " . $conn->connect_error);
}
echo "Conectado ao MySQL com sucesso!";

// Exemplo de consulta
$sql = "SELECT 1";
$result = $conn->query($sql);
if ($result) {
    echo "Consulta executada com sucesso!";
} else {
    echo "Erro na consulta: " . $conn->error;
}

// Fechar conexão
$conn->close();
?>