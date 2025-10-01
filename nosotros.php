<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuanz nosotros</title>
  <link rel="icon" href="img/Nuanz_N2.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="header">
    <div class="logo">
      <a href="index.php" class="logo-container">
        <img src="img/Nuanz_logo2.png" alt="Logo Normal" class="normal">
        <img src="img/Nuanz_logo1.png" alt="Logo Hover" class="hover">
      </a>
    </div>

    <nav class="nav-center">
      <a href="index.php">Inicio</a>
      <a href="nosotros.php">Nosotros</a>
      <a href="soluciones.php">Soluciones</a>
      <a href="aclaremos.php">Aclaremos</a>
    </nav>

    <a href="contactanos.php" class="btn-right">Contactanos</a>

    <div class="menu-toggle" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </header>

  <div class="mobile-menu" id="mobileMenu">
    <a href="index.php">Inicio</a>
    <a href="nosotros.php">Nosotros</a>
    <a href="soluciones.php">Soluciones</a>
    <a href="aclaremos.php">Aclaremos</a>
    <a href="contactanos.php">Contactanos</a>
  </div>

  <main class="main-content bg-nosotros">
    <h1 class="hero-title">
      Descubre<br> 
      Nuestros<br>
      Servicios
    </h1>

    <p class="hero-subtitle">
      <strong>Brindamos soluciones efectivas basadas en datos.</strong> Nuestro objetivo es darte información clara y estrategias hechas a tu medida, para que puedas <strong>aprovechar al máximo tus datos, automatizar procesos y hacer crecer tu empresa</strong>, sin importar su tamaño.
    </p>

    <div class="cta-buttons">
      <a href="contactanos.php" class="btn-primary">Comenzar</a>
    </div>
    <br>
  </main>
 

  <!--NOSOTROS-->
<section class="equipo-section">
        <div class="section-header">
            <h2 class="section-title">Nuestro Equipo</h2>
            <p class="section-subtitle">
                Conoce a los expertos apasionados que transforman datos complejos 
                en soluciones innovadoras para impulsar tu negocio.
            </p>
        </div>

        <div>
            <!-- Miembro 1 - Imagen Izquierda -->
             <div class="miembro">
                <div class="miembro-imagen">
                    <div class="imagen-container">
                        <div class="foto-placeholder"><img src="img/Miembros/Sebastian-Fichendler  .jpeg" alt="Sebastian Fichendler" class="miembro-foto"></div>
                    </div>
                    <div class="decoracion decoracion-1"></div>
                    <div class="decoracion decoracion-2"></div>
                </div>
                <div class="miembro-info">
                    <h3 class="miembro-nombre">Sebastian Fichendler</h3>
                    <div class="miembro-cargo">Project Manager & Data Analyst</div>
                    <p class="miembro-descripcion">
                        Analista de datos con experiencia en marketing digital, finanzas y business intelligence. Especializado en ETL, programación (SQL, R, Python) y visualización con Power BI y Google Data Studio. Enfoque en transformar datos complejos en insights estratégicos que potencien la toma de decisiones
                    </p>
                    <div class="miembro-skills">
                        <span class="skill-tag">Data Strategy</span>
                        <span class="skill-tag">Leadership</span>
                        <span class="skill-tag">Business Intelligence</span>
                    </div>
                    <div class="miembro-social">
                        <a href="https://www.linkedin.com/in/sfichendler/" class="social-link linkedin">in</a>
                    </div>
                </div>
            </div>
        
            <!-- Miembro 2 - Imagen Derecha -->
            <div class="miembro reverse">
                <div class="miembro-imagen">
                    <div class="imagen-container">
                        <div class="foto-placeholder"><img src="img/Miembros/Nicolas-Peric.jpeg" alt="Nicolas Peric" class="miembro-foto"></div>
                    </div>
                    <div class="decoracion decoracion-1"></div>
                    <div class="decoracion decoracion-2"></div>
                </div>
                <div class="miembro-info">
                    <h3 class="miembro-nombre">Nicolas Peric</h3>
                    <div class="miembro-cargo">Data Scientist & Engineer</div>
                    <p class="miembro-descripcion">
                        Científico de datos, orientado a la consultoría en Data & AI con experiencia en el diseño de arquitecturas de datos, automatización de procesos y desarrollo de soluciones de IA aplicadas a la gestión empresarial y gubernamental. Apasionado por transformar datos en estrategias accionables que generen impacto real en organizaciones.
                    </p>
                    <div class="miembro-skills">
                        <span class="skill-tag">Cloud Architecture</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Data Automation</span>
                        <span class="skill-tag">AI Implementation</span>
                    </div>
                    <div class="miembro-social">
                        <a href="https://www.linkedin.com/in/nico-peric/" class="social-link linkedin">in</a>
                    </div>
                </div>
            </div>

            <!-- Miembro 3 - Imagen Izquierda -->
              <div class="miembro">
                <div class="miembro-imagen">
                    <div class="imagen-container">
                        <div class="foto-placeholder"><img src="img/Miembros/Matin-Pimentel.jpeg" alt="Martin Pimentel" class="miembro-foto"></div>
                        </div>
                          <div class="decoracion decoracion-1"></div>
                          <div class="decoracion decoracion-2"></div>
                </div>
                <div class="miembro-info">
                    <h3 class="miembro-nombre">Martin Pimentel</h3>
                    <div class="miembro-cargo">Data Scientist & Engineer</div>
                    <p class="miembro-descripcion">
                      Científico de datos con experiencia en modelos analíticos, machine learning y visualización de datos, orientado a extraer valor estratégico de la información. Compromiso con transformar datos en conocimiento accionable para optimizar la toma de decisiones y generar impacto real en las organizaciones.
                    </p>
                    <div class="miembro-skills">
                        <span class="skill-tag">Statistical Modelling</span>
                        <span class="skill-tag">R & Python</span>
                        <span class="skill-tag">Predictive Analytics</span>
                    </div>
                    <div class="miembro-social">
                        <a href="https://www.linkedin.com/in/martin-pimentel/" class="social-link linkedin">in</a>
                    </div>
                </div>
            </div>
            </div>
    </section>



  <div id="carousel-track"></div>


