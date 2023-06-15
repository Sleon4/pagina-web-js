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
  <?php include_once("./modules/components/navbar.php"); ?>

  <div class="bg-light" id="#inicio">
    <div class="container">
      <div class="py-5">
        <div class="col-12 col-sm-10 col-md-7 col-lg-6 col-xl-5 mx-auto text-center my-5">
          <h5>Bienvenidos</h5>
          <h1 class="mb-3">Carlos Sanchez Barrios</h1>

          <p>Ofrecemos servicio de Alquiler de togas, Birretes, Estudio Fotograficos y Marquetia</p>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white" id="#sobre-mi">
    <div class="container">
      <div class="py-5">
        <div class="col-12 col-sm-10 col-md-9 col-lg-8 col-xl-7 mx-auto my-5">
          <div class="row">
            <div class="col-md-4">
              <img src="./assets/img/birrete.jpeg" class="img-fluid rounded">
            </div>

            <div class="col-md-8">
              <div class="card-body">
                <h4 class="card-title">SOBRE MI EMPRESA</h4>
                <h5 class="card-title">Carlos <label class="text-danger">Togas</label></h5>
                <p class="card-text">OFRECEMOS SERVICIO DE ALQUILER DE TOGAS Y BIRRETES</p>
                <p>servicio de Alquiler de togas, Birretes, Estudio Fotograficos y Marquetia al departamento Tolima, con sus veredas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-light" id="#portfolio">
    <div class="container">
      <div class="py-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 mx-auto my-5">
          <div class="w-100 text-center">
            <h1>NUESTRO TRABAJO</h1>
          </div>

          <hr>

          <div class="mb-3">
            <h4 class="text-danger">FOTOS</h4>

            <div class="accordion" id="accordion-fotos">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fotos-escuelas" aria-expanded="true" aria-controls="fotos-escuelas">
                    ESCUELAS
                  </button>
                </h2>

                <div id="fotos-escuelas" class="accordion-collapse collapse" data-bs-parent="#accordion-fotos">
                  <div class="accordion-body" id="escuelas-fotos"></div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fotos-colegios" aria-expanded="true" aria-controls="fotos-colegios">
                    COLEGIOS
                  </button>
                </h2>

                <div id="fotos-colegios" class="accordion-collapse collapse" data-bs-parent="#accordion-fotos">
                  <div class="accordion-body" id="colegios-fotos"></div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fotos-universidad-tecnicos" aria-expanded="true" aria-controls="fotos-universidad-tecnicos">
                    UNIVERSIDAD: TECNICOS
                  </button>
                </h2>

                <div id="fotos-universidad-tecnicos" class="accordion-collapse collapse" data-bs-parent="#accordion-fotos">
                  <div class="accordion-body" id="universidad-tecnicos-fotos"></div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fotos-universidad-tecnologos" aria-expanded="true" aria-controls="fotos-universidad-tecnologos">
                    UNIVERSIDAD: TECNOLOGOS
                  </button>
                </h2>

                <div id="fotos-universidad-tecnologos" class="accordion-collapse collapse" data-bs-parent="#accordion-fotos">
                  <div class="accordion-body" id="universidad-tecnologos-fotos"></div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fotos-universidad-profesional" aria-expanded="true" aria-controls="fotos-universidad-profesional">
                    UNIVERSIDAD: PROFESIONAL
                  </button>
                </h2>

                <div id="fotos-universidad-profesional" class="accordion-collapse collapse" data-bs-parent="#accordion-fotos">
                  <div class="accordion-body" id="universidad-profesional-fotos"></div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fotos-mosaicos" aria-expanded="true" aria-controls="fotos-mosaicos">
                    MOSAICOS
                  </button>
                </h2>

                <div id="fotos-mosaicos" class="accordion-collapse collapse" data-bs-parent="#accordion-fotos">
                  <div class="accordion-body" id="mosaicos-fotos"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <h4 class="text-danger">VIDEOS</h4>

            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                <div class="ratio ratio-21x9">
                  <iframe src="https://www.youtube.com/embed/QbIbq5Z_WqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>

              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                <div class="ratio ratio-21x9">
                  <iframe src="https://www.youtube.com/embed/URO4woeidyQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>

              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                <div class="ratio ratio-21x9">
                  <iframe src="https://www.youtube.com/embed/E78egrQ6f5k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>

              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                <div class="ratio ratio-21x9">
                  <iframe src="https://www.youtube.com/embed/wfZUUHC4qd4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>

              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                <div class="ratio ratio-21x9">
                  <iframe src="https://www.youtube.com/embed/BNhQTx6v-tU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>

              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                <div class="ratio ratio-21x9">
                  <iframe src="https://www.youtube.com/embed/77Dwowq5__0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="./assets/js/settings.js"></script>
  <script src="./assets/js/home.js"></script>
</body>

</html>