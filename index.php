<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div id="container-cadastro">
            <h1>Cadastro de funcionarios</h1>
            <form action="cadastro.php" method="post" class="form-cadastro">
                <label for="">Nome:</label>
                <input type="text" name="nome" id="nome">
                <label for="">TEL:</label>
                <input type="text" name="tel" id="tel">
                <label for="">E-mail:</label>
                <input type="text" name="email" id="email">
                <button type="submit" name="cadastrar">Cadastrar</button>
            </form>
        </div>
        <div id="container-tabela">
            <h1>Cadastros</h1>
            <table>
                <tr id="titulo">
                    <td>Nome</td>
                    <td>TEL</td>
                    <td>E-mail</td>
                    <td>-</td>
                </tr>
                <div id="form-busca">
                    <form action="index.php" method="get" >
                        <input type="search" name="localizar" id="localizar">
                        <button type="submit">&#9906;</button>
                    </form>
                </div>                
                <?php
                    
                    if(isset($_GET['localizar'])){
                        $localizar = $_GET['localizar'];
                        $busca = $conexao->query("SELECT * FROM funcionarios WHERE nome LIKE '%$localizar%'");                        
                    }
                    else{
                        $busca = $conexao->query("SELECT * FROM funcionarios"); 
                    }                    
                     
                    while($cadastros = mysqli_fetch_array($busca,MYSQLI_ASSOC)){                    
                ?>
                <tr>
                    <td><?php echo $cadastros['nome']; ?></td>
                    <td><?php echo $cadastros['tel']; ?></td>
                    <td><?php echo $cadastros['email']; ?></td>
                    <td>                        
                        <form action="editar.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $cadastros['id']; ?>">
                            <button id="btn-editar" type="submit">&#9998;</button>
                        </form>
                        <form action="apagar.php" method="get">
                            <input type="hidden" name="id" value="<?php echo $cadastros['id']; ?>">
                            <button id="btn-apagar" type="submit">&#10008;</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        
    </section>
</body>
</html>