<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Teste</title>
</head>
<body>
    <h1>Meu nome é {{$nome ?? 'Nome'}} {{$sobrenome ?? 'Default Value'}}</h1> <!-- ?? se a var não existir, é substituido por "Default Value" -->
    <h2>Eu gosto de melancia</h2>
    <h3>Hmmmmm melancia geladinha</h3>
</body>
</html>
