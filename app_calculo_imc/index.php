<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>calcular IMC</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md">
                <h2 class="text-muted h5 my-3">IMC - calculo de peso corporal</h2>
                <form action="calculando_imc.php" method="post">
                    <div class="form-group row">
                        <label for="altura" class="col-sm-2 col-form-label">Peso</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="peso" placeholder="Informe seu peso">
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="altura" class="col-sm-2 col-form-label">altura</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="altura" placeholder="informe sua altura">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">idade</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="idoso" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        idoso
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="adulto">
                                    <label class="form-check-label" for="gridRadios2">
                                        adulto
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                  
                    <div class="col-sm-10 my-3">
                        <button type="submit" class="btn btn-primary">Calcular IMC</button>
                    </div>
                </form>
            </div>
            <div class="col-md">
                <h2 class="text-muted h5 my-3">Resultado:</h2>
                <div>
                    <p class="text-monospace"><strong>idoso: </strong> seu peso é <strong><? echo $_SESSION['peso']; ?> kg</strong> e altura
                        <strong><? echo $_SESSION['altura']; ?></strong></p>
                    <p class="text-monospace"><strong>resultado do IMC: </strong> <? echo $_SESSION['imc']; ?></p>
                    <p class="text-monospace"><strong>Situação: </strong><? echo $_SESSION['situacao']; ?></p>
                    <p class="text-monospace"><Strong>Observação: </Strong> Peso ideal IMC entre 21 e 27</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>