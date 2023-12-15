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
        $email = $_PUT['email'];
        $senha = $_PUT['senha'];

        $sql = 'UPDATE usuario SET email = :email, senha = :senha WHERE id = :id';

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Conexão não estabelecida!";
}
?>
