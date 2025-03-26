<?php

include('conexao.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    
    echo $id;

    $conexao->query("UPDATE funcionarios SET nome = '$nome', tel = '$tel', email = '$email' WHERE id = '$id'");
    
    header('Location: index.php');
}