<!--CASOS DE EXITO-->

   <section class="casos-exito" id="casos-exito">
        <div class="section-header">
            <h2 class="section-title">Casos de Éxito</h2>
            <p class="section-subtitle">
                Conocé cómo ayudamos a empresas como la tuya a transformar sus datos en decisiones claras y estrategias de crecimiento
            </p>
        </div>
       <!-- <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/CasosDeExito/Melisam.jpg" width="60"  height="60" alt=""></div>
                <h3 class="caso-title">Agente de IA para el desarrollo de emails.</h3>
                <div class="caso-industry">Melisam</div>
                <p class="caso-description">
                    Agente de IA para el desarrollo de emails personalizados y automatizados.
                    <br>
                    Tenía una capacidad limitada a la hora de prospectar clientes, escribían a mano los emails (y eran bastante genéricos) para pocas personas que ellos elegían manualmente según el cargo y el proyecto o empresa al que pertenecían .Desarrollo de un Agente IA que desarrolla emails personalizados para prospección de clientes en base a base de datos de proyectos, plantas industriales y otras bases de datos relacionadas. De esta manera, Melisam ya no tiene que escribir emails manualmente, solo debe hacer un export de un archivo de una plataforma y subirlo a una carpeta, luego el AI recoge la información que hay en ese export y realiza tantos correos personalizados según cantidad de emails haya presente el archivo 
                    <br>
                    <h3>Impacto:</h3>
                    <br>
                    <ul>
                      <li>Ahorro de timepo masivo.</li>
                      <li>Personalizacion a escala.</li>
                      <li>Automatizacion simple y efectiva.</li>
                      <li>Incremento en oportunidades comerciales.</li>
                    </ul>
                </p>
                <br>
            </div>
        </div>-->
        <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/CasosDeExito/SI-Municipio.jpg" width="60"  height="60" alt=""></div>
                <h3 class="caso-title">Almacenamiento de Datos para el Análisis del Compromiso</h3>
                <div class="caso-industry">Municipalidad de San Isidro</div>
                <p class="caso-description">
                    Un sistema centralizado para automatizar y gestionar los datos de compromiso.
                    <br>
                    Centralizamos y limpiamos los datos, construimos un almacén de datos local utilizando DuckDB y automatizamos la integración usando la API de Google Drive y Apache Airflow. También se desarrolló un panel interactivo para visualizar la participación y apoyar la toma de decisiones.
                    <br>
                    <h3>Impacto:</h3>
                    <br>
                    <ul>
                      <li>Datos consolidados de más de 90 formularios.</li>
                      <li>Mejora significativa en la calidad y consistencia de los datos.</li>
                      <li>Flujos de trabajo de datos totalmente automatizados con arquitectura escalable.</li>
                      <li>Perspectivas en tiempo real a través de tableros interactivos.</li>
                    </ul>
                </p>
                <br>
            </div>
        </div>
        <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/CasosDeExito/Polivoda.jpeg" width="60"  height="60" alt=""></div>
                <h3 class="caso-title">Análisis y Panel de Control de Producción</h3>
                <div class="caso-industry">Alejpa S.A</div>
                <p class="caso-description">
                    Los datos de ventas, producción y facturación estaban fragmentados entre departamentos, sin un proceso de ingreso estandarizado, lo que dificultaba el análisis y la toma de decisiones.
                    <br>
                    Implementamos un proceso de ingreso de datos unificado utilizando Google Sheets, aseguramos un formato consistente para los datos y conectamos el sistema a un tablero personalizado en Looker Studio adaptado a los KPI.
                    <br>
                    <h3>Impacto:</h3>
                    <br>
                    <ul>
                      <li>Gestión centralizada de los datos clave del negocio.</li>
                      <li>Reducción de errores mediante la entrada estandarizada de datos.</li>
                      <li>Información en tiempo real a través de un dashboard personalizado en Looker Studio.</li>
                      <li>Mejora de la eficiencia entre departamentos y la toma de decisiones.</li>
                    </ul>
                </p>
                <br>
            </div>
        </div>

        <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/CasosDeExito/VL-Municipio.jpg" width="60"  height="60" alt=""></div>
                <h3 class="caso-title">Monitoreo De Indicadores Sociales</h3>
                <div class="caso-industry">Municipalidad de Vicente Lopez</div>
                <p class="caso-description">
                    Un sistema digital para rastrear y monitorear de manera eficiente los hitos del desarrollo de los niños.
                    <br>
                    Digitalizamos el proceso utilizando Google Forms y Big Query para la carga y almacenamiento de datos, y desarrollamos un panel interactivo en Power BI para visualizar los hitos del desarrollo infantil.
                    <br>
                    <h3>Impacto:</h3>
                    <br>
                    <ul>
                      <li>80% de reducción en los errores de entrada de datos.</li>
                      <li>Informes generados en segundos en lugar de días.</li>
                      <li>Aumento de la adopción del sistema por parte del equipo interno.</li>
                      <li>Decisiones más rápidas y basadas en datos para el apoyo a la primera infancia.</li>
                    </ul>
                </p>
                <br>
            </div>
        </div>

        <div class="cta-section">
            <h3 class="cta-title">¿Listo Para Ser Nuestro Próximo Caso de Éxito?</h3>
            <p class="cta-description">
                No importa el tamaño de tu negocio: <strong>te ayudamos a usar tus datos como motor de decisiones y crecimiento.</strong> 
            </p>
            
            <!--CONTACTANOS-->

          
            <form class="contact-form" action="phpmailer.php" method="POST">
              <div class="form-group">
                <input type="text" name="nombre" placeholder="Tu nombre" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" placeholder="Tu email" required>
              </div>
              <div class="form-group">
                <input type="text" name="asunto" placeholder="Asunto" required>
              </div>
              <div class="form-group">
                <textarea style="font-family: Poppins" name="mensaje" type="text" rows="5" placeholder="Tu mensaje" required></textarea>
              </div>
              <button type="submit" class="btn-enviar">Enviar mensaje</button>
            </form>
          </section>
        </div>
    



  <!-- Social -->
  <div class="social-row" aria-label="Redes sociales">
    <a href="https://www.linkedin.com/company/nuanz-info/" class="social-btn" aria-label="LinkedIn" title="LinkedIn" target="_blank">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M4 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM3 8h3v13H3V8Zm6 0h3v2a4 4 0 0 1 3-2c3 0 4 2 4 5v8h-3v-7c0-2-1-3-2.5-3S11 11 11 13v8H8V8Z"/></svg>
    </a>
  </div>
