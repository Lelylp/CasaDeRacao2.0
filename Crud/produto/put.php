<?php

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $host = "localhost";
    $db = "base_php";
    $user = "postgre";
    $pass = "";

    parse_str(file_get_contents("php://input"), $_PUT);

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_PUT['id'];
        $imagem = $row['imagem'];
        $descricao = $row['descricao'];
        $tamanho = $row['tamanho'];
        $preco = $row['preco'];

        $sql = 'UPDATE produto SET imagem = :imagem, descricao = :descricao, tamanho = :tamanho, preco = :preco WHERE id = :id';

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':imagem', $imagem, PDO::PARAM_STR);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_STR);
        $stmt->bindParam(':preco', $preco, PDO::PARAM_STR);

        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Conexão não estabelecida!";
}
?>
