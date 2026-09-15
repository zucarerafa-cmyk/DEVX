<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="principalCad">
    <h2>Seja bem-vindo a CEON</h2>

    <h3>Cadastro</h3>

    <select id="sel">
        <option value="">Selecione</option>
        <option value="aluno">Aluno</option>
        <option value="">Professor</option>
        <option value="Administrador">Administrador</option>
    </select>
     <p id="text">Usuário</p>
    <input type="text" id="inp">
    <p id="text">Email</p>
    <input type="email" id="inp">
    <p id="text">Senha</p>
    <input type="password" id="inp"><br><br>
     <p id="text">Confirmar senha</p>
    <input type="password" id="inp"><br><br>
    <button type="submit"id="btn">Cadastrar</button>
    <p>Já tem conta?</p>
    <a href="index.html" id="dire">Entrar</a>
    </div>
</body>
</html>