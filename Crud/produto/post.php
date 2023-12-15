<?php

$products = [
    ["img\\Racao Premier.png", "Ração Premier Ambientes Internos Demacare Cães Adultos Raças Pequenas Sabor Salmão", "1 Kg - Cães caseiros - Possui Ômegas 3 e 6 e Zinco", 104.89],
    ["img\\Racao Golden.png", "Ração Golden para Gatos Adultos Castrados Sabor Salmão", "10,1kg Premier Pet Adulto", 170.99],
    ["img\\Racao Friskies.png", "Nestlé Purina Friskies Ração Seca Para Gatos Adultos", "Mix De Carnes 3Kg", 48.99],
    ["img\\Teste Card do Carrinho.png", "Ração Champ Carne e Cereal Para Cães Adultos", "20 Kg - Estômago sensível - Sabor Carne", 57.50],
    ["img\\Racao Atakama.png", "Ração Atacama Todas as Raças para Cães Adultos", "14 Kg - Condroitina e Glicosamina, promovem benefícios articulares.", 157.50],
    ["img\\Racao Excellence.png", "Ração Excellence para Cães Adultos de Raças Médias", "15 Kg - Faixa etaria bebê", 257.50],
    ["img\\Racao Hills.png", "Ração Hill's Science Diet para Cães Adultos 7+ Pedaços Pequenos", "6 Kg - Faixa etária Sênior - Sabor Frango", 349.40],
    ["img\\Racao Fri Dog.png", "Fri Dog Vegetariana", "15 Kg - Alívio de alergias - Formato de grânulos", 338.00]
];

$host = "localhost";
$db = "base_php";
$user = "postgre";
$pass = "";

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($products as $product) {
        $imgPath = $product[0];
        $productName = $product[1];
        $description = $product[2];
        $price = $product[3];

        $sql = 'INSERT INTO produtos (img_path, nome, descricao, preco) VALUES(:imgPath, :productName, :description, :price)';

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':imgPath', $imgPath, PDO::PARAM_STR);
        $stmt->bindParam(':productName', $productName, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);

        $stmt->execute();
    }

    echo "Produtos inseridos no banco de dados com sucesso!";
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