</section>

<!-- ===========================
     FOOTER
     =========================== -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <span class="brand"><img src="img/Nuanz_logo2.png" height="20" width="100" alt=""></span>
        <span class="copy">COPYRIGHT © 2025 Ariel Moscarella Cea.</span>
      </div>
      <nav class="footer-nav">
        <a href="aclaremos.php">Preguntas Frecuentes</a>
        <a href="PdS.php">Política de privacidad</a>
        <a href="soluciones.php">Términos de Servicio</a>
        </ul>
      </nav>
    </div>
  </div>
</footer>





  <script>
    function toggleMenu() {
      const menu = document.getElementById("mobileMenu");
      menu.classList.toggle("show");
    }

    //SERVICIOS
  function toggleAccordion(el) {
    document.querySelectorAll('.accordion-item').forEach(item => {
      if (item !== el) item.classList.remove('active');
    });
    el.classList.toggle('active');
  }

    //CAROUSEL
      const track = document.getElementById("carousel-track");
  const logos = Array.from(track.children);

  logos.forEach(logo => {
    const clone = logo.cloneNode(true);
    track.appendChild(clone);
  });

  //Casos de Exito 
        // Animación de contadores
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        counter.textContent = target;
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                }, 16);
            });
        }

       

        //NOSOTROS
        // Intersection Observer para animaciones de entrada
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Inicializar observadores
        document.addEventListener('DOMContentLoaded', () => {
            const miembros = document.querySelectorAll('.miembro');
            miembros.forEach(miembro => {
                observer.observe(miembro);
            });

            // Efecto parallax suave en las imágenes
            const imagenes = document.querySelectorAll('.miembro-imagen');
            imagenes.forEach(imagen => {
                imagen.addEventListener('mouseenter', () => {
                    imagen.style.transform = 'scale(1.02)';
                });
                
                imagen.addEventListener('mouseleave', () => {
                    imagen.style.transform = 'scale(1)';
                });
            });

            // Efecto de typing para nombres (opcional)
            const nombres = document.querySelectorAll('.miembro-nombre');
            nombres.forEach((nombre, index) => {
                nombre.style.opacity = '0';
                setTimeout(() => {
                    nombre.style.opacity = '1';
                    nombre.style.animation = 'fadeInUp 0.8s ease forwards';
                }, index * 200);
            });

            // Animación de skills tags
            const skillTags = document.querySelectorAll('.skill-tag');
            skillTags.forEach((tag, index) => {
                tag.addEventListener('mouseenter', () => {
                    tag.style.transform = 'translateY(-2px) scale(1.05)';
                });
                
                tag.addEventListener('mouseleave', () => {
                    tag.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Smooth scroll para enlaces sociales (si es necesario)
            const socialLinks = document.querySelectorAll('.social-link');
            socialLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    // Aquí puedes agregar lógica de navegación
                    console.log('Navegando a red social...');
                });
            });
        });

        // Animación adicional de fadeInUp
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);

        // Efecto de paralaje suave en scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const decoraciones = document.querySelectorAll('.decoracion');
            
            decoraciones.forEach((dec, index) => {
                const speed = 0.5 + (index * 0.1);
                dec.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

  </script>

</body>
</html>
