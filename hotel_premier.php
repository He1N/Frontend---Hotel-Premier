<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelPremier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    

    <link rel="stylesheet" href="estilos.css">

    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Calificaciones y opiniones -->
    
   

</head>
<body class="bg-light">
    
<?php require('./inc/header.php'); ?>


  <!-- carrosel     -->
      
      <div class="container-fluid px-lg-4 mt-4">

        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="./carousel/im1.JPG" class="w-100 d-block" />
              </div>
              <div class="swiper-slide">
                <img src="./carousel/im2.JPG" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="./carousel/im3.JPG" class="w-100 d-block" />
              </div>
              <div class="swiper-slide">
                <img src="./carousel/im4.JPG" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="./carousel/im5.JPG" class="w-100 d-block"/>
              </div>
              <div class="swiper-slide">
                <img src="./carousel/im6.JPG" class="w-100 d-block"/>
              </div>
            </div>
          </div>
        
      </div>

<!-- buscador formulario -->

<div class="container availability-form" >
  <div class="row">
    <div class="col-lg-12 shadow p-4 rounded" style="background-color: rgba(240, 224, 211, 1);">
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Entrada</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500;">Salida</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500;">Adultos</label>

        <select class="form-select shadow-none">
          <option value="1">Uno</option>
          <option value="2">Dos</option>
          <option value="3">Tres</option>
        </select>

          </div>

          <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight: 500;">Niños</label>

        <select class="form-select shadow-none">
          <option value="1">Uno</option>
          <option value="2">Dos</option>
          <option value="3">Tres</option>
        </select>

          </div>

          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Buscar</button>
          </div>
          
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Habitaciones -->


