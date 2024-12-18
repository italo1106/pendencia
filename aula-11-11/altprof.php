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

    $sql = "SELECT * FROM  professor where id= :id";

    $retorno = $conexao->prepare($sql);

    $retorno->bindParam(":id",$id , PDO::PARAM_INT);

    $retorno->execute();

    $array_retorno=$retorno->fetch();

    $nome = $array_retorno['nome'];
    $idade = $array_retorno['idade'];
    $cep = $array_retorno['cep'];
    $email = $array_retorno['email'];
    $disciplina = $array_retorno['disciplina'];

    ?>
    <form method="POST" action="grudprof.php">
    <h2>atualização de cadrastro</h2>
    <div id="a1">
        <label for="nome">nome do professor</label>
        <input type="text" id="Nprof" name="nome" value="<?php echo $nome ?>">

        <label for="idade">idade do professor</label>
        <input type="number" id="pidade" name="idade" value="<?php echo $idade ?>">

        <label for="cep">cep do professor</label>
        <input type="text" id="cep" name="cep" value="<?php echo $cep ?>">
    </div>
    <div id="a2"></div>
        <label for="email">email do professor</label>
        <input type="email" id="pemail" name="email" value="<?php echo $email ?>">

        <label for="disciplina">disciplina ministrada</label>
        <input type="text" id="pdisciplina" name="disciplina" value="<?php echo $disciplina ?>">
    </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
    <div id="a3">
        <button type="submit"  id="Nbotao" name="update" value="update">atualizar</button>
    </div>
    </form>


</body>
</html>