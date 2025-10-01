<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuanz</title>
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

  <main class="main-content bg-index">
    <h1 class="hero-title">
      Tu negocio<br>
      Impulsado por Datos<br>
      
    </h1>

    <p class="hero-subtitle">
      Somos un equipo dinámico impulsado por la pasión y la creatividad, comprometido con transformar tus datos en información.
    </p>

    <div class="cta-buttons">
      <a href="contactanos.php" class="btn-primary">Contactanos!</a>
    </div>
    <br>
    <div class="separar"></div>
  </main>

  <!--SERVICIOS-->

  
    <div class="section-header">
      <br>
            <h2 class="section-title">Datos con Objetivos</h2>
            <p class="section-subtitle"><strong>
                 Colaboramos con vos para desarrollar una estrategia de datos personalizada que se alinee con tus objetivos comerciales, asegurando que tus decisiones basadas en datos mejoren el rendimiento, impulsen el crecimiento y logren resultados medibles.
                <br>
                <br>
                Creemos que todas las empresas, sin importar su tamaño, tienen derecho a aprovechar el valor de sus datos y automatizar sus procesos
              </p></strong>
        </div>

  <section class="services-section">
  <div class="services-layout">
    
    <!-- Lado Izquierdo -->
    <div class="services-left">
      
      <div class="services-video">
        <source media="(min-width: )" srcset="">
        <img src="img/ServiciosData.jpg" alt="">
      </div>
    </div>

    <!-- Lado Derecho -->
    <div class="services-right">
      <div class="accordion-container">

       <div class="accordion-item" onclick="toggleAccordion(this)">
          <div class="accordion-header">
            <div>
              <h3><img src="img/svg/Artificial-Inteligence.svg" width="40"  height="40" alt="Artificial Inteligence"> Inteligencia Artificial Aplicada</h3>
            </div>
            <span>➤</span>
          </div>
          <div class="accordion-content">
             <p><strong>Descripción:</strong> 
            Implementamos soluciones de IA que automatizan tareas, mejoran la experiencia del cliente y optimizan procesos internos. Desde agentes conversacionales hasta modelos predictivos, adaptamos la tecnología a las necesidades reales de cada organización.</p>
            <ul>
              <li>◉ Desarrollo de agentes de IA para atención al cliente y ventas</li>
              <li>◉ Automatización de procesos operativos y administrativos</li>
              <li>◉ Modelos predictivos para planificación y toma de decisiones</li>
              <li>◉ Integración con canales como WhatsApp, CRM y plataformas web</li>
              <li>◉ Escalabilidad y personalización para distintos sectores empresariales</li>
            </ul>
            <a href="contactanos.php" class="btn-consulta">Solicitar Consulta</a>
          </div>
        </div>
        
        <div class="accordion-item" onclick="toggleAccordion(this)">
          <div class="accordion-header">
            <div>
              <h3><img src="img/svg/Data-Engineering.svg" width="40"  height="40" alt="Data Engineering"> Data Engineering</h3>
            </div>
            <span>➤</span>
          </div>
          <div class="accordion-content">
            <p><strong>Descripción:</strong> 
          Diseñamos y construimos la infraestructura que permite a las organizaciones integrar, procesar y gestionar grandes volúmenes de datos. Creamos pipelines eficientes y escalables que garantizan información confiable y accesible para la toma de decisiones.</p>
            <ul>
              <li>◉ Integración de datos desde múltiples fuentes</li>
              <li>◉ Construcción de pipelines ETL/ELT escalables</li>
              <li>◉ Implementación en entornos cloud (BigQuery, Snowflake, AWS, Azure, GCP)</li>
              <li>◉ Normalización y limpieza de datos para asegurar calidad</li>
              <li>◉ Administración y optimización de bases de datos</li>
            </ul>
            <a href="contactanos.php" class="btn-consulta">Solicitar Consulta</a>
          </div>
        </div>

        <div class="accordion-item" onclick="toggleAccordion(this)">
          <div class="accordion-header">
            <div>
                <h3><img src="img/svg/Data-Science.svg" width="40"  height="40" alt="Data Science"> Data Science</h3>
            </div>
            <span>➤</span>
          </div>
          <div class="accordion-content">
            <p><strong>Descripción:</strong> 
          Desarrollamos modelos analíticos y predictivos que permiten transformar los datos en conocimiento estratégico. Combinamos machine learning, estadística avanzada y programación para resolver problemas complejos y potenciar la toma de decisiones.</p>
            <ul>
              <li>◉ Modelado predictivo y machine learning</li>
              <li>◉ Análisis avanzado para detección de patrones ocultos</li>
              <li>◉ Segmentación y clasificación de clientes o productos</li>
              <li>◉ Proyecciones y simulaciones de escenarios futuros</li>
              <li>◉ Automatización de procesos basados en datos</li>
            </ul>
            <a href="contactanos.php" class="btn-consulta">Solicitar Consulta</a>
            </div>
        </div>

        <div class="accordion-item" onclick="toggleAccordion(this)">
          <div class="accordion-header">
            <div>
              <h3><img src="img/svg/Data-Visualization.svg" width="40"  height="40" alt="Data Visualization"> Visualizacion de la Información</h3>
            </div>
            <span>➤</span>
          </div>
          <div class="accordion-content">
             <p><strong>Descripción:</strong> 
             Transformamos datos complejos en información clara y comprensible mediante dashboards interactivos y reportes dinámicos. Ayudamos a las organizaciones a interpretar sus métricas clave y a comunicar insights de forma efectiva.</p>
            <ul>
              <li>◉ Diseño de tableros interactivos en Power BI, Looker Studio y Tableau</li>
              <li>◉ Definición y visualización de KPIs estratégicos</li>
              <li>◉ Reportes dinámicos para diferentes áreas del negocio</li>
              <li>◉ Comunicación clara de insights para acelerar decisiones</li>
              <li>◉ Monitoreo en tiempo real de desempeño y resultados</li>
            </ul>
            <a href="contactanos.php" class="btn-consulta">Solicitar Consulta</a>
          </div>
        </div>

         <div class="accordion-item" onclick="toggleAccordion(this)">
          <div class="accordion-header">
            <div>
              <h3><img src="img/svg/Automation.svg" width="40"  height="40" alt="Automation"> Análisis de Datos</h3>
            </div>
            <span>➤</span>
          </div>
          <div class="accordion-content">
             <p><strong>Descripción:</strong> 
             Convertimos la información en decisiones estratégicas a través de estadística avanzada, machine learning y herramientas de business intelligence. Ayudamos a las organizaciones a entender su presente y anticipar su futuro.</p>
            <ul>
              <li>◉ Medición y monitoreo de indicadores clave</li>
              <li>◉ Identificación de patrones y segmentos relevantes</li>
              <li>◉ Optimización de estrategias comerciales y operativas</li>
              <li>◉ Pronósticos para una mejor planificación del negocio</li>
              <li>◉ Evaluación de escenarios para apoyar decisiones estratégicas</li>
            </ul>
            <a href="contactanos.php" class="btn-consulta">Solicitar Consulta</a>
          </div>
        </div>

        <div class="accordion-item" onclick="toggleAccordion(this)">
          <div class="accordion-header">
            <div>
              <h3><img src="img/svg/Architecture.svg" width="40"  height="40" alt="Automation"> Arquitectura de Datos</h3>
            </div>
            <span>➤</span>
          </div>
          <div class="accordion-content">
             <p><strong>Descripción:</strong> 
             Diseñamos arquitecturas de datos modernas y escalables que permiten organizar, almacenar y gobernar la información de manera eficiente. Nuestro enfoque garantiza la disponibilidad, calidad y seguridad de los datos para soportar analítica avanzada y toma de decisiones estratégicas.</p>
            <ul>
              <li>◉ Diseño de data warehouses y data lakes en la nube</li>
              <li>◉ Integración de datos entre sistemas y plataformas</li>
              <li>◉ Gobierno, seguridad y calidad de la información</li>
              <li>◉ Optimización del flujo y almacenamiento de datos</li>
              <li>◉ Implementación en entornos cloud (BigQuery, Snowflake, AWS, Azure, GCP)</li>
            </ul>
            <a href="contactanos.php" class="btn-consulta">Solicitar Consulta</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  </section>
