<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $db = "base_php";
    $user = "postgre";
    $pass = "";

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $row['email'];
        $senha = $row['senha'];

        $sql = 'INSERT INTO usuario (email, senha) VALUES(:email, :senha)';

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

        $stmt->execute();

        echo "Usuário inserido";
    }catch(PDOExeption $e){
        echo "Erro: " . $e->getMessage();
    }

}else{
    echo "Conexao nn estabelecida!";
}

?>