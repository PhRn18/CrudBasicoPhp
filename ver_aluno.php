<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver aluno</title>
</head>
<body>
    <table style="border:2px solid #ccc">
        <thead>
            <th>Nome</th>
            <th>Idade</th>
            <th>Altura</th>
            <th>Escolaridade</th>
            <th>DELETAR</th>
            <th>EDITAR</th>
        </thead>
        <tbody>
            <?php
                include 'conexao.php';
                $consulta = 'SELECT * FROM aluno';
                $consultaAluno = mysqli_query($conexao,$consulta);
                while($linha=mysqli_fetch_array($consultaAluno))
                {
                    echo '<tr><td>'. $linha['nome'] . '</td>';
                    echo '<td>' . $linha['idade'] . '</td>';
                    echo '<td>' . $linha['altura'] . '</td>';
                    echo '<td>' . $linha['escolar'] . '</td>';
            ?>
                <td>
                    <a href="deleta_aluno.php?codigo=<?php echo $linha['codigo'];?>">
                        <input type="submit" value="DELETAR"/>
                    </a>
                </td>
                    <td>
                        <a href="aluno.php?editar=<?php echo $linha['codigo'];?>">
                            <input type="submit" value="EDITAR">
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="aluno.php">Voltar</a>
</body>
</html>