</section>


<!--CAROUSEL-->
<section class="tech-carousel">
  <div class="carousel-track" id="carousel-track">
    <img src="img/svg/tools/Python.svg" alt="Python" />
    <img src="img/svg/tools/R.svg" alt="R" />
    <img src="img/svg/tools/Databricks.svg" alt="Databricks" />
    <img src="img/svg/tools/Tableau.svg" alt="Tableau" />
    <img src="img/svg/tools/Power BI.svg" alt="Power BI" />
    <img src="img/svg/tools/Looker.svg" alt="Looker" />
    <img src="img/svg/tools/OpenAI.svg" alt="OpenAI" />
    <img src="img/svg/tools/Claude.svg" alt="Claude" />
    <img src="img/svg/tools/Gemini.svg" alt="Gemini" />
    <img src="img/svg/tools/AWSRedshift.svg" alt="Redshift" />
    <img src="img/svg/tools/Snowflake.svg" alt="Snowflake" />
    <img src="img/svg/tools/BigQuery.svg" alt="BigQuery" />
    <img src="img/svg/tools/AWS.svg" alt="AWS" />
    <img src="img/svg/tools/Cloude.svg" alt="Cloude Platform" />
    <!--REPETIR-->
    <img src="img/svg/tools/Python.svg" alt="Python" />
    <img src="img/svg/tools/R.svg" alt="R" />
    <img src="img/svg/tools/Databricks.svg" alt="Databricks" />
    <img src="img/svg/tools/Tableau.svg" alt="Tableau" />
    <img src="img/svg/tools/Power BI.svg" alt="Power BI" />
    <img src="img/svg/tools/Looker.svg" alt="Looker" />
    <img src="img/svg/tools/OpenAI.svg" alt="OpenAI" />
    <img src="img/svg/tools/Claude.svg" alt="Claude" />
    <img src="img/svg/tools/Gemini.svg" alt="Gemini" />
    <img src="img/svg/tools/AWSRedshift.svg" alt="Redshift" />
    <img src="img/svg/tools/Snowflake.svg" alt="Snowflake" />
    <img src="img/svg/tools/BigQuery.svg" alt="BigQuery" />
    <img src="img/svg/tools/AWS.svg" alt="AWS" />
    <img src="img/svg/tools/Cloude.svg" alt="Cloude Platform" />
    <!--REPETIR-->
    <img src="img/svg/tools/Python.svg" alt="Python" />
    <img src="img/svg/tools/R.svg" alt="R" />
    <img src="img/svg/tools/Databricks.svg" alt="Databricks" />
    <img src="img/svg/tools/Tableau.svg" alt="Tableau" />
    <img src="img/svg/tools/Power BI.svg" alt="Power BI" />
    <img src="img/svg/tools/Looker.svg" alt="Looker" />
    <img src="img/svg/tools/OpenAI.svg" alt="OpenAI" />
    <img src="img/svg/tools/Claude.svg" alt="Claude" />
    <img src="img/svg/tools/Gemini.svg" alt="Gemini" />
    <img src="img/svg/tools/AWSRedshift.svg" alt="Redshift" />
    <img src="img/svg/tools/Snowflake.svg" alt="Snowflake" />
    <img src="img/svg/tools/BigQuery.svg" alt="BigQuery" />
    <img src="img/svg/tools/AWS.svg" alt="AWS" />
    <img src="img/svg/tools/Cloude.svg" alt="Cloude Platform" />
  </div>
