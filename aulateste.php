<html>
    <head>
        <title>Tarumã SP</title>
        <meta charset="UTF-8">
    </head>
    <body bgcolor="#9370DB">
        <form action="" method="POST">
            <center>    
                <label style="color:white;" >Cidade: </label><br>
                <input type="text" name="cidade" required><br>

                <label style="color:white;">Estado: </label><br>
                <input type="text" name="estado" required><br>
                <button type="submit">Enviar</button>
            </center>
        </form>
        <center>
        <?php
        class pessoa_obj{};


        $pessoa = new pessoa_obj();
        $pessoa->name = "Nick";
        $pessoa->sobrenome = "Doe";
        $pessoa->idade = 0.5;
        $pessoa->date = '01/01/2022';
        $pessoa->peso = '0.8';
        $pessoa->cidade = "Florínea";
        $pessoa->estado = "SP";

        $pessoa2 = new pessoa_obj();
        $pessoa2->name = "Edson";
        $pessoa2->sobrenome = "Marangoni";
        $pessoa2->idade = 22;
        $pessoa2->date = '09/06/2000';
        $pessoa2->peso = '75';
        $pessoa->cidade = "Tarumã";
        $pessoa->estado = "SP";
        
        $pessoa3 = new pessoa_obj();
        $pessoa3->name = "Kauan";
        $pessoa3->sobrenome = "Borsoi";
        $pessoa3->idade = 19;
        $pessoa3->date = '04/06/2003';
        $pessoa3->peso = '74';
        $pessoa->cidade = "Tarumã";
        $pessoa->estado = "SP";

        print_r($pessoa);
        echo "<Br><br>";
        print_r($pessoa2);
        echo "<br>";
        print_r($pessoa3);
        echo "<Br>";

        $arrayPessoas = array();
        echo "<br>O meu array de pessoas: <br>";
        print_r($arrayPessoas);
        array_push($arrayPessoas, $pessoa);
        array_push($arrayPessoas, $pessoa2);
        array_push($arrayPessoas, $pessoa3);
        
        echo "<br><br><pre>";
        print_r($arrayPessoas);
        echo "</pre><br><br>";

        echo"<table border='1'>";
        for ($posicao=0; $posicao < count($arrayPessoas); $posicao++) { 
            if($arrayPessoas[$posicao]->idade > 0.4) {
                echo"<tr>";
                echo "<td>". $arrayPessoas[$posicao]->name."</td>";
                echo "<td>". $arrayPessoas[$posicao]->sobrenome."</td>";
                echo "<td>". $arrayPessoas[$posicao]->idade."</td>";
                echo "<td>". $arrayPessoas[$posicao]->date."</td>";
                echo "<td>". $arrayPessoas[$posicao]->peso."</td>";
                echo"</tr>";
            }
            
            
        }
        echo"</table>";
        
        //echo"<br>";
        //for ($posicao=count($arrayPessoas)-1; $posicao > -1; $posicao--) { 
        //    echo "Oie". $arrayPessoas[$posicao]->name;
        //}

        if(isset($_POST['cidade']) && isset($_POST['estado'])){
            if($_POST['cidade'] == ""){
                echo "Sr Usuário, o campo cidade não foi preenchido.";
            }else if($_POST['estado'] == ""){
                echo "Sr Usuário, o campo estado não foi preenchido.";
            }else{
                echo "Dados Cadastrados com Sucesso";
            }
        }
        ?>
        
        <table border="1"><br><br>              <!-- inicando a tabela -->
            <tr>                        <!-- iniciando a linha -->
                <td>Cidade:</td>        <!-- iniciando e fechando uma coluna -->
                <td>Estado:</td>        <!-- iniciando e fechando uma coluna -->
            </tr>                       <!-- fechando a linha -->
            <tr>                        <!-- iniciando a linha -->
                <td>Tarumã</td>         <!-- iniciando e fechando uma coluna -->
                <td>SP</td>             <!-- iniciando e fechando uma coluna -->
            </tr>                       <!-- fechando a linha -->

        </table>                        <!-- fechando a tabela -->
        </center>
        
    </body>
</html>