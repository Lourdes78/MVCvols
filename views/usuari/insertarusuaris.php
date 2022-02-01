
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<section class="vh-100 gradient-custom" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <form action="../../index.php?controller=usuari&action=guardarusuaris" method="post">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

            <div class="mb-md-5 mt-md-4 pb-5">


            <div class="form-outline form-white MB-4">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="origen" name="nom" >
    </div>
    <div class="form-outline form-white MB-4">
        <label for="contrasenya">Contrasenya</label>
        <input type="password" class="form-control" id="contrasenya" name="contrasenya">
    </div>
    <div class="form-outline form-white MB-4">
        <label for="correu">Correu</label>
        <input type="text" class="form-control" id="correu" name="correu" >
    </div>
    <div class="form-outline form-white MB-4">
        <label for="adreça">Adreça</label>
        <input type="text" class="form-control" id="adreça" name="adreça">
    </div>
    <div class="form-outline form-white MB-4">
        <label for="dni">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" >
    </div>
    <div class="form-outline form-white MB-4">
        <label for="telefon">Telèfon</label>
        <input type="text" class="form-control" id="telefon" name="telefon" >
    </div>
    <div class="form-outline form-white MB-4">
        <label for="num_tarjeta">Número de targeta</label>
        <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" ><br>
    </div>
    <button type="submit"  class="btn btn-outline-light btn-lg px-5" >Submit</button>
            </div>
          </div>
        </div>
        
</form>
</section>
</body>
</html>