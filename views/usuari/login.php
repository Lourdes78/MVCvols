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
      <form method="POST" action="../../index.php?controller=usuari&action=login" class="register-form" id="login-form">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">LOGIN</h2>
              <p class="text-white-50 mb-5">ENTRA USUARI I CONTRASENYA!</p>

              <div class="form-outline form-white MB-4">
              <label class="form-label" for="user">Correu</label>
                <input type="text" id="usuari" class="form-control form-control-lg" />
               
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="contrasenya" class="form-control form-control-lg" />
               
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" value="submit">Login</button>

            </div>

            <div>
              <p class="mb-0">ENCARA NO ESTÀS REGISTRAT?  REGISTRA'T <a href="/views/usuari/insertarusuaris.php" class="text-white-50 fw-bold">AQUÍ</a></p>
            </div>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>