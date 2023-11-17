<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro cliente</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #848484;
            background-color: #848484;
            background-image: linear-gradient #ac9d4b;
        }
        
      
        
       .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ac9d4b;
        background-color: #848484;
        padding: 15px;
        border-radius: 15px;
        width: 20%;
        text-align: center;


       }
       fieldset{
        border: 3px solid #9c9c9c;
       }
       legend{
        border: 1px solid #848484;
        padding: 20px;
        text-align: center;
        background-color: #ac9d4b;
        border-radius: 8px;
        color:#848484;
       }
       .inputBox{
        position: relative;

       }
       .inputUser{
          background: none;
          border: none;
          border-bottom: 1px solid #ac9d4b;
          outline: none;
          color: #efb810;
          font-size: 15px;
          width: 100%;
          letter-spacing: 1px;
       }
       .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
       }
       .inputUser:focus ~ .labelInput,
       .inputUser:valid ~ .labelInput{
        top: -20px;
        font-size: 12px;
        color: #ac9d4b;
       }
       #data_nascimento{
        border: none;
        padding: 10px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
       }
       #data-validade{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
       }
       #submit{
        background-image: #ac9d4b;
        width: 100%;
        border: none;
        padding: 10px;
        color: #ac9d4b;
        border-radius: 10px;
       }
       #button{
        background-image: #ac9d4b;
        width: 100%;
        border: none;
        padding: 10px;
        color: #ac9d4b;
        border-radius: 15px;
       }
       

    </style>



</head>
<body>  
    <div class="box">
       <form action="">

    <fieldset>
    <legend><b>Cadastro Cliente</b></legend>
    <br>
      <img src="img/Wale_logo-2.png" style="margin-top: -0.80px" />  

        <div class="inputBox">
        <label for="nome" class="labelInput">Nome Completo</label>
        <input type="text" name="nome" id="nome" class="inputUser" required>
    </div>
         
    <div class="inputBox">
        <label for="cpf"class="labelInput">Cpf</label>
        <input type="text" name="cpf" id="cpf" class="inputUser" required>
    </div>

    <div class="inputBox">
        <label for="endereco"class="labelInput">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="inputUser" required>
        

    </div> 

    <div class="inputBox">
    <label for="numero"class="labelInput">Numero</label>
    <input type="text" name="numero" id="numero" class="inputUser" required>
        
    </div>

    <div class="inputBox">
        <label for="cep"class="labelInput">Cep</label>
        <input type="text" name="cep" id="cep" class="inputUser" required>
        

    </div>

    <div class="inputBox">
        <label for="cidade"class="labelInput">Cidade</label>
        <input type="text" name="cidade" id="cidade" class="inputUser" required>
        
    </div>

    <div class="inputBox">
        <label for="estado"class="labelInput">Estado</label>
        <input type="text" name="estado" id="estado" class="inputUser" required>
        
    </div>

    <div class="inputBox">
        <label for="complemento"class="labelInput">Complemento</label>
        <input type="text" name="complemento" id="complemento" class="inputUser" required>
        
    </div>

    <div class="inputBox">
        <label for="telefone"class="labelInput">Telefone</label>
        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
        
    </div>

    <p>Sexo:</p>
    <input type="radio" id= "feminino" name= "genero" value="feminino" required>
    <label for="feminino">Feminino</label>

    <input type="radio" id= "masculino" name= "genero" value="masculino" required>
    <label for="masculino">Maculino</label>

    <input type="radio" id= "outros" name= "genero" value="outros" required>
    <label for="outros">Outros</label>
    <br><br>
         <div class="inputBox">
        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
        <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
         </div>
    <br><br>
    <div class="inputBox">
        <label for="cnh_numero"class="labelInput"><b>Cnh Numero</b></label>
        <input type="text" name="cnh-numero" id="cnh-numero" class="inputUser" required>
    </div>
    <br><br>
    <div class="inputBox">
        <label for="data_validade_cnh"><b>Data de validade cnh:</b></label>
        <input type="date" name="data_validade_cnh" id="data_validade-cnh" class="inputUser" required>
    </div>
    <br><br>
    <div class="inputBox">
        <label for="email"class="labelInput">Email</label>
        <input type="text" name="email" id="email" class="inputUser" required>
        
    </div>

    <div class="inputBox">
        <label for="confirme email"class="labelInput">Confirme email</label>
        <input type="text" name="confirme email" id="confirme email" class="inputUser" required>
        
    </div>

    <div class="inputBox">
        <label for="criar senha"class="labelInput">Criar  senha</label>
        <input type="text" name="criar senha" id="criar senha" class="inputUser" required>
        
    </div>

    <div class="inputBox">
        <label for="confirme senha"class="labelInput">Confirme senha</label>
        <input type="text" name="confirme senha" id="confirme senha" class="inputUser" required>
        
    </div>
    <br><br>
    
    <input type="submit" name="submit" id="submit">
    <button>Cadastrar</button>

  </fieldset>

       </form>
</body>
</html>