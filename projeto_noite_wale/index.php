<?php

//importação de arquivos


include "./const.php" ;
include "./src/model/user.php";

if (isset($_POST["user"]) && isset($_POST["pass"]) ) {

    //criar novo objeto da classe user

    $user = new User($_POST["user"], $_POST["pass"]);

    //fazendo uso do método login
    if ($user->login() ) {
        print( "<script> alert('USUÁRIO AUTENTICADO 👍') </script>" );
    } else {
        print( "<script> alert('ACESSO NEGADO 👎') </script>" );
    }



}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description" content="<?= DESC ?>">
    <meta name="keywords" content="<?= KW ?>">
    <meta name="author" content="<?= "Grupo de Estudo" ?>">
    <link rel="shortcut icon" href="./assets/img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">


    <title><?= "Tela de login" ?></title>
    <style>
        body{
            background-color: #646464;
            font-family: Arial, Helvetica, sans-serif;
        }
        div{
            background-color: #ac9d4b;
            position: absolute;
            width: 450px;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;

}
input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
    background-color:black;
    color: #ac9d4b;

}
button{
    background-color:black;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color:#ac9d4b;
    font-size: 15px;
}
button:hover{
    background-color: #FFFFFF;
    cursor: pointer;

    
}
        
    </style>
</head>
<body>
    <div id= "login">
        <img src="./assets/img/Wale_logo-2.png" alt="Imagem" width="150">
        <h1>Login</h1>
        <form action="#" method="post">

            <input type="text" name="user" id="user" placeholder="Nome">
            <br><br>
            <input type="password" name="pass" id="pass" placeholder="Senha">
            <br><br>
            <button>Entrar</button>
            <br><br>
            <button>Não possui login?Cadastre-se</button>


        </form>

    </div>

    <script src="./assets/js/script.js"></script>

</body>
</html>