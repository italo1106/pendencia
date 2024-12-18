<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles01.css">
</head>
<body>

<div class="nav">
        <nav>
            <ul>
                <li>
                    <a href="home.php">HOME</a>
                </li>
                <li>
                    <a href="index.php">CADASTRO ALUNO</a>
                </li>
                <li>
                   <div class="active"><a href="listaaluno.php">LISTAㅤALUNO
            
                   </a></div>
                </li>
                <li>
                    <a href="index-prof.php">CADASTRO PROFESSOR</a>
                </li>
                <li>
                    <a href="listaprof.php">LISTAㅤPROFESSOR</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php require_once('./conexao.php');
   
   $retorno = $conexao->prepare('SELECT * FROM aluno');
   $retorno->execute();
      ?>
<div class="flex">
    
<h1>dados do aluno</h1>
<div id="f1">
   <table id="alunos">
    <tr>
      <th>nome</th>
      <th>idade</th>
      <th>cep</th>
      <th>email</th>
      <th>turma</th>
      <th>ㅤㅤ</th>
      <th>ㅤㅤ</th>
    </tr>
            <tr> <?php foreach($retorno->fetchall() as $value) {?>
                <tr>
                    <td><?php echo $value['nome'];?></td>
                    <td><?php echo $value['idade'];?></td>
                    <td><?php echo $value['cep'];?></td>
                    <td><?php echo $value['email'];?></td>
                    <td><?php echo $value['turma'];?></td>

                    <td>
                        <form action="altaluno.php" method="post">
                            <input name="id" type="hidden" value="<?php echo $value['ID'];?>"/>
                            <button name="alterar" type="submit">alterar</button>
                        </form>
                    </td>
                    <td>
                        <form action="grudaluno.php" method="get" >
                            <input name="id" type="hidden" value="<?php echo $value['ID'];?> " />
                        
                            <button name="deletar" type="submit">deletar</button>
                        </form>
                    </td>
            </tr>    
       <?php  }   ?>
    </tr>
</div>

</div>
</body>
</html>
