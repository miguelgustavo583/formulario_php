<html>

<head>
  <title> formulário </title>
  <link rel="stylesheet" href="style.css" >

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>   

<body>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-2">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SISTEMA WEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Consultar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="col">
      <h2>Cadastrar - Agendamento de Potenciais Clientes</h2>
             
    <div class="col">
      Sistema utilizado para agendamento de serviços.
<br>
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nome: </label>
  
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefone: </label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="(xx)xxxxx-xxxx">
</div>

Origem: <br>
<br>
<select class="form-select" aria-label="Default select example">
  <option selected>Celular</option>
  <option value="1">Telefone</option>
</select>
<br>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Data do contato: </label>
  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/aaaa">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
<br>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  
</form>
</div>
</div> 
 
</body>


</html>
   
   
