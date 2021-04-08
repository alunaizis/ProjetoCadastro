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
   <div class="row">
   <h1>Cadastro efetuado com sucesso</h1>
   </div>
   <div class="row">
   <div class="col-md-2">Nome Completo</div>
   <div class="col-md-10">{{ $usuario->nome}}</div> 
   </div>
   <div class="row">
   <div class="col-md-2">Senha</div>
   <div class="col-md-10">{{ $usuario->senha}}</div> 
   </div>
   <div class="row">
   <div class="col-md-2">Matricula</div>
   <div class="col-md-10">{{ $usuario->matricula}}</div> 
   </div>
   <div class="row">
   <div class="col-md-2">Data de Nascimento</div>
   <div class="col-md-10">{{ $usuario->data_nasc}}</div> 
   </div>

   <div class="row">
   <div class="col-md-2">CEP</div>
   <div class="col-md-10">{{ $endereco->cep}}</div> 
   </div>

   <div class="row">
   <div class="col-md-2">logradouro</div>
   <div class="col-md-10">{{ $endereco->logradouro}}</div> 
   </div>

   <div class="row">
   <div class="col-md-2">numero</div>
   <div class="col-md-10">{{ $endereco->numero}}</div> 
   </div>

   <div class="row">
   <div class="col-md-2">complemento</div>
   <div class="col-md-10">{{ $endereco->complemento}}</div> 
   </div>

   <div class="row">
   <div class="col-md-2">bairro</div>
   <div class="col-md-10">{{ $endereco->bairro}}</div> 
   </div>

   <div class="row">
   <div class="col-md-2">cidade</div>
   <div class="col-md-10">{{ $endereco->cidade}}</div> 
   </div>

   <div class="row">
   <div class="col-md-2">estado</div>
   <div class="col-md-10">{{ $endereco->estado}}</div> 
   </div>
</body>
</html>