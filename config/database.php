<?php


// =========================================
// CONEXÃO COM O BANCO DE DADOS
// =========================================

function conectarBanco()
{

    // =====================================
    // DADOS DA CONEXÃO
    // =====================================

    $host = "localhost";
$banco = "conecta_contagem";

    $usuario = "root";

    $senha = "";


    // =====================================
    // CRIA A CONEXÃO PDO
    // =====================================

    try {

        $pdo = new PDO(
            "mysql:host=$host;dbname=$banco;charset=utf8mb4",
            $usuario,
            $senha
        );


        // =================================
        // CONFIGURA O PDO PARA EXIBIR ERROS
        // =================================

        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );


        // =================================
        // RETORNA A CONEXÃO
        // =================================

        return $pdo;


    } catch (PDOException $erro) {

        die(
            "Erro ao conectar ao banco de dados: "
            . $erro->getMessage()
        );
    }
}
