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
      <th scope="col">Nome Completo </th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Senha</th>
      <th scope="col">Matricula</th>
      <th scope="col">Ações</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($usuario as $usuario) 
    <tr>
      <th scope="row">{{$usuario->id}}</th>
      <td>{{$usuario->nome}}</td>
      <td>{{$usuario->data_nasc}}</td>
      <td>{{$usuario->senha}}</td>
      <td>{{$usuario->matricula}}</td>
      <td>
      <a href="{{ route ('editarUsuario', $usuario->id) }}">Editar</a>  
      <a href="{{ route ('excluirUsuario', $usuario->id) }}">Excluir</a>
      </td> 
    </tr>
    @endforeach 

  </tbody>
</table>
</body>
</html>