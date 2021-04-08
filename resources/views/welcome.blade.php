<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<style>
    body{ 
         font-family: font-family: 'Merriweather', serif;
}
</style>
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
    <center> Menu <center>
    </div>

    <div class="row mt-3">
            <div class="row">

            <a  href="{{ route('listaCadastro') }}" class="btn btn-primary">Lista de Usuários</a>
            </div>

            <div class="row mt-2">

            <a  href="{{ route('carregarCadastro') }}" class="btn btn-primary">Novo cadastro</a>
            </div>

            <div class="row mt-2">
            <a  href="{{ route('listaEndereco') }}" class="btn btn-primary">Lista de Endereço</a>
            </div>

            <div class="row mt-2">
            <a  href="{{ route('novoEndereco') }}" class="btn btn-primary">Novo endereço</a>
            </div>

            <div class="row mt-2">
            <a  href="{{ route('createUsuario') }}" class="btn btn-primary">Cadastro Completo</a>
            </div>


    
    </div>

    <div class="row">
    <center> Todos os direitos reservados - Izis Carolaine - 2021 <center>
    </div>
    </div>
    </div>
</body>
</html>
