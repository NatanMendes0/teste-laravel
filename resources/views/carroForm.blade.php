<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    @php 
        $i = 0; 
    @endphp
    @while ($i < count($carro))
        <p>{{ $carro[$i] }}</p>
        @php 
            $i++ 
        @endphp
    @endwhile
</body>
</html>