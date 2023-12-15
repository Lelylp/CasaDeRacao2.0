<?php include "header.php"; ?>

<main class="mt-7">
    <div class="container">
        <h2 class="text-center mb-4">Produtos Disponíveis</h2>

        <div id="cart-info" class="mb-3">
            <span>Carrinho (<span id="cart-count">0</span> itens)</span>
        </div>

        <div id="products-container" class="row">
            <?php
            $host = "localhost";
            $db = "base_php";
            $user = "postgre";
            $pass = "";

            try {
                $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $pdo->query('SELECT img_path, nome, descricao, preco FROM produtos');
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($products as $product) {
                    echo '<div class="col-md-3 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $product['img_path'] . '" class="card-img-top" alt="Produto">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $product['nome'] . '</h5>';
                    echo '<p class="card-text">' . $product['descricao'] . '</p>';
                    echo '<p class="card-text">R$ ' . number_format($product['preco'], 2) . ' por unidade</p>';
                    echo '<div class="input-group mb-3">';
                    echo '<button class="btn btn-outline-secondary" type="button" onclick="updateCart(1, \'' . $product['nome'] . '\')">+</button>';
                    echo '<input type="text" class="form-control text-center" id="quantity-' . $product['nome'] . '" value="0" readonly>';
                    echo '<button class="btn btn-outline-secondary" type="button" onclick="updateCart(-1, \'' . $product['nome'] . '\')">-</button>';
                    echo '</div>';
                    echo '<button class="btn btn-primary" onclick="addToCart(\'' . $product['nome'] . '\')">Adicionar ao Carrinho</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } catch(PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
            ?>
        </div>
    </div>
</main>

<?php include "footer.php"; ?>


<script>
    // Script para interatividade do carrinho
    let cartCount = 0;
    let cartTotal = 0;

    function addToCart(productName) {
        const quantityElement = document.getElementById('quantity-' + productName);
        const quantity = parseInt(quantityElement.value);

        if (quantity > 0) {
            cartCount += quantity;
            cartTotal += quantity * getProductPrice(productName);

            // Atualizar o carrinho no topo da página
            document.getElementById('cart-count').innerText = cartCount;

            // Reiniciar a quantidade no campo de input
            quantityElement.value = 0;

            // Adicionar lógica para adicionar ao carrinho (pode ser uma requisição AJAX ou JSON para o servidor, por exemplo)
            // Aqui da para enviar dados como o nome do produto, quantidade, etc., para o servidor
            // e atualizar o carrinho no backend.
        }
    }

    function updateCart(change, productName) {
        const quantityElement = document.getElementById('quantity-' + productName);
        let quantity = parseInt(quantityElement.value);

        if (change === 1) {
            quantity++;
        } else if (change === -1 && quantity > 0) {
            quantity--;
        }

        quantityElement.value = quantity;
    }

    function getProductPrice(productName) {
        // Adicionar aqui a lógica para obter o preço do produto com base no nome (pode ser uma consulta ao banco de dados, por exemplo)
        // Aqui esta com exemplo estatico para usar como referencia
        const productPrices = {
            'Produto 1': 10.99,
            'Produto 2': 15.99,
            'Produto 3': 20.99,
            'Produto 4': 12.99,
            // Adicionar mais produtos se quiser
        };

        return productPrices[productName] || 0;
    }
</script>