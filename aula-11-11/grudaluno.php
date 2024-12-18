<?php 
require_once('conexao.php');
if(isset($_POST['cadastrar'])){
    
    $nome = $_POST["Naluno"];
    $idade = $_POST["Nidade"];
    $cep = $_POST["cep"];
    $email = $_POST["Nemail"];
    $turma = $_POST["Nturma"];
   

$sql = "INSERT INTO aluno(nome,idade,cep,email,turma) 
                VALUES('$nome',$idade,'$cep','$email','$turma')";

        
        $sqlcombanco = $conexao->prepare($sql);

        
        $sqlcombanco->execute();

}
if(isset($_POST['update'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $turma = $_POST['turma'];
    $id = $_POST['id'];

    $sql = "UPDATE aluno SET nome = :nome, idade = :idade, cep = :cep, email = :email, turma = :turma WHERE id = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome,PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade,PDO::PARAM_INT);
    $stmt->bindParam(':cep',$cep,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':turma',$turma,PDO::PARAM_STR);
    $stmt->execute();


}
if(isset($_GET['deletar'])){
  
    $id = $_GET['id'];

    $sql = "DELETE FROM aluno WHERE id = :id";
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
    <button id="Nbotao"><a href="listaaluno.php">voltar</a></button>
</body>
</html>