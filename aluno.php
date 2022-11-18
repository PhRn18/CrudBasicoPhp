<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularioi</title>
</head>
<body>
    <?php if(!isset($_GET['editar'])){ ?>
    <form method="POST" action="processa_aluno.php">
        <h2>INSERIR ALUNO</h2>
        <label><h3>Nome</h3></label>
        <input type="text" name="nome"/>
        <label><h3>Idade:</h3></label>
        <input type="number" name="idade"/>
        <label><h3>Altura</h3></label>
        <input type="text" name="altura"/>
        <label><h3>Escolar</h3></label>
        <input type="text" name="escolaridade"/>
        <input type="submit" value="CADASTRAR"/>      
    </form>
    <?php 
    }
    else{  
    ?>
    <?php
        include 'conexao.php';
        $consulta = "SELECT * FROM aluno";
        $consulta_aluno = mysqli_query($conexao,$consulta);
        while($linha = mysqli_fetch_array($consulta_aluno)){
            if($linha['codigo']==$_GET['editar']){
    ?>
    <form method="POST" action="edita_aluno.php">
        <h2>EDITAR ALUNO</h2>
        <input type="hidden" name="codigo" value="<?php echo $linha['codigo'];?>"/>
        <label><h3>Nome</h3></label>
        <input type="text" name="nome" value="<?php echo $linha['nome'];?>"/>
        <label><h3>Idade:</h3></label>
        <input type="number" name="idade" value="<?php echo $linha['idade'];?>"/>
        <label><h3>Altura</h3></label>
        <input type="text" name="altura" value="<?php echo $linha['altura'];?>"/>
        <label><h3>Escolar</h3></label>
        <input type="text" name="escolaridade" value="<?php echo $linha['escolar'];?>"/>
        <input type="submit" value="Editar"/>      
    </form>
    <?php } ?>
    <?php } ?>
    <?php } ?>
</body>
</html>