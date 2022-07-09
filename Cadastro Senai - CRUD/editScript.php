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
      

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $logradouro = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $complemento = $_POST['complemento'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];

            $sql = "UPDATE `aluno` set `Nome` = '$nome', `CPF` = '$cpf', `Email` = '$email' WHERE id_aluno = $id";            
            
            $resultado1 = mysqli_query($con, $sql);

            $id_endereco = mysqli_insert_id($con);

            $sql2 = "UPDATE `endereco` set `id_endereco` = '$id_endereco',`Logradouro` = '$logradouro', 
            `Numero` = '$numero', `Complemento` = '$complemento', `Cidade` = '$cidade', `Estado` = '$estado' WHERE id_aluno = $id"; 
                        
            $resultado2 = mysqli_query($con, $sql2);

            if(mysqli_connect_error()){
                echo "Erro!";
            }else{                
                echo "Alterado com sucesso";
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