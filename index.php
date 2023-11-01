<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
    <title>Minotauro Esportes</title>
</head>
<body>
    <!-- BARRA DE NAV -->
    <header>
        <nav>
        <ul>
            <li><a href="login.php"><i class="fas fa-user"></i> Login</a></li>
            <li><a href="log_out.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            <li><a href="cadastro.php"><i class="fas fa-user-plus"></i> Cadastre-se</a></li>
            <li><a href="carrinho.php"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
        </ul>
        </nav>        
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar produtos">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>        
    </header>
    <!-- CONTEUDO PRINCIPAL -->
    <main>
        <section class="featured-products">
            <!-- LISTA DE PRODUTOS -->
            <section class="featured-products">
    <!-- PRODUTO 1 -->
    <div class="product">
        <form method="post" action="carrinho.php">
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="product_name" value="Bola de Futebol adidas UCL League Void Football Ball">
            <input type="hidden" name="product_price" value="289.90">
            <img src="img/1.jpg" alt="Bola">
            <h2>Bola de Futebol adidas UCL League Void Football Ball</h2>
            <p>R$ 289,90</p>
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" value="null" min="1">
            <input type="submit" id="sub" value="Adicionar ao Carrinho">
        </form>
    </div>

    <!-- PRODUTO 2 -->
    <div class="product">
        <form method="post" action="carrinho.php">
            <input type="hidden" name="product_id" value="2">
            <input type="hidden" name="product_name" value="Raquete de tênis Ultra Power Wilson XL 112">
            <input type="hidden" name="product_price" value="204.99">
            <img src="img/2.jpg" alt="Raquete">
            <h2>Raquete de tênis Ultra Power Wilson XL 112</h2>
            <p>R$ 204,99</p>
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" value="null" min="1">
            <input type="submit" id="sub" value="Adicionar ao Carrinho">
        </form>
    </div>

    <!-- PRODUTO 3 -->
    <div class="product">
        <form method="post" action="carrinho.php">
            <input type="hidden" name="product_id" value="3">
            <input type="hidden" name="product_name" value="Chuteira do CR7 Nike de Campo Zoom Vapor 15 Elite">
            <input type="hidden" name="product_price" value="1409.99">
            <img src="img/3.jpg" alt="Chuteira">
            <h2>Chuteira do CR7 Nike de Campo Zoom Vapor 15 Elite</h2>
            <p>R$ 1.409,99</p>
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" value="null" min="1">
            <input type="submit" id="sub" value="Adicionar ao Carrinho">
        </form>
    </div>

    <!-- PRODUTO 4 -->
    <div class="product">
        <form method="post" action="carrinho.php">
            <input type="hidden" name="product_id" value="4">
            <input type="hidden" name="product_name" value="Tênis Nike Masculino Revolution 6 Casual">
            <input type="hidden" name="product_price" value="239.99">
            <img src="img/4.jpg" alt="Tênis">
            <h2>Tênis Nike Masculino Revolution 6 Casual</h2>
            <p>R$ 239,99</p>
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" value="null" min="1">
            <input type="submit" id="sub" value="Adicionar ao Carrinho">
        </form>
    </div>

    <!-- PRODUTO 5 -->
    <div class="product">
        <form method="post" action="carrinho.php">
            <input type="hidden" name="product_id" value="5">
            <input type="hidden" name="product_name" value="Kit Halteres De Barras Fitness 40cm com 12kg em Anilhas">
            <input type="hidden" name="product_price" value="220.50">
            <img src="img/5.jpg" alt="Kit Halteres">
            <h2>Kit Halteres De Barras Fitness 40cm com 12kg em Anilhas</h2>
            <p>R$ 220,50</p>
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" value="null" min="1">
            <input type="submit" id="sub" value="Adicionar ao Carrinho">
        </form>
    </div>

    <!-- PRODUTO 6 -->
    <div class="product">
        <form method="post" action="carrinho.php">
            <input type="hidden" name="product_id" value="6">
            <input type="hidden" name="product_name" value="Kimono Adidas">
            <input type="hidden" name="product_price" value="199.00">
            <img src="img/6.jpg" alt="Kimono">
            <h2>Kimono Adidas</h2>
            <p>R$ 199,00</p>
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" value="null" min="1">
            <input type="submit" id="sub" value="Adicionar ao Carrinho">
        </form>
    </div>
</section>
    </main>
    <!-- RODAPÉ -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="logo.png" alt="Minotauro Esportes">
                <p>Minotauro Esportes &copy; 2023</p>
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
