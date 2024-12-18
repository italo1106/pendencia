<?php 
require_once('conexao.php');
if(isset($_POST['cadastrar'])){
    
    $nome = $_POST["Nprof"];
    $idade = $_POST["pidade"];
    $cep = $_POST["cep"];
    $email = $_POST["pemail"];
    $disciplina = $_POST["pdisciplina"];

$sql = "INSERT INTO professor(nome,idade,cep,email,disciplina) 
                VALUES('$nome',$idade,'$cep','$email','$disciplina')";

        
        $sqlcombanco = $conexao->prepare($sql);

        
        $sqlcombanco->execute();

}
if(isset($_POST['update'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $disciplina = $_POST['disciplina'];
    $id = $_POST['id'];

    $sql = "UPDATE professor SET nome = :nome, idade = :idade, cep = :cep, email = :email, disciplina = :disciplina WHERE id = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome,PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade,PDO::PARAM_INT);
    $stmt->bindParam(':cep',$cep,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':disciplina',$disciplina,PDO::PARAM_STR);
    $stmt->execute();


}
if(isset($_GET['deletar'])){
  
    $id = $_GET['id'];

    $sql = "DELETE FROM professor WHERE id = :id";
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam('id',$id,PDO::PARAM_INT);
    $stmt->execute();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles01.css">
</head>
<body>
    <h1>tudo concluido </h1>
    <button id="Nbotao"><a href="listaprof.php">voltar </a></button>
</body>
</html>