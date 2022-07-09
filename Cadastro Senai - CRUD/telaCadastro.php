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
                <form  action="cadastro.php" method="POST">   

                        <label class="titulo1">Cadastro</label>
                                    <br>
                                    <br>
                        <fieldset id="filtro"><legend style="font-size: 20px;">Dados do Aluno:</legend>

                        <br>
                        <br>                      

                        <input type="text" name="nome" id="nome" placeholder="Nome" size="50px" required><br>                        
                        <input type="text" name="cpf" id="cpf" placeholder="CPF" size="50px" required><br>                        
                        <input type="email" name="email" id="email" placeholder="E-mail " size="50px" required><br>
                        <input type="text" name="logradouro" id="logradouro" placeholder="Logradouro" size="40px" required>                      
                        <input type="number" name="numero" id="numero" placeholder="Nº" size="" required><br>                        
                        <input type="text" name="complemento" id="complemento" placeholder="Complemento" size="50px" required><br>                        
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" size="50px" required><br>                        
                        <input type="text" name="estado" id="estado" placeholder="Estado" size="50px" required> <br>   
                        
                        <input class="botao" type="submit" value="Cadastrar">                    

                        

                        </fieldset>  
                </form>    
                
                        <form action="index.php" >
                            <input class="botao" type="submit" value="Voltar">
                        </form>
                        
            </div>
                           

    </div>

    <footer> &copy Mateus Felipe Campos da Cruz </footer>
    
</body>
</html>