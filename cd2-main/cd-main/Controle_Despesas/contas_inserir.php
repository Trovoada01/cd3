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
    <form name="cadastros" method="post" action=""></form>
    <table>
        <tr>
        <td><label for="nome">Nome:</label></td>
        <td><input type="text" name="nome" size="40" maxlength="40" placeholder="Informe seu nome completo" required>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" name ="email" size="40" maxlength="40" placeholer="Informe seu Email"></td>
        </tr>
        <tr>
            <td><label for="senha">Senha:</label></td>
            <td><input type="password" name="senha" size ="40" maxlength="60" placeholer="Digite sua senha"></td>
        </tr>
        <tr>
            <td><label for="datadenacimento">Data de nacimento:</label></td>
            <td><input type="date" name="data" require></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="cadastrar" value="Cadastrar">
          
        </tr>
    </table>
</div>
</body>
</html>