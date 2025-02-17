<?php
switch($_REQUEST["acao"]){
    case "cadastrar":
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $born_date = $_POST["born_date"];

    $sql = "INSERT INTO usuarios (name, email, password,  born_date) VALUES ('{$name}','{$email}','{$password}','{$born_date}')";

    $res = $conn ->query($sql);

    if($res==true){
        print "<script> alert('Cadastro com sucesso');</script>";
        print "<script> location.href='?page=listar';</script>";
    }
    else{
        print "<script> alert('Não foi possível cadastrar');</script>";
        print "<script> location.href='?page=listar';</script>";
    }
    break;

    case "editar":
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $born_date = $_POST["born_date"];

        $sql = "UPDATE usuarios SET name='{$name}',
        email= '{$email}',
        password='{$password}',
        born_date='{$born_date}'
        WHERE id=".$_REQUEST["id"];

        $res = $conn ->query($sql);

        if($res==true){
            print "<script> alert('Editado com sucesso');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        else{
            print "<script> alert('Não foi possível Editar');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
    break;

    case "excluir":
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        
        if($res==true){
            print "<script> alert('Excluido com sucesso');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        else{
            print "<script> alert('Não foi possível excluir');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
    break;
}