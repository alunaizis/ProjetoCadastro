<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
<div class="container">
    <div class="row mt-2">
    Home
    </div> 
       <div class="row mt-5">
       <h1>Cadastro</h1>
<div class="form-group row">
  <label for="nomecompleto" class="col-2 col-form-label">Nome Completo</label>
  <div class="col-10">
    <input class="form-control" type="text"  id="nomecompleto">
  </div>
</div>
<div class="form-group row">
  <label for="senha" class="col-2 col-form-label">Senha</label>
  <div class="col-10">
    <input class="form-control" type="password"  id="senha">
  </div>
</div>
<div class="form-group row">
  <label for="matricula" class="col-2 col-form-label">Matricula</label>
  <div class="col-10">
    <input class="form-control" type="number"  id="matricula">
  </div>
</div>
<div class="form-group row">
  <label for="datadenascimento" class="col-2 col-form-label">Data de Nascimento</label>
  <div class="col-10">
    <input class="form-control" type="date" id="datadenascimento">
  </div>
  <div class="row">
  <a  href="{{ route('resultadoCadastro') }}" class="btn btn-primary">Salvar</a>
            </div>
    <center>Todos os direitos reservados a Izis Carolaine Berson Parreão<center>
    </div> 
</div>
</body>
</html>