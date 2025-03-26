<?php

include('conexao.php');

if(isset($_POST['cadastrar'])){
    
    
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    if($nome == "" or $tel =="" or $email == ""){
        echo ("Preencha todos os campos!");       
        header("Location: index.php");           
    }
    else{
        $conexao->query("INSERT INTO funcionarios SET nome = '$nome', tel = '$tel', email = '$email'");
        header("Location: index.php");        
    }
    
}