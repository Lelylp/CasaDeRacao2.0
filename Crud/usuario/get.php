<?php

$email = $senha = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $db = "base_php";
    $user = "postgre";
    $pass = "";

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_POST['id'];

        $sql = 'SELECT * FROM usuario WHERE id = :id';

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $email = $row['email'];
            $senha = $row['senha'];
        }else{
            $email = $senha = '';
        }
    }catch(PDOExeption $e){
        echo "Erro: " . $e->getMessage();
    }
}
?>