<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark" >Habitaciones</h2>

  <div class="container">
    <div class="row">
    
      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="./images/habitaciones/hab3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Habitación familiar</h5>
            <h6 class="mb-4">s/. 250</h6>
            <div class="caracteristicas mb-4">
                <h6 class="mb-1">Características</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 camas
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 baños
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Cuna (a solicitud)
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofas
                </span>
            </div>

            <div class="instalaciones mb-4">
              <h6 class="mb-1">Instalaciones</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Red Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tv-cable
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telefonía
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ventilador
              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="./hotel_premier.php" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a>
              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">Más detalles</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="./images/habitaciones/hab2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Habitación cuádruple</h5>
            <h6 class="mb-4">s/. 190</h6>
            <div class="caracteristicas mb-4">
                <h6 class="mb-1">Características</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 camas
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 baños
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Cuna (a solicitud)
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofas
                </span>
            </div>

            <div class="instalaciones mb-4">
              <h6 class="mb-1">Instalaciones</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Red Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tv-cable
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telefonía
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ventilador
              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a>
              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">Más detalles</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="./images/habitaciones/hab1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Habitación matrimonial</h5>
            <h6 class="mb-4">s/. 120</h6>
            <div class="caracteristicas mb-4">
                <h6 class="mb-1">Características</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 camas
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 baños
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Cuna (a solicitud)
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofas
                </span>
            </div>

            <div class="instalaciones mb-4">
              <h6 class="mb-1">Instalaciones</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Red Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tv-cable
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telefonía
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ventilador
              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a>
              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">Más detalles</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="./images/habitaciones/hab1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Habitación familiar</h5>
            <h6 class="mb-4">s/. 250</h6>
            <div class="caracteristicas mb-4">
                <h6 class="mb-1">Características</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 camas
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 baños
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Cuna (a solicitud)
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofas
                </span>
            </div>

            <div class="instalaciones mb-4">
              <h6 class="mb-1">Instalaciones</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Red Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tv-cable
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telefonía
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ventilador
              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a>
              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">Más detalles</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="./images/habitaciones/hab1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Habitación cuádruple</h5>
            <h6 class="mb-4">s/. 190</h6>
            <div class="caracteristicas mb-4">
                <h6 class="mb-1">Características</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 camas
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 baños
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Cuna (a solicitud)
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofas
                </span>
            </div>

            <div class="instalaciones mb-4">
              <h6 class="mb-1">Instalaciones</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Red Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tv-cable
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telefonía
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ventilador
              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a>
              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">Más detalles</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
          <img src="./images/habitaciones/hab1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Habitación matrimonial</h5>
            <h6 class="mb-4">s/. 120</h6>
            <div class="caracteristicas mb-4">
                <h6 class="mb-1">Características</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 camas
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 baños
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Cuna (a solicitud)
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofas
                </span>
            </div>

            <div class="instalaciones mb-4">
              <h6 class="mb-1">Instalaciones</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Red Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Tv-cable
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Telefonía
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Ventilador
              </span>
            </div>

            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a>
              <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">Más detalles</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Más habitaciones</a>
      </div>
    </div>
  </div>



      <!-- Información de contacto  Versión 1 --> 

      <!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark">Información de contacto</h2>
      <div class="container" >
        <div class="row">
        <div class="col-lg-8 col-md-8">

          <iframe width="700" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.2908107524468!2d-70.24900322596693!3d-18.01170258144931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915ac584788f9dab%3A0xf543b8f423580888!2sHotel%20Premier%20Tacna!5e0!3m2!1ses-419!2spe!4v1702078496352!5m2!1ses-419!2spe"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <a href="tel: +51 980920053" class="d-inline-block mb-2 text-decoration-none text-dark">+51 980920053</a><br>

            <a href="tel: 052-246045" class="d-inline-block mb-2 text-decoration-none text-dark">052-246045</a><br>

            <a href="tel: 052-415110" class="d-inline-block mb-2 text-decoration-none text-dark">052-415110</a><br>

            <a href="mailto:reservas@hotelpremier.com.pe" class="d-inline-block mb-2 text-decoration-none text-dark">Correo: reservas@hotelpremier.com.pe</a><br>

            <a href="tel: +51 980920053 / 052-246045 /052-415110" class="d-inline-block mb-2 text-decoration-none text-dark">Dirección: Calle Junin 19 esquina con Av Bolognesi-Tacna - Perú</a><br>
          
         
          </div>
        </div>
      </div>
      </div> -->

      <!-- version 2 informacion de contacto -->

      <h2 class="mt-5 pt-4 mb-4 text-dark text-center fw-bold h-font">Información de contacto</h2>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.2908107524468!2d-70.24900322596693!3d-18.01170258144931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915ac584788f9dab%3A0xf543b8f423580888!2sHotel%20Premier%20Tacna!5e0!3m2!1ses-419!2spe!4v1702078496352!5m2!1ses-419!2spe"   loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br><br>
            <span><i class="bi bi-geo-alt-fill"></i> Dirección: </span>
            <a href="https://maps.app.goo.gl/Yta9Ubc58Gjr5eWh7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-3"> Calle Junin 19 esquina con Av Bolognesi - Tacna - Perú</a>
          <br>
            <span><i class="bi bi-envelope-fill"></i> E-mail:   </span>
            <a href="mailto:reservas@hotelpremier.com.pe" class="d-inline-block mb-2 text-decoration-none text-dark mb-2">reservas@hotelpremier.com.pe</a>
            
          </div>

          <div class="col-lg-4 col-md-4">
              <div class="bg-white p-4 rounded mb-4">
                <h5>Teléfonos</h5>
                <a href="tel: +51 980920053" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +51 980920053</a>
                <br>
                <a href="tel: 052-246045" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 052-246045</a>

                <br>
                <a href="tel: 052-415110" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> 052-415110</a><br>

              </div>
          
          <div class="bg-white p-4 rounded mb-4">
                <h5>Síguenos en:</h5>
                <a href="#" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-facebook me-1"></i>Facebook
                  </span></a>
              
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                      <i class="bi bi-twitter me-1"></i>Twitter
                </span></a>  
               
                <a href="#" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-youtube me-1"></i>Youtube
                </span></a>
              
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                      <i class="bi bi-instagram me-1"></i>Instagram
                </span></a>
             
                <a href="#" class="d-inline-block">
                      <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-linkedin me-1"></i>Linkedin
                </span></a>
            </div>

          </div>

          
        </div>
      </div>





<br><br>


 <!-- Calificaciones y opiniones -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark" >Calificaciones y opiniones</h2>
  <br>
  <div class="container">

      <!-- boton escribir opinion -->
    <button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-size: 17px;">Escribir opinión</button>
    </div>

<!-- Modal Opinion -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <form>
        <div class="modal-header">
            <h5 class="modal-title">Escribe tu opinión</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control shadow-none">
            </div>

            <!-- <div class="mb-3">
              <label class="form-label">Comentario</label>
              <textarea class="form-control" rows="3" placeholder="Escribe tu opinión aquí" maxlength="500"></textarea>
            </div> -->

            <div class="mb-3">
                    <label class="form-label">Comentario</label>
                    <textarea class="form-control shadow-none" rows="3" placeholder="Describe tu experiencia"></textarea>   
            </div>

<!-- Valoracion con estrellas  -->
            <!-- <div class="mb-3 d-flex align-items-center justify-content-center" >
           
             <i class="bi bi-star"></i>

            </div> -->
            <div>
              <button type="submit"  class="btn btn-sm text-white custom-bg shadow-none" style="font-size: 15px;">Enviar</button>
            </div>
        </div>
    </form>
    </div>
  </div>
</div> 
<!-- footer  -->

<?php require('./inc/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay:{
            delay: 3500,
            disableOnInteraction: false,
          }
        });
      </script>

<script src="bs-custom-form.js"></script>

</body>
</html>