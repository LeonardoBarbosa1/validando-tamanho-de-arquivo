<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbosa - Validar tamanho do arquivo com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    // Receber os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // Acessa o IF quando o usuário clicar no botão Enviar
    if(!empty($dados['EnviarArquivo'])){
        //var_dump($dados);

        // Receber o arquivo do formulário
        $size = pathinfo($_FILES['arquivo']['size'], PATHINFO_FILENAME);
        //var_dump($arquivo['size']);
        

        

        // Validar o tamanho do arquivo no máximo 2mb
        if($size > (1024 * 1024 * 2)){
            echo "<p style='   
                    color: #f00;
                    display: flex;
                    justify-content: center;
                '>
                Erro: Tamanho máximo permitido do arquivo é 2mb!
                </p>";
           
        }else{ //Se o arquivo for menor que 2mb
            echo "<p style='
                background-color: #fff;
                color: rgb(5, 253, 17);
                display: flex;
                justify-content: center;  

            '>Arquivo Enviado com sucesso!
            </p>";
        }
    }
    ?>
    

    <h1 class="titulo">Validar tamanho do arquivo com PHP</h1>

    <!-- Criar o formulário upload -->
    <form class="form" method="POST" action="" enctype="multipart/form-data">
        <div class="arquivo">
            <label>Arquivo: </label>

            <!-- Campo para enviar arquivo -->
            <input type="file" name="arquivo" id="arquivo"><br><br>
        </div>
        <div class="botao">
            <input type="submit" name="EnviarArquivo" value="Enviar">
        </div>
    </form>
    
</body>
</html>