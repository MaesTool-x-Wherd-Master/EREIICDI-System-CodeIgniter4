<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>

  <!-- CDN via jsDelivr Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-sm">
      <a class="navbar-brand" href="#">EREIICDI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <main>
    <section>
      <div class="container-sm">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <!-- col-md-9 col-lg-8 col-xl-5 -->
          <div class="col-lg-7 col-md-12">
            <img src="<?= base_url('assets/images/banner_sign-in.svg') ?>" class="img-fluid" alt="Sample image">
          </div>

          <!-- col-md-8 col-lg-4 col-xl-4 offset-xl-1 -->
          <div class="col-lg-5 col-md-12">
            <form class="d-flex flex-md-column flex-sm-column flex-column align-items-md-center">
              <div class="mb-4 text-center text-lg-start">
                <h2>Inicia Sesión</h2>
              </div>

              <!-- Email input -->

              <div class="col-lg-12 col-md-8 form-floating mb-3">
                <input type="email" class="form-control" id="emailSignIn" placeholder="nombre@ejemplo.com">
                <label for="emailSignIn">Correo electrónico</label>
              </div>

              <!-- Username Input -->
              <div class="col-lg-12 col-md-8 form-floating mb-3">
                <input type="text" class="form-control" id="usernameSignIn" placeholder="Usuario123">
                <label for="usernameSignIn">Nombre de usuario</label>
              </div>

              <!-- Password input -->
              <div class="col-lg-12 col-md-8 form-floating mb-3">
                <input type="password" class="form-control" id="passSignIn" placeholder="Contraseña">
                <label for="passSignIn">Contraseña</label>
              </div>

              <div class="col-md-7 col-12 d-flex justify-content-md-between justify-content-sm-between justify-content-evenly g-2 flex-wrap ">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="#!" class="link-danger">Registrarse</a></p>
              </div>

            </form>
          </div>
        </div>
      </div>

    </section>
  </main>

  <!-- CDN via jsDelivr Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>