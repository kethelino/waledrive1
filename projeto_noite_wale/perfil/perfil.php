<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página de Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #646464;
            margin: 20px;
        }

        #profile-form {
            max-width: 400px;
            margin: 0 auto;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 10px;
            background-color: #9c9c9c;
        }
        #preview {
            max-width: 100%;
            max-height: 50px;
            margin-top: 10px;
            border-radius: 10px;

        }
        #button{
    background-color:black;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color:#ac9d4b;
    font-size: 15px;
        }
    </style>
</head>
<body>

    <h1>Minha Página de Perfil</h1>

    <div id="preview"></div>

    <form id="profile-form" action="/update-profile" method="post" enctype="multipart/form-data">
        <label for="perfil">Alterar Foto de Perfil:</label>
        <input type="file" id="perfil" name="perfil" accept="image/*" onchange="previewImage(this)">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="contato">Contato:</label>
        <input type="text" id="contato" name="contato" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Nova Senha:</label>
        <input type="password" id="senha" name="senha">

        <input type="submit" value="Salvar Alterações">
    </form>

    <script>
        function previewImage(input) {
            var preview = document.getElementById('preview');
            preview.innerHTML = '';

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    preview.appendChild(img);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>
