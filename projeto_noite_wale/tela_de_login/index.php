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