<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles01.css">
</head>
<body>
    <?php 
    require_once('./conexao.php');

    $id = $_POST['id'];

    $sql = "SELECT * FROM  aluno where id= :id";

    $retorno = $conexao->prepare($sql);

    $retorno->bindParam(":id",$id , PDO::PARAM_INT);

    $retorno->execute();

    $array_retorno=$retorno->fetch();

    $nome = $array_retorno['nome'];
    $idade = $array_retorno['idade'];
    $cep = $array_retorno['cep'];
    $email = $array_retorno['email'];
    $turma = $array_retorno['turma'];

    ?>
    <form method="POST" action="grudaluno.php">
<h2>atualização de cadrastro</h2>
    <div id="a1">
        <label for="nome">nome do aluno</label>
        <input type="text" id="Naluno" name="nome" value="<?php echo $nome ?>">

        <label for="idade">idade do aluno</label>
        <input type="number" id="Nidade" name="idade" value="<?php echo $idade ?>">

        <label for="cep">cep do aluno</label>
        <input type="text" id="cep" name="cep" value="<?php echo $cep ?>">
    </div>
    <div id="a2">
        <label for="email">email</label>
        <input type="email" id="Nemail" name="email" value="<?php echo $email ?>">

        <label for="turma">turma</label>
        <input type="text" id="Nturma" name="turma" value="<?php echo $turma ?>">
    </div>

        <input type="hidden" name="id" value="<?php echo $id?>">
    <div id="a3">
        <button type="submit" id="Nbotao" name="update" value="update">atualizar</button>
    </div>
    </form>


</body>
</html>
