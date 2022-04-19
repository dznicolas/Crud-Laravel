<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PROJETO</title>
</head>
<form action="{{ route('carros.update', $dados['id']) }}" method="POST">
    @csrf
    @method('PUT')
<form>
    <div class="container">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <h1>Editar Carros</h1>
            <p>
    <div class="form-group">
        <div class="row">
          <div class="col-6">
        <label>Modelo do carro: </label>
        <input type="text" class="form-control" name="modelo" value="{{ $dados['modelo'] }}">
    </div>

            <div class="col-md-6">
        <label>Cor: </label>
        <input type="text" name="cor" class="form-control" value="{{ $dados['cor'] }}">
    </div>
    <p>

            <div class="col-6">
        <label>Ano: </label>
        <input type="text" name="ano" class="form-control" value="{{ $dados['ano'] }}">
    </div>

            <div class="col-md-6">
        <label>Valor: </label>
        <input type="text" name="valor" class="form-control" value="{{ $dados['valor'] }}">
    </div>
    <p>
     <br>   
    <input type="submit" name="Enviar" class="btn btn-primary">
</form>
</form>
