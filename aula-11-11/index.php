<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>aula 11/11</title>
<link rel="stylesheet" href="styles01.css">
</head>
 
<body>

    <div>
       
        <div class="nav">
        <nav>
            <ul>
                <li>
                    <a href="home.php">HOME</a>
                </li>
                <li>
                    <div class="active"> <a href="index.php">CADASTRO ALUNO</a></div>
                </li>
                <li>
                    <a href="listaaluno.php">LISTAㅤALUNOS</a>
                </li>
                <li>
                    <a href="index-prof.php">CADASTRO PROFESSOR</a>
                </li>
                <li>
                    <a href="listaprof.php">LISTAㅤPROFESSOR</a>
                </li>
            </ul>
        </nav>
         <h1>sitema de aluno italo e erica</h1>
    </div>
    </div>

    <div class="boder">
   <h2>cadastro de aluno</h2>
    <form action="grudaluno.php" method="post">
<div id="a1">
   
        <label for="Naluno">ㅤㅤnome do alunoㅤ</label>
        <input type="text" name="Naluno" id="Naluno" required placeholder="digite o nome">
  
        <label for="Nidade">ㅤㅤidade do alunoㅤ</label>
        <input type="number" name="Nidade" id="Nidade" required placeholder="digite a idade">
     
        <label for="cep">ㅤㅤcep do alunoㅤ</label>
        <input type="text" name="cep" id="cep" required placeholder="digite o cep">
    </div>
</div>
<div id="a2">
   
        <label for="Nemail">ㅤㅤemail do alunoㅤ</label>
        <input type="email" name="Nemail" id="Nemail"required placeholder="digite o email">
  
        <label for="Nturma">ㅤㅤturma do alunoㅤ</label>
        <input type="text" name="Nturma" id="Nturma"required placeholder="digite a turma">
 <div id="a3">
   
        <input type="submit" id="Nbotao" name="cadastrar" value="cadastrar">
</div>
 
    </form>
</div>

</body>
</html>