</section>

<!--CASOS DE EXITO-->

   <section class="casos-exito">
        <div class="section-header">
            <h2 class="section-title">Casos de Éxito</h2>
            <p class="section-subtitle">
                Descubre cómo hemos transformado datos en decisiones estratégicas 
                para empresas líderes en diferentes industrias.
            </p>
        </div>

        <!--<div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number" data-target="150">0</span>
                <div class="stat-label">Proyectos Completados</div>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="98">0</span>
                <div class="stat-label">% Satisfacción Cliente</div>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="45">0</span>
                <div class="stat-label">% Aumento ROI Promedio</div>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="24">0</span>
                <div class="stat-label">Países Atendidos</div>
            </div>
        </div>-->

        <div class="casos-grid">
            <div class="caso-card">
                <div class="caso-logo"><img src="img/CasosDeExito/SI-Municipio.jpg" width="60"  height="60" alt=""></div>
                <h3 class="caso-title">Monitoreo De Indicadores Sociales</h3>
                <div class="caso-industry">Municipalidad de San Isidro</div>
                <p class="caso-description">
                    Centralizacion de datos, integración y dashboard.
                    <br>
                    <br>
                </p>
                <div class="caso-metrics">
                    <div class="metric">
                         <div class="cta-buttons">
                          <a href="nosotros.php#casos-exito" class="btn-primary">Ver Más</a>
                         </div>
                    </div>
                </div>
            </div>

            <div class="caso-card">
                <div class="caso-logo"><img src="img/CasosDeExito/Polivoda.jpeg" width="60"  height="60" alt=""></div>
                <h3 class="caso-title">Almacenamiento De Datos Para El Análisis</h3>
                <div class="caso-industry">Alejpa S.A</div>
                <p class="caso-description">
                    Unificacion de la entrada de datos de producción y facturación.
                    <br>
                    <br>
                </p>
                  <div class="caso-metrics">
                    <div class="metric">
                        <div class="cta-buttons">
                          <a href="nosotros.php#casos-exito" class="btn-primary">Ver Más</a>
                         </div>
                    </div>
                </div>
            </div>

            <div class="caso-card">
                <div class="caso-logo"><img src="img/CasosDeExito/VL-Municipio.jpg" width="60"  height="60" alt=""></div>
                <h3 class="caso-title">Análisis Y Panel De Control De Producción</h3>
                <div class="caso-industry">Municipalidad de Vicente Lopez</div>
                <p class="caso-description">
                    Digitalizacion del seguimiento de métricas de desarrollo infantil.
                    <br>
                    <br>
                </p>
                <div class="caso-metrics">
                    <div class="metric">
                        <div class="cta-buttons">
                          <a href="nosotros.php#casos-exito" class="btn-primary">Ver Más</a>
                         </div>
                    </div>
                </div>
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
                <textarea name="mensaje" type="text" rows="5" placeholder="Tu mensaje" required></textarea>
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
        <a href="acalaremos.php">Preguntas Frecuentes</a>
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

        // Intersection Observer para activar animaciones
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    if (entry.target.classList.contains('stats-grid')) {
                        setTimeout(() => {
                            animateCounters();
                        }, 500);
                    }
                }
            });
        }, observerOptions);

        // Observar elementos para animar
        document.addEventListener('DOMContentLoaded', () => {
            const statsGrid = document.querySelector('.stats-grid');
            const cards = document.querySelectorAll('.caso-card');
            
            observer.observe(statsGrid);
            cards.forEach(card => observer.observe(card));

            // Efecto parallax suave en las tarjetas
            cards.forEach(card => {
                card.addEventListener('mouseenter', (e) => {
                    e.target.style.transform = 'translateY(-5px) rotateX(5deg)';
                });
                
                card.addEventListener('mouseleave', (e) => {
                    e.target.style.transform = 'translateY(0) rotateX(0)';
                });
            });

            // Smooth scroll para el botón CTA
            document.querySelector('.cta-button').addEventListener('click', (e) => {
                e.preventDefault();
                // Aquí puedes agregar lógica para scroll suave o redirección
                console.log('Navegando a contacto...');
            });
        });

        // Efecto de escritura para títulos
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            
            function typing() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, speed);
                }
            }
            typing();
        }

        // Lazy loading para optimizar rendimiento
        if ('IntersectionObserver' in window) {
            const lazyImages = document.querySelectorAll('[data-src]');
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            lazyImages.forEach(img => imageObserver.observe(img));
        }



  </script>

</body>
</html>