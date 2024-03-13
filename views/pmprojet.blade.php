<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>CRUD</title>
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
           <p>
           <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" >
           </div>
           <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="(XX)XXXXX-XXXX">
           </div>
           <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Origem</label>
                <select id="inputState" class="form-select">
                    <option selected>Celular</option>
                    <option selected>Telefone fixo</option>
                </select>
           </div>
           <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Data do Contato</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="XX/XX/XXXX">
           </div>
           <div class="mb-3">
                <label for="exampleFormControlTextarea1">Observação</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
           </div>

      </div>
      <button type="button" class="btn btn-primary">Cadatrar</button>
</div>
</nav>
</body>
</html>