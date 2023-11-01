<?php
//INICIAR SESSAO
session_start();


if (isset($_SESSION["id_usuario"])) {
    $id_usuario = $_SESSION["id_usuario"];
    $nome_completo = $_SESSION["nome_completo"];

    // OBTER ITENS DO CARRINHO
    $carrinho = $_SESSION['carrinho'];

    // CALCULAR TOTAL DA COMPRAS
    $valor_total = 0;
    foreach ($carrinho as $item) {
        $valor_total += $item['product_price'] * $item['quantity'];
    }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/finaliza_style.css">
    <title>Ordem de Compra</title>
</head>
<body>
    <h1>Ordem de Compra</h1>
    <script>
        alert("Pedido realizado com sucesso!");
    </script>
    <p>Nome do Usuário: <?php echo $nome_completo; ?></p>

    <h2>Itens no Pedido:</h2>
    <table>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor Unitário</th>
            <th>Valor Total</th>
        </tr>
        <?php foreach ($carrinho as $item): ?>
            <tr>
                <td><?php echo $item['product_name']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>R$ <?php echo number_format($item['product_price'], 2, ',', '.'); ?></td>
                <td>R$ <?php echo number_format($item['product_price'] * $item['quantity'], 2, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Valor Total da Ordem de Compra: R$ <?php echo number_format($valor_total, 2, ',', '.'); ?></p>

    <p>Método de Pagamento: <?php echo $_POST["metodo_pagamento"]; ?></p>

    <button onclick="imprimirOrdemCompra()">Imprimir Ordem de Compra</button>
    <a href="index.php">Continue Comprando</a>

    <script>
        function imprimirOrdemCompra() { // PAR IMPRIMIR O RELATORIO
            window.print();

            // LIMPAR O CARRINHO AO FINALIZAR COMPRA
            <?php $_SESSION['carrinho'] = []; ?>
        }
    </script>
</body>
</html>

<?php
} else {
    // SE O USUARIO N ESTIVER LOGADO ENCAMINHAR PARA A O LOGIN
    header("Location: login.php");
}
?>

