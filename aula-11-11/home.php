<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles01.css">
</head>
<body>
    
<style>
    body{
background-image:url("./img/home2.jpg");

        
    }
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style><div class="img">
<div class="box">
    <div class="nav">
        <nav>
            <ul>
                <li>
                    <div class="active"><a href="home.php">HOME</a></div>
                </li>
                <li>
                    <a href="index.php">CADASTRO ALUNO</a>
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
    </div>
    <h1>SISTEMA ESCOLAR</h1>
    
</div>

</div>
</body>
</html>