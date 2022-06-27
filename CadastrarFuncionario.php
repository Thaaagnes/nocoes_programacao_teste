<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema novo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="bootstrap.php" class="navbar-brand" style="color:white;">Página Principal</a>
            <a href="funcionarios.php" class="navbar-brand" style="color:white;">Funcionários</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <form class="form-control" action="" method="POST"> 
        <center>    
                <label>Nome: </label><br>
                <input class="form-control" type="text" name="nome" required><br>

                <label>Cargo: </label><br>
                <input class="form-control" type="text" name="cargo" required><br>

                <label>Salário: </label><br>
                <input class="form-control" type="number" name="salario" required><br>

                <label>Descrição: </label><br>
                <input class="form-control" type="text" name="descricao" required><br><br>

                <button class="form-control btn btn-success" type="submit">Salvar/Gravar</button>
        </center>
    </form>
    <?php
        $nomeServidor = "localhost";
        $database = "database";
        $usuario = "root";
        $senha = "";

        //criar a conexão
        $conexao = mysqli_connect($nomeServidor, $usuario, $senha, $database);

        //checagem de conexão
        if(!$conexao){
            die("Conexão falhou: ".mysqli_connect_error());
        }else{
            echo "Conexão com Sucesso!";
        }

        

    ?>

</body>
</html>
