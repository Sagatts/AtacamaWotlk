<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="js/bootstrap.js"></script>
    <title>Nosotros WoW Atacama</title>
</head>
<body>
  <nav class="contenedor">
    <div class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid" style="width: 60%;">
            <div class="contenedor_logo">
                <a style="padding-right: 50px;" href="index.php">
                    <img src="img/Logo.png" class="logo" alt="Logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 400px;">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 25px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Inicio_sesion.php">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registro.php">Registrarse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="nosotros.php">Nosotros</a>
                </li>
            </ul>
            </div>
        </div>
    </div>
</nav>
    <header class="contenedor">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/Header.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/Header_2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/Header_3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          <div>
              <div class="snow little"></div>
              <div class="snow normal"></div>
              <div class="snow big"></div>
              <div class="snow giant"></div>
          </div>
        </div>
    </header>
    <section>
      <div class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style=" border-bottom: 3px solid gray;">
          <div class="container-fluid" style="width: 60%;">
              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 400px;">
                <div style="font-size: 25px;">
                  <a class="nav-link active" aria-current="page" href="index.php">World of Warcraft Atacama</a>
                </div>
              </div>
          </div>
      </div>
      <div class="div_section" style="padding-bottom: 10px;">
          <h1 class="wow-text" style="font-size: 50px; color: aquamarine;">Ciudadela de Corona de Hielo</h1>
          <div style="display: flex; justify-content: space-around; margin-bottom: 15px;">
              <div class="card" style="width: 18rem;">
                  <img src="./img/Lord_Tuetano.jfif" class="card-img-top" alt="Lord Tuetano" width="100%" height="80%">
                  <ul class="list-group list-group-flush">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">Voz de Lord Tuetano</li>
                      </ul>
                      <audio controls style="width: auto;">
                        <source src="./sound/Voz_Tuetano.mp3" type="audio/mpeg">
                  </audio>
                  </ul>
              </div>
              <div style="width: 25%;">
                  <h2 class="wow-text">Lord Tuetano</h2>
                  <p>El guardián del Trono Helado en la cámara de La Aguja. El Rey Exánime lo construyó a partir de los huesos de miles de aventureros derrotados y 
                      maneja el poder del mismísimo trono. Si no destruimos a este esqueleto no podremos tomar la Ciudadela de la Corona de Hielo.</p>
              </div>
              <div class="card" style="width: 18rem; margin-right: 5px;">
                  <img src="./img/Comillosaurio.jpg" class="card-img-top" alt="Colmillosaurio" width="100%" height="80%">
                  <ul class="list-group list-group-flush">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">Voz de Libramorte</li>
                      </ul>
                      <audio controls style="width: auto;">
                        <source src="./sound/Voz_Libra.mp3" type="audio/mpeg">
                  </audio>
                  </ul>
              </div>
              <div style="width: 25%;">
                  <h2 class="wow-text">Libramorte Colmillosaurio</h2>
                  <p>El Libramorte fue un valiente Orco, uno de los comandantes de la Expedición de la Horda enviada a Rasganorte.
                      En la batalla de Puerta de Colera fue asesinado por el Rey Exanime que devoro su alma y luego lo resucito como un Caballero de la Muerte, 
                      el mas fuerte de todos y actualmente el cuarto jefe de la Ciudadela de Corona de Hielo</p>
              </div>
          </div>
        <div>
          <div style="margin-bottom: 30px;">
            <h2 class="wow-text text-center">Sindragonsa</h2>
            <div class="card">
              <img src="./img/Sindragonsa.webp" class="card-img-top" alt="Sindragonsa" width="100%">
            </div>
            <p>Es la vermis de escarcha que el Rey Exánime levanta, Mucho antes del Gran Cataclismo, los 5 vuelos de dragones (rojo, azul, bronce, verde y negro) fueron los encargados de vigilar y preservar el prematuro mundo de Azeroth, Sindragosa fue la amada consorte De Malygos (Aspecto Azul), también llamado el Tejehechizos, guardián de toda la magia arcana.</p>
          </div>
        </div>
      </div>
      <div class="div_section" style="padding-bottom: 10px;">
        <h1 class="wow-text" style="font-size: 50px; color: aquamarine;">El Enfrentamiento Final</h1>
        <p>Después de superar los desafíos despiadados impuestos por el Rey Exánime, los valientes aventureros finalmente alcanzaron la cúspide helada de la Ciudadela de Hielo. El viento gélido siseaba con una urgencia inquietante mientras se vislumbraba la imponente figura del Rey Exánime, su armadura oscura relucía con un brillo siniestro bajo la luz mortecina. Ante él se extendía un campo de batalla majestuoso y sombrío, un escenario desafiante donde se librará el enfrentamiento final. </p>
        <div class="card">
          <img src="./img/LK vs Ty.jpg" class="card-img-top" alt="Pelea" width="100%" height="700px">
        </div>
        <div style="display: flex; justify-content: space-around; margin-bottom: 15px;">
            <div style="width: 45%;">
                <h2 class="wow-text text-center">Tirion Vadín</h2>
                <p>Tirion Vadín fue uno de los cinco primeros Caballeros de la Mano de Plata elgidos por el Arzobispo Alonsus Faol y uno de los héroes durante la Segunda Guerra. Más tarde se convirtió en el Señor de la Fortaleza de Mardenholde en Vega del Amparo 
                  Lidera la Cruzada Argenta, una organización nacida de la unión de los viejos paladines de la Mano de Plata con los soldados del Alba Argenta. 
                  Juntos se enfrentarán al Rey Exánime y a La Plaga.</p>
                  <audio controls style="width: 80%;">
                    <source src="./sound/Voz Tirion.mp3" type="audio/mpeg">
                  </audio>
            </div>
            <div style="width: 45%;">
                <h2 class="wow-text text-center">El Rey Exánime</h2>
                <p>El Rey Exánime es un ente creado por Kil'jaeden, a partir del chaman orco Ner'zhul. 
                  Inicialmente fue encerrado dentro del Trono de Hielo. Desde ahí creó el Azote que tenía la misión de preparar la llegada de la Legión de Fuego. 
                  Se fusionó con el príncipe Arthas, a quien absorbió tras ser liberado de su prisión helada. Tras la destrucción de Agonia de Escarcha y la muerte de Arthas, Bolvar Fordragon ocupó el puesto de Jefe del Azote, quedando prisionero en el Trono de Hielo una vez más.</p>
                  <audio controls style="width: 80%;">
                    <source src="./sound/Voz_LK.mp3" type="audio/mpeg">
                  </audio>
            </div>
        </div>
        <div>
    </section>
    <footer class="contenedor" >
        <div class="navbar-expand-lg bg-body-tertiary div_footer" data-bs-theme="dark" >
          <div style="width: 60%; margin: auto;">
            <div class="container text-center separacion_footer">
                <div class="row align-items-start">
                  <div class="col">
                    <a class="active" href="#">Términos de Uso</a>
                    <br>
                    <a class="active" href="#">Política de cookies</a>
                    <br>
                    <a class="active" href="#">Reglas</a>
                  </div>
                  <div class="col">
                    <a class="active" href="#">Como conectar</a>
                    <br>
                    <a class="active" href="#">Descargas</a>
                    <br>
                    <a class="active" href="#">Ticket</a>
                  </div>
                  <div class="col">
                    <a class="active" href="#">Armeria</a>
                    <br>
                    <a class="active" href="#">Calculadora de talentos</a>
                    <br>
                    <a class="active" href="#">Noticias</a>
                  </div>
                  <div class="col">
                  <div>
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                    </a>
                  </div>
                  <div>
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                    </a>
                  </div>
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                      <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                    </svg>
                    </a>
                  </div>
                  </div>
                </div>
            </div>
            <div class="text-center">
                <p>© Copyright World of Warcraft Atacama 2023. Todos los derechos reservados.</p></th>
            </div>
        </div>
      </div>
    </footer>
</body>
</html>