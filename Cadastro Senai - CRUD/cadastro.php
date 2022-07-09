<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação de Apredizagem - Desenvolvimento de Sistemas WEB</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div id="container">
        <div id="formulario">
        <?php

            include "conexao.php";

            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $logradouro = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];

            $sql = "INSERT INTO `aluno`( `Nome`, `CPF`, `Email`) 
            VALUES ('$nome','$cpf','$email')";
            
            mysqli_query($con, $sql);
            $id_endereco = mysqli_insert_id($con);

            $sql2 = "INSERT INTO`endereco`(`id_aluno`,`Logradouro`, `Numero`, `Complemento`, `Cidade`, `Estado`) 
            VALUES ('$id_endereco','$logradouro','$numero','$complemento','$cidade','$estado')";
            
            mysqli_query($con, $sql2);

            if(! mysqli_connect_error()){
                echo "Cadastrado com sucesso";
            }else{
                echo "Erro!";
            }

        
        ?>
        <form action="index.php">
        <input class="botao" type="submit" class="botao" value="Voltar" >
        </form>

        </div>
            
            </div>
    <footer> &copy Mateus Felipe Campos da Cruz </footer>
    
</body>
</html>