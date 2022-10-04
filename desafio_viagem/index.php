<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora da Viagem</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Calculadora da Viagem</h1>
    <hr>

    <div>
        <p>Informe os dados da viagem abaixo</p>
    </div>

    <div class="formulario">
        <form method="post" action="viagem.php">

            <div class="div-campo-form">
                <label>Consumo médio do veículo: </label>
                <input type="number" name="consumo" step="0.01" min="0" required>
                <label>Km/L</label>
            </div>

            <div class="div-campo-form">
                <label>Distância total: </label>
                <input type="number" name="distancia" min="0" required>
                <label>Km</label>
            </div>

            <div class="div-campo-form">
                <label>Valor médio do combustível: R$ </label>
                <input type="number" name="combustivel" step="0.01" min="0" required>
            </div>

            <div class="div-campo-form">
                <label>Total gasto com pedágios: R$ </label>
                <input type="number" name="pedagio" step="0.01" min="0" required>
            </div>
            
            <div class="div-calc">
                <input class="btn-calc" type="submit" value="Calcular Gastos">
            </div>

        </form>
    </div>

</body>
</html>