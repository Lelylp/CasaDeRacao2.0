<?php

$imagem = $descricao = $tamanho = $preco = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $db = "base_php";
    $user = "postgre";
    $pass = "";

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_POST['id'];

        $sql = 'SELECT * FROM produto WHERE id = :id';

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $imagem = $row['imagem'];
            $descricao = $row['descricao'];
            $tamanho = $row['tamanho'];
            $preco = $row['preco'];
        }else{
            $imagem = $descricao = $tamanho = $preco = '';
        }
    }catch(PDOExeption $e){
        echo "Erro: " . $e->getMessage();
    }
}
?>