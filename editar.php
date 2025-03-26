<?php
    include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <section>
        <div id="container-cadastro">
            <h1>Editar Cadastro</h1>
            
                <form action="alterar.php" method="post" class="form-cadastro">
                    <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $busca = $conexao->query("SELECT * FROM funcionarios WHERE id = '$id'"); 
                            $cadastros = mysqli_fetch_array($busca,MYSQLI_ASSOC);
                        }
                    ?>
                        <input type="hidden" name="id" value="<?php echo $cadastros['id'];?>">
                        <label for="">Nome:</label>
                        <input type="text" name="nome" id="nome" value="<?php echo $cadastros['nome'];?>">
                        <label for="">TEL:</label>
                        <input type="text" name="tel" id="tel" value="<?php echo $cadastros['tel'];?>">
                        <label for="">E-mail:</label>
                        <input type="text" name="email" id="email" value="<?php echo $cadastros['email'];?>">
                    <button type="submit" name="cadastrar">Alterar</button>
                </form>
            
        </div>
    </section>
</body>
</html>