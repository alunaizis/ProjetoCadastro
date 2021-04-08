<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<style>
    body{ 
         font-family: font-family: 'Merriweather', serif;
}
</style>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Proprietário</th>
      <th scope="col">CEP </th>
      <th scope="col">Logradouro</th>
      <th scope="col">Numero</th>
      <th scope="col">Complemento</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Ações</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($endereco as $endereco) 
    <tr>
      <th scope="row">{{$endereco->id}}</th>
      <td>{{$endereco->usuario->nome}}</td>
      <td>{{$endereco->cep}}</td>
      <td>{{$endereco->logradouro}}</td>
      <td>{{$endereco->numero}}</td>
      <td>{{$endereco->complemento}}</td>
      <td>{{$endereco->bairro}}</td>
      <td>{{$endereco->cidade}}</td>
      <td>{{$endereco->estado}}</td>
      <td><a href="{{ route ('editarEndereco', $endereco->id) }}">Editar</a>  
         <a href="{{ route ('excluirEndereco', $endereco->id) }}">Excluir</a>
      </td> 
    </tr>
    @endforeach 

  </tbody>
</table>
</body>
</html>