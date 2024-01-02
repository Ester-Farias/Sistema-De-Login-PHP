<?php
        session_start();
        //if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        //    
        //    header("location: index.php?login=accessDenied");
        //}

        include('config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $sql = "SELECT * FROM usuarios
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'" ;

    $res = $conn->query($sql);
    if (!$res) {
        die("Erro na consulta: " . $conn->error);
    }
    $row = $res->fetch_object();
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = isset($row->nome) ? $row->nome : "Nome Indefinido";
        $_SESSION["tipo"] = $row->tipo;
        
        header("location: dashboard.php");
    } else {
        $accessDenied = true;
        $_SESSION['accessDenied'] = true;
        header("location: index.php?login=accessDenied");
    }
    




?>