<?php include "header.php"; ?>

<main class="mt-7">
    <div class="container">
        <h2 class="text-center mb-4">Produtos Disponíveis</h2>

        <div id="cart-info" class="mb-3">
            <span>Carrinho (<span id="cart-count">0</span> itens)</span>
        </div>

        <div id="products-container" class="row">
            <!-- Aqui vão os cards de produtos -->
            <?php
            // Exemplo de dados de produtos (pode adicionar os dados reais do banco de dados)
            $products = array(
                array("img\Racao Premier.png", "Ração Premier Ambientes Internos Demacare Cães Adultos Raças Pequenas Sabor Salmão", "1 Kg - Cães caseiros - Possui Ômegas 3 e 6 e Zinco ", 104.89),
                array("img\Racao Golden.png", "Ração Golden para Gatos Adultos Castrados Sabor Salmão", "10,1kg Premier Pet Adulto", 170.99),
                array("img\Racao Friskies.png", "Nestlé Purina Friskies Ração Seca Para Gatos Adultos", "Mix De Carnes 3Kg", 48.99),
                array("img\Teste Card do Carrinho.png", "Ração Champ Carne e Cereal Para Cães Adultos", "20 Kg - Estômago sensível - Sabor Carne", 57.50),
                array("img\Racao Atakama.png", "Ração Atacama Todas as Raças para Cães Adultos", "14 Kg - Condroitina e Glicosamina, promovem benefícios articulares.", 157.50),
                array("img\Racao Excellence.png", "Ração Excellence para Cães Adultos de Raças Médias", "15 Kg - Faixa etaria bebê", 257.50),
                array("img\Racao Hills.png", "Ração Hill's Science Diet para Cães Adultos 7+ Pedaços Pequenos", "6 Kg - Faixa etária Sênior - Sabor Frango", 349.40),
                array("img\Racao Fri Dog.png", "Fri Dog Vegetariana", "15 Kg - Alívio de alergias - Formato de grânulos", 338.00),
                // Adicionar mais produtos aqui se quiser
            );

            foreach ($products as $product) {
                echo '<div class="col-md-3 mb-4">';
                echo '<div class="card">';
                echo '<img src="' . $product[0] . '" class="card-img-top" alt="Produto">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product[1] . '</h5>';
                echo '<p class="card-text">' . $product[2] . '</p>';
                echo '<p class="card-text">R$ ' . number_format($product[3], 2) . ' por unidade</p>';
                echo '<div class="input-group mb-3">';
                echo '<button class="btn btn-outline-secondary" type="button" onclick="updateCart(1, \'' . $product[1] . '\')">+</button>';
                echo '<input type="text" class="form-control text-center" id="quantity-' . $product[1] . '" value="0" readonly>';
                echo '<button class="btn btn-outline-secondary" type="button" onclick="updateCart(-1, \'' . $product[1] . '\')">-</button>';
                echo '</div>';
                echo '<button class="btn btn-primary" onclick="addToCart(\'' . $product[1] . '\')">Adicionar ao Carrinho</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
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