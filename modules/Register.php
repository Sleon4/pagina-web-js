<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fotos Carlos Toga</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
  <?php include_once("./modules/components/navbar-offline.php"); ?>

  <div class="my-5">
    <div class="container">
      <div class="col-12 col-sm-11 col-md-10 col-lg-8 col-xl-7 mx-auto p-4 border rounded">
        <form id="form-register">
          <h1>Registrarse</h1>
          <hr>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="users_name" class="form-label">Nombres</label>
                <input type="text" id="users_name" class="form-control" placeholder="Nombres..." autocomplete="off" required>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="users_lastname" class="form-label">Apellidos</label>
                <input type="text" id="users_lastname" class="form-control" placeholder="Apellidos..." autocomplete="off" required>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="users_email" class="form-label">Correo Electrónico</label>
                <input type="email" id="users_email" class="form-control" placeholder="Correo Electrónico..." autocomplete="off" required>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="users_password" class="form-label">Contraseña</label>
                <input type="password" id="users_password" class="form-control" placeholder="Contraseña..." autocomplete="off" required>
              </div>
            </div>
          </div>

          <hr>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Registrarse</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./assets/js/settings.js"></script>
  <script src="./assets/js/register.js"></script>
</body>

</html>