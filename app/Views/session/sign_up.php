<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>

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
    <section class="container-sm">

      <div class="d-flex flex-lg-row flex-column justify-content-center align-items-center h-100">

        <div class="col-lg-6 col-sm-12">
          <img src="<?= base_url('assets/images/ingles.jpeg') ?>" class="img-fluid" alt="Sample image">
        </div>

        <div class="col-lg-5  offset-1 col-sm-12">
          <form>
            <!-- Heading Form -->
            <div class="mb-4 text-lg-start text-center">
              <h2>Crea una cuenta</h2>
            </div>

            <div class="row mb-3">

              <!-- Name Input  -->
              <div class="col-lg-6 ">
                <div class="form-floating ">
                  <input type="text" class="form-control" id="nameSignUp" placeholder="Name">
                  <label for="nameSignUp">Nombres</label>
                </div>
              </div>

              <!-- Surname Input  -->
              <div class="col-lg-6 ">
                <div class="form-floating ">
                  <input type="text" class="form-control" id="surnameSignUp" placeholder="Surname">
                  <label for="surnameSignUp">Apellidos</label>
                </div>
              </div>
            </div>

            <div class="row mb-3">

              <!-- Gender Select -->
              <div class="col-lg-6">
                <div class="form-floating">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Selecciona tu género</option>
                    <option value="femenino">Mujer</option>
                    <option value="masculino">Hombre</option>
                    <option value="ninguno">Prefiero no decirlo</option>
                  </select>
                  <label for="floatingSelect">Género</label>
                </div>
              </div>

              <!-- Username Input -->
              <div class="col-lg-6">
                <div class="form-floating ">
                  <input type="text" class="form-control" id="usernameSignUp" placeholder="Username">
                  <label for="usernameSignUp">Nombre de usuario</label>
                </div>
              </div>

            </div>


            <div class="row mb-3">

              <!-- Email input -->
              <div class="col-lg-7">
                <div class="form-floating">
                  <input type="email" class="form-control" id="emailSignUp" placeholder="email@example.com">
                  <label for="emailSignUp">Correo electrónico</label>
                </div>
              </div>

              <!-- Password input -->
              <div class="col-lg-5">
                <div class="form-floating">
                  <input type="password" class="form-control" id="passSignUp" placeholder="Password">
                  <label for="passSignUp">Contraseña</label>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <div class="">
                <button type="submit" class="btn btn-primary">Registrarme</button>
              </div>

              <div class="">
                <p class="small fw-bold m-0"> ¿Ya tienes una cuenta? <a href="#!" class="link-danger"> Iniciar Sesión </a></p>
              </div>
            </div>
          </form>

        </div>
      </div>
    </section>
  </main>

  <!-- CDN via jsDelivr Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>