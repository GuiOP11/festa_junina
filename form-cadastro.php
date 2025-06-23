<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Comida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">


</head>

<body class="container w-50 my-5 m-auto">
   
    <form class="row g-3" action="cadastro-comida.php">
        <div class="form-container">

         <h2 class="text-center my-3">Cadastro de Comida Junina IFC</h2>

            <div class="mb-3">
                <label for="modelo" class="form-label">Nome da Comida:</label>
                <input type="text" class="form-control" name="nome" required>
            </div>

           

            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade vendida</label>
                <input type="number" class="form-control" name="quantidade">
            </div>

             <div class="mb-3">
                <label for="valor" class="form-label">Valor da Comida</label>
                <input type="number" class="form-control" name="valor">
            </div>

             <div class="mb-3">
                <label for="idcurso" class="form-label">Curso Responsável</label>
    
                <select class="form-select" name="idcurso" aria-label="Default select example">
                    <?php
                    
                    //
                    ?>
                    
                    <option name="" ></option>
                   <?php
                   
                   
                   ?>
                    
                </select>
            </div>


            <button type="submit" class="btn btn-primary w-100 mt-3">Cadastrar</button>
        </div>
    </form>

</body>

</html>