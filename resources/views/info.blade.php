<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PROJETO</title>
</head>
<h3 style="padding-left: 15px;"> Informações</h3>

<p style="padding-left: 15px;"> Id: {{ $dados['id'] }}</p>
<p style="padding-left: 15px;"> Modelo: {{ $dados['modelo'] }}</p>
<p style="padding-left: 15px;"> Cor: {{ $dados['cor'] }}</p>
<p style="padding-left: 15px;"> Ano: {{ $dados['ano'] }}</p>
<p style="padding-left: 15px;"> Valor: {{ $dados['valor'] }}</p>
<button type="button" class="btn btn-dark" style="margin-left: 15px; "><a href="{{ route('carros.index') }}" style="color: #FFF; text-decoration:none; ">Voltar</a></button>
