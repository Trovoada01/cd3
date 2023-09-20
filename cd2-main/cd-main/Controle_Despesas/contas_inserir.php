<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="estilos_formulario.css">
    <title>Document</title>
</head>
<body>
<?php
    require "menu.php"; // Importa o menu do sistema de Controle de Despesas
    ?>
<div id="cadastro">
    <h3>Cadastrar contas</h3>
    <form name="cadastro" method="post" action="">
            <table>
                <tr>
                    <td><label for="lancamento">Lançamento:</label></td>
                    <td><input type="number" name="nome" size="40" maxlength="4"  required>
                </tr>
                <tr>
                    <td><label for="Codigo_Cliente">Código_cliente</label></td>
                    <td><input type="number" name="Codigo_Cliente" size="40" maxlength="4" required>
                </tr>
                <tr>
                    <td><label for="data">Data</label></td>
                    <td><input type="date" name="data"  required>
                </tr>
                <tr>
                    <td><label for="valor">Valor</label></td>
                    <td><input type="number" name="valor" size="14" maxlength="255" required>
                </tr>
                <tr>
                    <td><label for="historico">Historico</label></td>
                    <td><input type="text" name="historico" size="30" maxlength="200" required>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="cadastrar" value="Cadastrar">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST["cadastrar"])) {
            $lancamento     = $_POST["lancamento"];
            $Codigo_Cliente = $_POST["Codigo_Cliente"];
            $data           = $_POST["data"];
            $valor          = $_POST["valor"];
            $historico      = $_POST["historico"];
            require "conexao.php";
            $sql = "INSERT INTO contas(lancamento, Codigo_cliente, data, valor, historico)";
            $sql .= " VALUES ( '$lancamento', 'null', '$data', '$valor', '$historico' )";
            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<script type =\"text/javascript\">alert('Conta cadastrado com sucesso!');</script>";
            echo "<p align='center'><a href='home.php'>Voltar</a></p>";
        }
        ?>
</div>
</body>
</html>