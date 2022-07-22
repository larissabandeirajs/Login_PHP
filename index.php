
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Projeto Login</title>
    <link rel = "stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div id="corpo-form">
    <h1>Entrar</h1>
    <form method="POST">
    <input type="email" placeholder="email" name="email" >
    <input type="password" placeholder="Senha"name="senha" >
    <input type="submit" value="ACESSAR">
    
    </form>
</div>
<?php
session_start();
if (isset($_POST['email']))
{
    $login="larissaband13@gmail.com";
    $senha="123";
    $loginform = $_POST['email'];
    $senhaForm = $_POST['senha'];
    if($login == $loginform && $senha == $senhaForm){
        $_SESSION['login'] = true;
         header('location:privado.php');
    
   } else
   {
         ?>
             <div class="msg-erro">
         Email ou senha estao incorretos! 
         </div>
                 <?php
     }}else
    {
     ?>
     <div class="msg-erro">
     preencha todos os campos!
     </div>
                 <?php }

?>
//}
</body>
</html>