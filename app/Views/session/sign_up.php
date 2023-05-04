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
  <main class="bg-light bg-gradient">
    <section class="container-sm">

      <div class="d-flex align-items-center justify-content-center vh-100">

        <div class="col-lg-6 col-sm-12">
          <img src="<?= base_url('assets/images/ingles.jpeg') ?>" class="img-fluid" alt="Sample image">
        </div>

        <div class="col-lg-5  offset-1 col-sm-12">
          <form class="border-bottom border-secondary-subtle">
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
              <div class="col-lg-12">
                <div class="form-floating">
                  <input type="email" class="form-control" id="emailSignUp" placeholder="email@example.com">
                  <label for="emailSignUp">Correo electrónico</label>
                </div>
              </div>

            </div>

            <div class="row mb-3">
              <!-- Password input -->
              <div class="col-lg-12">
                <div class="form-floating">
                  <input type="password" class="form-control" id="passSignUp" placeholder="Password">
                  <label for="passSignUp">Contraseña</label>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">

              <div class="d-grid gap-2 col-7 mx-auto mt-1">
                <button class="btn btn-primary fw-bold" type="submit">Registrarme</button>
              </div>

            </div>
          </form>

          <div class="mt-4 text-center">
            <p class="small fw-bold m-0"> ¿Ya tienes una cuenta? <a href="#!" class="link-danger"> Iniciar Sesión </a></p>
          </div>

        </div>
      </div>
    </section>
  </main>

  <!-- CDN via jsDelivr Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>