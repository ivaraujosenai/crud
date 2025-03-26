<?php
include('conexao.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $conexao->query("DELETE FROM funcionarios WHERE id = '$id'");
    header('Location: index.php');
}

