validateSession();

const files = {
  colegios: [
    "colegio-1.JPG",
    "colegio-2.JPG",
    "colegio-3.JPG",
    "colegio-4.jpg",
    "colegio-5.jpg",
    "colegio-6.jpg",
    "colegio-7.jpg",
    "colegio-8.jpg",
    "colegio-9.jpg",
  ],
  escuela: [
    "escuela-1.JPG",
    "escuela-2.JPG",
    "escuela-3.JPG",
    "escuela-4.JPG",
    "escuela-5.JPG",
    "escuela-6.JPG",
    "escuela-7.jpg",
    "escuela-8.jpg",
    "escuela-9.jpg",
  ],
  mosaicos: [
    "mosaicos-1.jpg",
    "mosaicos-10.jpg",
    "mosaicos-2.jpg",
    "mosaicos-3.jpg",
    "mosaicos-4.jpg",
    "mosaicos-5.jpg",
    "mosaicos-6.jpg",
    "mosaicos-7.jpg",
    "mosaicos-8.jpg",
    "mosaicos-9.jpg",
  ],
  profesional: [
    "universidad-profesional-1.jpg",
    "universidad-profesional-2.jpg",
    "universidad-profesional-3.jpg",
    "universidad-profesional-4.jpg",
    "universidad-profesional-5.jpg",
    "universidad-profesional-6.jpg",
    "universidad-profesional-7.jpg",
    "universidad-profesional-8.jpg",
    "universidad-profesional-9.jpg",
  ],
  tecnico: [
    "universidad-tecnico -1.jpg",
    "universidad-tecnico-2.jpg",
    "universidad-tecnico-3.jpg",
  ],
  tecnologo: [
    "universidad-tecnologo-1.jpg",
    "universidad-tecnologo-2.jpg",
    "universidad-tecnologo-3.jpg",
    "universidad-tecnologo-4.jpg",
    "universidad-tecnologo-5.jpg",
    "universidad-tecnologo-6.jpg",
  ],
};

const addCardFotos = (
  container_id,
  fotos,
  custom = ["col-12", "col-sm-6", "col-md-6", "col-lg-6", "col-xl-3", "mb-3"]
) => {
  const row = document.createElement("DIV");
  row.classList.add("row");

  fotos.forEach((foto) => {
    const img = document.createElement("IMG");
    img.src = "./assets/img/" + foto;
    img.setAttribute("lazy", "loading");
    img.classList.add("img-fluid");

    const col = document.createElement("DIV");
    col.classList.add(...custom);
    col.appendChild(img);

    row.appendChild(col);
  });

  getField(container_id).appendChild(row);
};

addCardFotos("escuelas-fotos", files.escuela);
addCardFotos("colegios-fotos", files.colegios);
addCardFotos("universidad-tecnicos-fotos", files.tecnico);
addCardFotos("universidad-tecnologos-fotos", files.tecnologo);
addCardFotos("universidad-profesional-fotos", files.profesional);
addCardFotos("mosaicos-fotos", files.mosaicos, ["col-12", "col-sm-6", "col-md-6", "col-lg-6", "col-xl-6", "mb-3"]);
