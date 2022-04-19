<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>PROJETO</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
    <div class="container-md">
      <h1 class="navbar-brand" href="#" style="color: #FFF;">Concessionária</h1>
    </div>
  </nav>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <h3 style="text-align: center;"> Carros - <button type="button" class="btn btn-dark"><a href="{{ route('carros.create') }}" style="color: #FFF; text-decoration:none;  text-align: center;">Cadastrar Novo Carro</a></button>
            <h3>
              <br>
              <thead>
                <tr>
                  <th scope="col">Modelo</th>
                  <th scope="col">Cor</th>
                  <th scope="col">Ano</th>
                  <th scope="col">Valor</th>
                  <th scope="col">Informações</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Excluir</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dados as $item)
                <tr>
                <tr>

                  <td>{{ $item['modelo'] }}</td>
                  <td>{{ $item['cor'] }}</td>
                  <td>{{ $item['ano'] }}</td>
                  <td>{{ $item['valor'] }}</td>
                  <td>
                    <button type="button" class="btn btn-primary"><a href="{{ route('carros.show', $item['id']) }}" style="color: #FFF; text-decoration:none; ">Informações</a></i></button>
                  </td>
                  <td> <button type="button" class="btn btn-success"><a href="{{ route('carros.edit', $item['id']) }}" style="color: #FFF; text-decoration:none; ">Editar</a></button></td>
                  </td>

                  <td>
                    <form action="{{ route('carros.destroy', $item['id']) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" value="Excluir">Excluir</button>
                  </td>
                  </form>
                </tr>


                @endforeach
        </table>
</body>

</html>