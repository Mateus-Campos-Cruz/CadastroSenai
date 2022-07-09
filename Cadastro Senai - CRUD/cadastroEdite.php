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

<?php

    include "conexao.php";

    if($_GET['id']){
        $id = $_GET['id'];
    }else{
        $id = '';
    }

   $sql = "SELECT * FROM aluno a INNER JOIN endereco e ON a.id_aluno = e.id_aluno WHERE a.id_aluno =  '".$id."'";
   
   $dados = mysqli_query($con,$sql);
    
  while ($linha = mysqli_fetch_assoc($dados) ){
        $id_aluno = $linha['id_aluno'];
        $nome = $linha['Nome'];
        $cpf = $linha['CPF'];
        $email = $linha['Email'];
        $logradouro = $linha['Logradouro'];
        $numero = $linha['Numero'];
        $complemento = $linha['Complemento'];
        $cidade = $linha['Cidade'];
        $estado = $linha['Estado'];
    }

?>

    <div id="container">
            <div id="formulario">
                <form  action="EditScript.php" method="POST">   

                        <label class="titulo1">Alteração de cadastro</label>
                                    <br>
                                    <br>
                        <fieldset id="filtro"><legend style="font-size: 20px;">Dados do Aluno:</legend>

                        <br>
                        <br>                      

                        <input type="text" name="nome" id="nome" placeholder="NOME" size="50px" required value="<?php echo $nome; ?>"><br>                        
                        <input type="text" name="cpf" id="cpf" placeholder="CPF" size="50px" required value="<?php echo $cpf; ?>"><br>                        
                        <input type="email" name="email" id="email" placeholder="E-MAIL " size="50px" required value="<?php echo $email; ?>"><br>
                        <input type="text" name="logradouro" id="logradouro" placeholder="LOGRADOURO" size="40px" required value="<?php echo $logradouro; ?>">                      
                        <input type="number" name="numero" id="numero" placeholder="Nº" size="" required value="<?php echo $numero; ?>"><br>                        
                        <input type="text" name="complemento" id="complemento" placeholder="COMPLEMENTO" size="50px" required value="<?php echo $complemento; ?>"><br>                        
                        <input type="text" name="cidade" id="cidade" placeholder="CIDADE" size="50px" required value="<?php echo $cidade; ?>"><br>                        
                        <input type="text" name="estado" id="estado" placeholder="ESTADO" size="50px" required value="<?php echo $estado; ?>"> <br>   
                        
                        <input type="hidden" name="id" id="" value="<?php echo $id_aluno; ?>">
                        <input class="botao" type="submit" name="alterar" value="Salvar alterações">
                        
                        

                        

                        </fieldset>  
                </form>    
                
                        <form action="pesquisa.php" >
                            <input class="botao" type="submit" value="Voltar">
                        </form>
                        
            </div>                         

    </div>

    <footer> &copy Mateus Felipe Campos da Cruz </footer>
    
</body>
</html>