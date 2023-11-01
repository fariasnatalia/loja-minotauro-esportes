<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = floatval($_POST['product_price']);
    $quantity = intval($_POST['quantity']);

    $item_index = array_search($product_id, array_column($_SESSION['carrinho'], 'product_id'));

    if ($item_index !== false) {
       
        $_SESSION['carrinho'][$item_index]['quantity'] += $quantity;
    } else {
        
        $item = [
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'quantity' => $quantity
        ];
        $_SESSION['carrinho'][] = $item;
    }

   
    header('Location: carrinho.php');
    exit;
}

//  REMOVE ITEM
if (isset($_GET['remove'])) {
    $remove_index = $_GET['remove'];
    if (isset($_SESSION['carrinho'][$remove_index])) {
        unset($_SESSION['carrinho'][$remove_index]);
    }
}

// ATUALIZA A QUANTIDADE
if (isset($_GET['decrease'])) {
    $decrease_index = $_GET['decrease'];
    if (isset($_SESSION['carrinho'][$decrease_index])) {
        $_SESSION['carrinho'][$decrease_index]['quantity']--;
        if ($_SESSION['carrinho'][$decrease_index]['quantity'] <= 0) {
            unset($_SESSION['carrinho'][$decrease_index]);
        }
    }
}

if (isset($_GET['increase'])) {
    $increase_index = $_GET['increase'];
    if (isset($_SESSION['carrinho'][$increase_index])) {
        $_SESSION['carrinho'][$increase_index]['quantity']++;
    }
}

// VERIFICA SE O CARRINHO TA VAZIO
$carrinho_vazio = empty($_SESSION['carrinho']);

?>

<!--HTML DO CARRINHO-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <table>
        <tr>
            <th>Produto</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Valor Total</th>
            <th>Ação</th>
        </tr>
        <?php

        // EXIBIR ITENS
        $total_carrinho = 0;
        if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
            foreach ($_SESSION['carrinho'] as $key => $item) {
                $valor_total_item = $item['product_price'] * $item['quantity'];
                $total_carrinho += $valor_total_item;
                echo '<tr>';
                echo '<td><img src="img/' . $item['product_id'] . '.jpg" alt="' . $item['product_name'] . '" style="max-width: 100px;"></td>';
                echo '<td>' . $item['product_name'] . '</td>';
                echo '<td>R$ ' . number_format($item['product_price'], 2, ',', '.') . '</td>';
                echo '<td>';
                echo '<a href="carrinho.php?decrease=' . $key . '">-</a>';
                echo $item['quantity'];
                echo '<a href="carrinho.php?increase=' . $key . '">+</a>';
                echo '</td>';
                echo '<td>R$ ' . number_format($valor_total_item, 2, ',', '.') . '</td>';
                echo '<td><a href="carrinho.php?remove=' . $key . '">Remover</a></td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
    <?php
    if ($carrinho_vazio) {
        echo "<p>Seu carrinho está vazio. Adicione pelo menos um item para finalizar o pedido.</p>";
    } else {
    ?>
    <p>Total do Carrinho: R$ <?php echo number_format($total_carrinho, 2, ',', '.'); ?></p><br>

    <p>Escolha o método de pagamento:</p>
    <form action="finalizar_pedido.php" method="post">
        <select name="metodo_pagamento">
            <option value="pix">Pix</option>
            <option value="boleto">Boleto Bancário</option>
            <option value="cartao">Cartão de Crédito</option>
        </select>
        <input type="submit" value="Finalizar Pedido">
    </form>
    <?php
    }
    ?>

    <a href="index.php">Continue Comprando</a>
    
    <!--RODAPE-->
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
