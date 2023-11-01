<?php
// INICIAR SESSAO
session_start();

// VERIFICAR O USUARIO
if (isset($_SESSION["id_usuario"])) {
    // ALERT SE O USUARIO NAO ESTIVER LOGADO
    echo "<script>alert('Você já está logado'); window.location.href = 'index.php';</script>";
    exit;
}

// CONEXAO COM O BANCO DE DADOS PHPMYADMIN
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "minotauro_esportes";

$conn = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // CONSULTA AO BANCO DE DADOS PARA VERIFICAR O LOGIN
    $query = "SELECT id_usuario, nome_completo FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);
        $nome_completo = $row["nome_completo"];

        // ARMAZENAR DADOS DO USUARIO NA SESSAO
        $_SESSION["id_usuario"] = $row["id_usuario"];
        $_SESSION["nome_completo"] = $nome_completo;

        // ALERT DE BOAS VINDAS
        echo "<script>alert('Seja bem-vindo(a) $nome_completo'); window.location.href = 'index.php';</script>";
        exit;
    } else {
        // ALERT SE NÃO FOR POSSIVEL LOGAR
        echo "<script>alert('Não foi possível validar seus dados');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/620401fe69.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/style_login.css">
        <title>Cadastro</title>
    </head>
<body>
    <!--Cabeçalho-->
    <header>
        <h1> Minotauro Esportes</h1>
      </header>
      <!--Formulario-->
    <main class="pricipal">
        <form method="post" class="formulario">
            <div class="container">
                <fieldset class="dp">

                <!--Dados de login-->
                <form method="post" action="login.php">
                        <label for="em">E-mail</label><br>
                        <input type="email" name="email" placeholder="Digite seu E-mail"><br>
                        <label for="sen">Senha</label>
                            <input type="password" name="senha" placeholder="Digite sua senha"><br>
                            <button type="submit">Login</button><br>
                        <a class="cadastro" href="cadastro.php">Não possui login?<br>Cadastre-se</a>
                    </fieldset>
                </form>
            </div>

        </form>
    </main>
      <!--Rodapé-->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <p>Minotauro Center &copy; 2023</p>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#">Termos de Uso</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <p>Siga-nos nas redes sociais:</p>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>