<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação de Apredizagem - Desenvolvimento de Sistemas WEB</title>
   
   
   
   <link rel="stylesheet" href="style.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

<?php
    
    if(isset($_POST['busca'])){

        $pesquisa = $_POST['busca'];
    }else{
        $pesquisa = '';
    }

    include "conexao.php";

    $sql = "SELECT * FROM aluno a INNER JOIN endereco e ON a.id_aluno = e.id_aluno WHERE a.Nome LIKE '%".$pesquisa."%' limit 1";



    $dados = mysqli_query($con, $sql);
    

    ?>

   

    <div id="container">
            
            <div id="formulario">
                    <label class="titulo1">Pesquisa</label>
                        <br>
                        <br>
                        <form action="pesquisa.php" method="POST">
                            <input name="busca" type="search" placeholder="Nome">
                            <input type="submit" value="Pesquisar" >
                        </form>
                
                        <form action="index.php" >
                            <input class="botao" type="submit" value="Voltar">
                        </form>
                      
                            <table id="tabela">
                                    <tr>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>E-mail</th>
                                        <th>Logradouro</th>
                                        <th>Nº</th>
                                        <th>Complemento</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Funções</th>
                                    </tr>

                                    <?php

                                        while ($linha = mysqli_fetch_assoc($dados) ){
                                          
                                            $id_aluno = $linha['id_aluno'];
                                            $nome = $linha['nome'];
                                            $cpf = $linha['cpf'];
                                            $email = $linha['email'];
                                            $logradouro = $linha['logradouro'];
                                            $numero = $linha['numero'];
                                            $complemento = $linha['complemento'];
                                            $cidade = $linha['cidade'];
                                            $estado = $linha['estado'];
                                        
                                        
                            
                                            echo "<tr>
                                                    <td>$nome</td>
                                                    <td>$cpf</td>
                                                    <td>$email</td>
                                                    <td>$logradouro</td>
                                                    <td>$numero</td>
                                                    <td>$complemento</td>
                                                    <td>$cidade</td>
                                                    <td>$estado</td>
                                                    <td>

                                                    <a class='botao_editar' href='cadastroEdite.php?id=$id_aluno'>Editar</a>
                                                    
                                                   
                                                    <a class='botao_deletar' href='pesquisa.php?id=$id_aluno'>Deletar</a>
                                                    
                                     
                                                    
                                                    </td>

                                                </tr>";
                                            }
                                            ?>

                            </table>
                            
            </div>
    </div>

<!--Modal Janela Deletar--> 

<?php

if($_GET['id']){

    include "conexao.php";

    $sql = "DELETE FROM aluno WHERE id_aluno = ".$_GET['id'];

    echo $sql;

    mysqli_query($con,$sql);

    if(mysqli_connect_error()){
        echo "Erro!";
    }else{                
        echo "Deletado com sucesso";
    }
    

}
?>
    <footer> &copy Mateus Felipe Campos da Cruz </footer>
    
</body>
</html>