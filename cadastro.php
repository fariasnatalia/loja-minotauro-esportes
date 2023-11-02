<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/620401fe69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style_cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <!--Cabeçalho-->
    <header>
        <h1> Minotauro Esportes</h1>
      </header>
      <!--Formulario-->
    <main class="pricipal">
                <div class="container">
                <!--Dados Pessoais-->
            <form method="post" action="processa_cadastro.php">
                <fieldset class="dp">
                <h2>Criar conta</h2>
                  <label for="nome">Nome Completo</label>
                  <br>
                  <input type="text" id="nome_completo" name="nome_completo" placeholder="Insira seu Nome">
                    <br>
                    <label for="email">E-mail</label>
                    <br>
                        <input type="email" id="email" name="email" placeholder="Insira seu E-mail">
                    <br>
                    <label for="senha">Senha</label>
                    <br>
                        <input type="password"  id="senha" name="senha" placeholder="Insira uma Senha">
                    <br>
                        <button type="submit">Cadastrar</button>
                    <br>
                </fieldset>
            </form>
            </div>
    </main>
    <!--Rodapé-->
    <footer>
        <div class="footer-social">
            <p>Siga-nos nas redes sociais:</p>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div> 
   
    </footer>        <!-- <div class="footer-links">
            <ul>
                <li><a href="#">Termos de Uso</a></li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        

</body>
</html>