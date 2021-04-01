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
       <h1>Novo Endereço</h1>
       <form method="POST" action="{{ route('resultadoEndereco') }}">
       @csrf
  <label for="cep" class="col-2 col-form-label">CEP</label>
  <div class="col-10">
    <input class="form-control" type="text"  id="cep" name="cep">
  </div>
</div>

<div class="form-group row">
  <label for="logradouro" class="col-2 col-form-label">logradouro</label>
  <div class="col-10">
    <input class="form-control" type="text"  id="logradouro" name="logradouro">
  </div>
</div>

<div class="form-group row">
  <label for="numero" class="col-2 col-form-label">numero</label>
  <div class="col-10">
    <input class="form-control" type="text"  id="numero"name="numero">
  </div>
</div>

<div class="form-group row">
  <label for="complemento" class="col-2 col-form-label">complemento</label>
  <div class="col-10">
    <input class="form-control" type="text" id="complemento" name="complemento">
  </div>

  <div class="form-group row">
  <label for="bairro" class="col-2 col-form-label">bairro</label>
  <div class="col-10">
    <input class="form-control" type="text"  id="bairro"name="bairro">
  </div>
</div>

<div class="form-group row">
  <label for="cidade" class="col-2 col-form-label">cidade</label>
  <div class="col-10">
    <input class="form-control" type="text"  id="cidade"name="cidade">
  </div>
</div>

<div class="form-group row">
  <label for="estado" class="col-2 col-form-label">estado</label>
  <div class="col-10">
    <input class="form-control" type="text"  id="estado"name="estado">
  </div>
</div>

  <div class="row">
  <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
            </form>
    <center>Todos os direitos reservados a Izis Carolaine Berson Parreão<center>
    </div> 
  
</div>
</body>
</html>