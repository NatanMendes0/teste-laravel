<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de Formulário 1</title>
</head>
<body>
    <div>
        <h3>Login</h3>
        <form method="POST" action="produto"> <!-- action="produto" é o caminho do controller -->
            @csrf <!-- Token de segurança -->
            Usuário:
            <input type="text" name="usuario"></br></br>
            Senha:
            <input type="password" name="senha"></br></br>
            <input class="botao" type="reset" value="Limpar">
            <input class="botao" type="submit" name="submit" value="Logar">
        </form>
    </div> 
</body>
</html>