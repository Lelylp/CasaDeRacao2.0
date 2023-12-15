<?php

use PHPUnit\Framework\TestCase;

class DatabaseUpdateTest extends TestCase
{
    public function testSuccessfulUpdate()
    {
        $host = "localhost";
        $db = "base_php";
        $user = "postgre";
        $pass = "";

        // Simulando dados para atualização
        $_PUT = [
            'id' => 1,
            'email' => 'NewValue1',
            'senha' => 'NewValue2',
        ];

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
    
            $this->assertTrue($stmt->execute());
        } catch (PDOException $e) {
            $this->fail("Erro durante a atualização: " . $e->getMessage());
        }
    }

    public function testFailedUpdate()
    {
        $host = "localhost";
        $db = "base_php";
        $user = "postgre";
        $pass = "";

        // Simulando dados para atualização com um ID inválido
        $_PUT = [
            'id' => 'invalid',
            'email' => 'NewValue1',
            'senha' => 'NewValue2',
        ];

        try {
            $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $id = $_PUT['id'];
            $email = $_PUT['email'];
            $senha = $_PUT['senha'];

            $sql = 'UPDATE tabela SET email = :email, senha = :senha WHERE id = :id';

            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

            $this->assertFalse($stmt->execute());
        } catch (PDOException $e) {
            $this->assertStringContainsString("invalid input syntax for integer", $e->getMessage());
        }
    }
}
?>