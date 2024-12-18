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
                    <a href="index.php">CADASTRO ALUNO</a>
                </li>
                <li>
                    <a href="listaaluno.php">LISTAㅤALUNO</a>
                </li>
                <li>
                    <div class="active"><a href="index-prof.php">CADASTRO PROFESSOR</a></div>
                </li>
                <li>
                    <a href="listaprof.php">LISTAㅤPROFESSOR</a>
                </li>
            </ul>
        </nav>
        <h1>sitema estudantil</h1>
    </div>
</div>
<div class="boder">

   <h2>cadastro de professorㅤ</h2>
    <form action="grudprof.php" method="post">

   <div id="a1">
        <label for="Nprof">nome do professorㅤㅤㅤ</label>
        <input type="text" name="Nprof" id="Nprof" required placeholder="digite o nome">
    
        <label for="pidade">idade do professorㅤㅤㅤ</label>
        <input type="number" name="pidade" id="pidade"required placeholder="digite a idade">
     
        <label for="cep">cep  do professorㅤㅤ</label>
        <input type="text" name="cep" id="cep"required placeholder="digite o cep">
    </div>
    <div id="a2">
        <label for="pemail">email do professorㅤㅤㅤㅤ</label>
        <input type="email" name="pemail" id="pemail"required placeholder="digite o email">
    
        <label for="pdisciplina">disciplina encinadaㅤㅤㅤㅤ</label>
        <input type="text" name="pdisciplina" id="pdisciplina"required placeholder="digite a disciplina">
    </div>
<div id="a3">
    <input type="submit" id="Nbotao" name="cadastrar" value="cadastrar">
   </div>
</div>
 
    </form>
</div>
</div>
</body>
</html>