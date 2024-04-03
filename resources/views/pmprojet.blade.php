<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>
<body>
<div class="container">
  <div class="row align-items-start">
    <div class="col">
          <nav class="navbar navbar-expand bg-primary">
              <div class="container-fluid">
                  <a class="navbar-brand text-light" href="#" >SISTEMA WEB</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                 <li class="nav-item">
                                  <a class="nav-link active text-light" aria-current="page" href="#">Cadastrar</a>
                                 </li>
                                    <li class="nav-item">
                                       <a class="nav-link text-light" href="#">Consultar</a>
                                    </li>
                               </ul>
                         </div>
                  </div>
            </div>
           <p> 
           <p align="left"><font size="5">Cadastrar -  Agendamento de Potenciais Clientes</p></font>
           <p align="left"><font size="4">Sistema utilizado para agedamento de serviços</font></p>
           
<div class="container mt-5">
        <form method="POST" action="/adicionarContato">
            @csrf
           <div class="form-group mb-2">
                <label for="exampleInputNome">Nome</label>
                    <input type="text" class="form-control" name="nome" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2" >Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="(XX)XXXXX-XXXX" >
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2" >Origem</label>
                <select id="inputState" class="form-select" name="origem">
                    <option selected>Celular</option>
                    <option>Telefone fixo</option> 
                </select>
           </div>
           <div class="form-group mb-2">
                <label for="formGroupExampleInput2">Data do Contato</label>
                    <input type="text" class="form-control" name="datacontato" placeholder="XXXX/XX/XX">
           </div>
           <div class="form-group mb-2">
                <label for="exampleFormControlTextarea1">Observação</label>
                     <textarea class="form-control" rows="3" name="observacao"></textarea>
           </div>
           <button type="submit" class="btn btn-primary">Cadastrar</button> 
      </form>
</div>
<div class="overflow-auto">
           <table class="table">
               <thead class="table-primary">
               <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Telefone</th>
                      <th scope="col">Origem</th>
                      <th scope="col">Data do contato</th>
                      <th scope="col">Observações</th>
                   </tr>
               </thead>
               <tbody>
                @if (count($contatos) > 0)
                   @foreach ($contatos as $cont)
                   <tr>
                       <th>{{ $cont->id }}</th>
                       <th>{{ $cont->nome }}</th>
                       <th>{{ $cont->telefone }}</th>
                       <th>{{ $cont->origem }}</th>
                       <th>{{ $cont->datacontato }}</th>
                       <th>{{ $cont->observacao }}</th>
                       <th><a href = "/editar/{{ $cont->id }}" class = "btn btn-primary">Editar</a>
                           <a href = "/excluir/{{ $cont->id }}" class = "btn btn-primary">Excluir</a>
                        </th>
                    <tr>
                   @endforeach
                      @else
                         <tr>
                           <th>Sem registros!</th>
                         </tr>
                @endif
</body>
</html>
