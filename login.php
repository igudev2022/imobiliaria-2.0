<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="imagens/icone.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
<div class="header">
        <div class="row">
     <div class="col-3 col-s-3 logo"><a href="index.php"><img src="imagens/logo.jpeg"class="logo"></a></div>
        
</div> 
    <form action="php/logar.php" method="post">
        <h1>LOGIN</h1>
    <label for="">E-mail:</label>
    <input type="email" name="email" placeholder="digite o seu e-mail:"> 
<br>
    <label for="">Senha:</label>
    <input type="password" name="senha" placeholder="digite sua senha:">
 <br>   
    <input class="button" type="submit" value="enviar">

    </form>
    <br>
<footer>
     AAA
</footer>

</body>
</html>