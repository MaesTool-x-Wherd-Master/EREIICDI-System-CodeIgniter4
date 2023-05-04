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
  <main class="bg-light bg-gradient">
    <section>
      <div class="container-sm">
        <div class="d-flex align-items-center justify-content-center vh-100">

          <div class="col-lg-6 col-sm-12">
            <img src="<?= base_url('assets/images/banner_sign-in.svg') ?>" class="img-fluid" alt="Sample image">
          </div>


          <div class="col-lg-5  offset-1 col-sm-12">

            <!-- Heading Form -->
            <form class="border-bottom border-secondary-subtle">
              <div class="mb-4 text-lg-start text-center">
                <h2>Inicia sesión</h2>
              </div>

              <div class="row mb-3">
                <!-- Email input -->
                <div class="col-lg-12">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="emailSignIn" placeholder="email@example.com">
                    <label for="emailSignIn">Correo electrónico</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <!-- Username Input -->
                <div class="col-lg-12">
                  <div class="form-floating ">
                    <input type="text" class="form-control" id="usernameSignIn" placeholder="Username">
                    <label for="usernameSignIn">Nombre de usuario</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <!-- Password input -->
                <div class="col-lg-12">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="passSignIn" placeholder="Password">
                    <label for="passSignIn">Contraseña</label>
                  </div>
                </div>
              </div>


              <div class="d-flex flex-column align-items-center ">

                <div class="d-grid gap-2 col-7 mx-auto mt-2 mb-2">
                  <button class="btn btn-primary fw-bold" type="submit">Iniciar sesión</button>
                </div>

                <div class="mt-2 mb-4">
                  <a href="#!" class="text-body m-0">¿Olvidaste tu contraseña?</a>
                </div>

              </div>
            </form>

            <div class="d-grid gap-2 col-7 mx-auto mt-4">
              <button class="btn btn-success fw-bold" type="submit">Crear una nueva cuenta</button>
            </div>

          </div>
        </div>
      </div>

    </section>
  </main>

  <!-- CDN via jsDelivr Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>