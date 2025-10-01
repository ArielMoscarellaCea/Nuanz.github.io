<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuanz contactanos</title>
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

  <main class="main-content bg-contactanos">
    <h1 class="hero-title">
      Conecta con <br>
        Nosotros
    </h1>

    <p class="hero-subtitle">
       Estamos aquí para ayudarte a transformar tus datos en insights valiosos. Contáctanos y descubre cómo podemos impulsar tu éxito.
    </p>


<div class="container">
       
        <section class="contact-grid">
            <div class="contact-card">
            <div class="contact-icon">📞</div>
            <h3>Teléfono</h3>
            <p class="contact-info">Llamada directa</p>
            <div class="contact-links">
                <a href="tel:+5492944231849" class="contact-link">🇦🇷 +54 9 2944 23 1849</a> 
                <a href="tel:+34664791925" class="contact-link">🇪🇸 +34 664 79 19 25</a>
            </div>
        </div>

            <div class="contact-card">
                <div class="contact-icon">✉️</div>
                <h3>Email</h3>
                <p class="contact-info">Escríbenos</p>
                <br>
                <a href="mailto:contacto@nuanz.com" class="contact-link">contactnuanz@gmail.com</a>
            </div>

            <div class="contact-card">
                <div class="contact-icon"><img src="img/whatsapp.png" alt="" width="50"  height="50"></div>
                <h3>WhatsApp</h3>
                <p class="contact-info">Chat directo</p>
                <br>
                <a href="https://wa.me/34664791925" class="contact-link" target="_blank">Enviar mensaje</a>
            </div>
        </section>
        <br>
</div>    
</main>
        <section class="form-section" id="contacto">
            <h2 class="form-title">¿Tienes un proyecto en mente?</h2>
            <p class="form-subtitle">Cuéntanos sobre tu desafío y encontremos la solución perfecta juntos</p>
            
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
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());
            
            // Simple validation
            if (!data.nombre || !data.email || !data.mensaje) {
                alert('Por favor, completa todos los campos requeridos.');
                return;
            }
            
            // Simulate form submission
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            
            submitBtn.textContent = 'Enviando...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('¡Mensaje enviado correctamente! Te contactaremos pronto.');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Add some interactive effects
        document.querySelectorAll('.contact-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>

</body>
</html>