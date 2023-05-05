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
  <main>
    <section class="container-sm">

      <div class="d-flex flex-lg-row flex-column justify-content-center align-items-center h-100">

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

<div class="d-flex flex-column flex-md-row justify-content-between py-0 px-0 px-xl-4 bg-dark text-center text-md-start" style="margin-top: 50px;">
  <div class="order-md-1 mb-3 mb-md-0">
    <img src="<?php echo base_url('assets/images/EREIICDI_LOGO.svg'); ?>" alt="EREIICDI" width="300" height="120">
  </div>
  <div class="order-md-2 mb-3 mb-md-0 text-white" style="text-align: center; display: flex; justify-content: center; margin-top: 50px;">
  <p class="mx-4"> Copyright&copy;2023. EREIICDI</p>
</div>
<div class="order-md-3 mb-3 mb-md-0 text-white" style="margin-top: 50px;">
  <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
    <li class="mx-3">
    <a href="https://www.facebook.com/mi-pagina" target="_blank"><i class="fab fa-facebook">Facebook</i></a>
    </li>
    <li class="mx-3">
    <a href="https://www.twitter.com/mi-pagina" target="_blank"><i class="fab fa-twitter">Twitter</i></a>
    </li>
    <li class="mx-3">
    <a href="https://www.instagram.com/mi-pagina" target="_blank"><i class="fab fa-instagram">Instagram</i></a>
    </li>
    <li class="mx-3">
      <a href="mailto:contacto@ejemplo.com" target="_blank"><i class="far fa-envelope fa-2x">Correo</i></a>
      </a>
    </li>
  </ul>
</div>
</div>

  
  <!-- CDN via jsDelivr Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>