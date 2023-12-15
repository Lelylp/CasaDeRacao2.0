<?php

use PHPUnit\Framework\TestCase;

class DatabaseInsertionTest extends TestCase
{
    public function testSuccessfulInsertion()
    {
        $host = "localhost";
        $db = "base_php";
        $user = "postgre";
        $pass = "";

        try {
            $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Simulando dados para inserção
            $id = 1;
            $email = "email";
            $senha = "senha";

            $sql = 'UPDATE usuario SET email = :email, senha = :senha WHERE id = :id';

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

            $this->assertTrue($stmt->execute());
        } catch (PDOException $e) {
            $this->fail("Erro durante a inserção: " . $e->getMessage());
        }
    }

    public function testFailedInsertion()
    {
        $host = "localhost";
        $db = "base_php";
        $user = "postgre";
        $pass = "";

        try {
            $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Simulando dados para inserção com um ID inválido
            $id = 'invalid'; // Isso deve resultar em um erro durante a execução

            $sql = 'UPDATE usuario SET email = :email, senha = :senha WHERE id = :id';

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            $this->assertFalse($stmt->execute());
        } catch (PDOException $e) {
            $this->assertStringContainsString("invalid input syntax for integer", $e->getMessage());
        }
    }
}
