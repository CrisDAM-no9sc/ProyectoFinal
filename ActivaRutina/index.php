<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@6/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>ActivaRutina</title>
    </head>
    <body>
      <!--==================== HEADER NAVEGACION ====================-->
      <header class="header" id="header">
        <nav class="nav container">
          <a href="#" class="nav_logo">ActivaRutina</a>
          <div class="nav_menu" id="nav-menu">
            <ul class="nav_list">
              <li class="nav_item">
                <a href="#home" class="nav_link active-link">HOME</a>
              </li>
              
              <li class="nav_item">
                <a href="#services" class="nav_link">SERVICIOS</a>
              </li>
              <li class="nav_item">
                <a href="#testimonial" class="nav_link">OPINIONES</a>
              </li>
              <li class="nav_item">
                <a href="#projects" class="nav_link">LO MÁS</a>
              </li>
              <li class="nav_item">
                <a href="#contact" class="nav_link">CONTACTO</a>
              </li>

            </ul>
            <i class="fa-solid fa-xmark nav_close" id="nav-close"></i>
          </div>

          <!------------    MENU ICONO MOBIL    ------------>
          <div class="nav_toggle" id="nav-toggle">
            <i class="fa-solid fa-bars"></i>
          </div>
        </nav>
      </header>
      <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
          <div class="home_container container grid">
            <div class="home_data">
              <h3 class="home_data-subtitle">Activate durante las Rutinas</h3>
              <h1 class="home_data-title">
                Somos <b> Activa <br> Rutinas</b>
              </h1>
              <span class="home_data-description">
              Esta diseñada para ayudarte a mantenerte activo y saludable en tu día a día. 
              Ofrece una combinación de consejos sobre deporte, dieta saludable y rutinas de ejercicio que puedes realizar en casa 
              para hacer que tu día sea más llevadero y aprovechar las horas vacías de manera saludable.
              </span>
              
            </div>
            <div class="home_img">
              <img src="assets/img/principal.png" alt="">
              <div class="home_img-border"></div>
            </div>
            <div class="home_social">
              <a href="https://www.facebook.com/" target="_blank" class="home_social-link">
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" class="home_social-link">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="https://www.twitter.com/" target="_blank" class="home_social-link">
                <i class="fa-brands fa-x-twitter"></i>
              </a>

            </div>
          </div>
        </section>


        
        <!--==================== SREVICES ====================-->
        <section class="services section" id="services">
          <h2 class="section_title">SERVICIOS</h2>
          <div class="container grid service_container">
            <div class="service_card">
              <i class="service_icon fa-solid fa-dumbbell"></i>
              <span class="service_card-title">
              Entrenamiento Total en Casa
              </span>
              <p class="body_description">
              Programas de entrenamiento personalizados y sesiones en vivo para ayudarte a alcanzar tus metas de fitness desde la comodidad de tu hogar.
              </p>
              <a href="ejercicios.html" class="button">Ejercicios</a>
            </div>
          <!------    Servicio carta 2 --------------------------------->
          <div class="service_card">
            <i class="service_icon fa-solid fa-puzzle-piece"></i>
            <span class="service_card-title">
            Descubre tu Mejor Versión
            </span>
            <p class="body_description">
            Recursos educativos y herramientas prácticas para mejorar tu bienestar físico y mental, ayudándote a descubrir tu máximo potencial.
            </p>
            <a href="version.html" class="button">Descubre</a>
          </div>
          <!----------- SERVICIOS CARTA 3 --------------------------------->
          <div class="service_card">
            <i class="service_icon fa-solid fa-people-robbery"></i>
            <span class="service_card-title">
            Lista de tareas
            </span>
            <p class="body_description">
            Un servicio completo de asesoramiento para ayudarte a adoptar un estilo de vida saludable y transformar tu bienestar de adentro hacia afuera.
            </p>
            <a href="asesorar.html" class="button">TO-DO list</a>
          </div>

          </div>
        </section>
        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section" id="testimonial">
          <h2 class="section_title">OPINIONES</h2>
          <div class="testimonial_container container swiper-container">
            <div class="swiper-wrapper">
              <!-----------REVIEW 1 ------------------------------>
              <div class="testimonial_card swiper-slide">
                <div class="testimonial_data">
                  <img src="assets/img/testimonial1.jpg" alt="" class="testimonial_img">
                  <div class="testimonial_title">
                    <h2 class="service_card-title">Mario Cifuente</h2>
                    <span class="capture_text">20 años</span>
                  </div>
                  <p class="body_description">
                  "Me encanta Activate Rutina porque me ha ayudado a establecer una rutina de ejercicios sólida que puedo seguir desde
                  la comodidad de mi dormitorio. Las rutinas de ejercicio son variadas y desafiantes, 
                  pero también adaptables a mi horario de estudios. Además, los consejos sobre una dieta saludable me han ayudado 
                  a mejorar mis hábitos alimenticios y a mantenerme enfocado en mis metas de fitness. ¡Esta aplicación definitivamente
                  ha hecho una diferencia en mi vida!"
                  </p>
                </div>
              </div>
            <!------------------------- REVIEW 2 ----------------->
              <div class="testimonial_card swiper-slide">
                <div class="testimonial_data">
                  <img src="assets/img/testimonial3.jpg" alt="" class="testimonial_img">
                  <div class="testimonial_title">
                    <h2 class="capture_text">Maria Gallardo</h2>
                    <span class="capture_text">40 años</span>
                  </div>
                  <p class="body_description">
                  "Después de años de descuidar mi salud debido a las responsabilidades como ama de casa, finalmente decidí hacer un 
                  cambio. Activate Rutina ha sido mi compañero de viaje en este proceso de transformación. Las rutinas de ejercicio en 
                  casa son fáciles de seguir y no requieren equipo costoso. Además, los consejos sobre dieta saludable me han ayudado a
                  mejorar mi alimentación y a sentirme con más energía y vitalidad. ¡Recomendaría esta aplicación a cualquier persona 
                  que quiera comenzar un viaje hacia un estilo de vida más saludable!"
                  </p>
                </div>
              </div>
              <!------------------------- REVIEW 3 ----------------->
              <div class="testimonial_card swiper-slide">
                <div class="testimonial_data">
                  <img src="assets/img/testimonial2.jpg" alt="" class="testimonial_img">
                  <div class="testimonial_title">
                    <h2 class="service_card-title">Juan Lopez</h2>
                    <span class="capture_text">30 años</span>
                  </div>
                  <p class="body_description">
                  "Como emprendedor, mi vida es bastante agitada y a menudo no tengo tiempo para ir al gimnasio. Activate Rutina ha 
                  sido una solución perfecta para mí. Las rutinas de ejercicio en casa son convenientes y efectivas, y puedo hacerlas 
                  en cualquier momento que se ajuste a mi agenda. Además, los consejos sobre deporte y dieta saludable me han ayudado 
                  a mantener un estilo de vida equilibrado y a maximizar mi productividad. ¡Definitivamente le doy cinco estrellas a 
                  esta aplicación!"
                  </p>
                </div>
              </div>
              <!------------------------- REVIEW 4 ----------------->
              <div class="testimonial_card swiper-slide">
                <div class="testimonial_data">
                  <img src="assets/img/testimonial4.jpg" alt="" class="testimonial_img">
                  <div class="testimonial_title">
                    <h2 class="service_card-title">Sofia Moreno</h2>
                    <span class="capture_text">20 años</span>
                  </div>
                  <p class="body_description">
                  "Me ha ayudado a establecer una rutina de ejercicios sólida que puedo seguir desde
                  la comodidad de mi dormitorio. Las rutinas de ejercicio son variadas y desafiantes, 
                  pero también adaptables a mi horario de estudios.¡Esta web definitivamente
                  ha hecho una diferencia en mi vida!"
                  </p>
                </div>
              </div>


            </div>
          </div>
        </section>
        <!--============================ PROJECTS ==========================================-->
        <section class="projects section" id="projects">
          <h2 class="section_title">LO MÁS VISTADO DE LA WEB</h2>
          <div class="project_container container grid">
            <!-----------    Projecto carta 1 ------------->
              <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "activa_rutina";

                    // Crear conexión
                    $conn = new mysqli($servername, $username, $password, $database);

                    // Verificar la conexión
                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }

                    // Consulta SQL para seleccionar todos los registros de la tabla "Proyectos"
                    $sql = "SELECT * FROM proyectos";
                    $result = $conn->query($sql);

                    // Verificar si se encontraron resultados
                    if ($result->num_rows > 0) {
                        // Iterar sobre los resultados y mostrar los datos
                        while($row = $result->fetch_assoc()) {
                            echo '
                            <div class="project_card">
                            <img src="assets/img/' . $row["imagen"] . '" alt="" class="project_img">
                                <div class="project_content">
                                    <div class="project_data">
                                        <h3 class="project_title">' . $row["titulo"] . '</h3>
                                        <span class="project_subtitle">' . $row["descripcion"] . '</span>
                                        <span class="project_data">' . $row["fecha"] . '</span>
                                    </div>
                                </div>
                                <button class="button button--flex project_button">
                                    '.$row['demo'].'
                                </button>
                            </div>';
                        }
                    } else {
                        echo "No se encontraron proyectos.";
                    }

                   
                    $conn->close();
                    ?>
             
          </div>
        </section>

        <!--================================== CONTACT =====================================-->
        <secrion class="contact section" id="contact">
          <div class="">
            <h2 class="section_title">Contactanos</h2>
            <div class="contact_container container grid">
              <div class="contact_data">
                <div class="contact_data-box">
                  <i class="fa-solid fa-phone contact-icon"></i>
                  <div class="">
                    <h3>Teléfono:</h3>
                    <span> 963 154 826 </span>
                  </div>
                </div>
                <div class="contact_data-box">
                  <i class="fa-solid fa-envelope contact-icon"></i>
                  <div class="">
                    <h3>Correo:</h3>
                    <span>activarutina@gmail.com</span>
                  </div>
                </div>
                <div class="contact_data-box">
                  <i class="fa-solid fa-location-dot contact-icon"></i>
                  <div class="">
                    <h3>Ubicación</h3>
                    <span>Calle Miguel Torres 41</span>
                  </div>
                </div>
              </div>
              <!-------------------------- FORMULARIO ----------------------------------->
              <div class="contact_content">
                <form action="formulario.php" method="POST" class="contact_form grid">
                    <input type="text" name="nombre_completo" placeholder="Nombre completo" class="contact_input" required>
                    <input type="email" name="correo_electronico" placeholder="Correo electronico" class="contact_input" required>
                    <textarea name="mensaje" rows="8" class="contact_input" placeholder="Tu mensaje" required></textarea>
                    <button type="submit" class="button">Enviar</button>
                </form>
              </div>
              <!-------------------------- FORMULARIO ----------------------------------->
            </div>
          </div>
        </secrion>
          
      </main>      

      <!--==================================== FOOTER =========================0============-->
      <footer class="footer section">
        <div class="footer_container container grid">
          <div class="footer_content grid">
            <div>
              <h3 class="footer_title">ActivaRutinas</h3>
            </div>
            <div class="footer_data">
              
              <a href="#services" class="footer_link">SERVICIOS</a>
              <a href="#testimonial" class="footer_link">OPINIONES</a>
              <a href="#projects" class="footer_link">LO MÁS</a>
              <a href="#contact" class="footer_link">CCONTACTO</a>
            </div>
            <div class="footer_social-container">
              <a href="https://www.facebook.com/" target="_blank" class="footer_social">
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.twitter.com/" target="_blank" class="footer_social">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" class="footer_social">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="https://www.youtube.com/" target="_blank" class="footer_social">
                <i class="fa-brands fa-youtube"></i>
              </a>
            </div>
          </div>
          <div class="footer_rights">
            <p class="footer_copy">
              &#169; 2024 Creación Empresa Solidaria
            </p>
          </div>
        </div>
      </footer>

      <!--========== SCROLL UP ==========-->
       <a href="#" class="scrollup" id="scroll-up">
        <i class="fa-solid fa-arrow-up scrollup_icon"></i>
       </a>    
      
      <!--=============== SCROLL REVEAL===============-->
      <script src="https://unpkg.com/scrollreveal"></script>
      <!--=============== SWIPER JS ===============-->
      <script src="https://cdn.jsdelivr.net/npm/swiper@6/swiper-bundle.min.js"></script>
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
    </body>
</html>