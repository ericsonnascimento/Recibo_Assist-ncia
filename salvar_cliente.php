<?php
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $cep = $_POST["cep"];

            $sql = "INSERT INTO cliente (nome, email, telefone, endereco, cidade, estado, cep)
            VALUES ('{$nome}', '{$email}', '{$telefone}', '{$endereco}', '{$cidade}', '{$estado}', '{$cep}')";

            $resultado = $conn->query($sql);
            break;

        case 'cadastrar':
            # code...
            break;
        case 'cadastrar':
            # code...
            break;
        default:
            # code...
            break;
    }