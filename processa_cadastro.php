<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $nome_completo = $_POST["nome_completo"];
    $email = $_POST["email"];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    $servername = getenv('DB_HOST')? getenv('DB_HOST'): 'localhost';
    $username = getenv('DB_USERNAME')? getenv('DB_USERNAME'): 'root';
    $password = getenv('DB_PASSWORD')? getenv('DB_PASSWORD'): '';
    $dbname = getenv('DB_NAME')? getenv('DB_NAME'): 'minotauro_esportes_novo';

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Inserir dados na tabela
    $sql = "INSERT INTO usuarios (nome_completo, email, senha) VALUES ('$nome_completo', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Cadastro realizado com sucesso!");';
        echo 'window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Erro ao cadastrar: ' . $conn->error . '");</script>';
    }
}

?>
