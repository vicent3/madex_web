<!-- <head> -->
  
  <style>
    .contact-image {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto;
    }
    .contact-section {
      background-color: #f8f9fa;
      padding: 50px 0;
    }
    .icon-circle {
      background-color: #28a745;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }
    .icon-circle i {
      color: white;
      font-size: 30px;
    }
  </style>
<!-- </head>
<body> -->

  <!-- Contact Section -->
  <div class="container contact-section text-center">
    <!-- Image and Contact Title -->
    <img 
    src="<?php echo base_url(); ?>/img/logop.png" 
    alt="Contacto" class="contact-image mb-4">
    <h3>CONTACTOS</h3>
    <p>Utilice nuestro formulario de contacto para todas las solicitudes de información o contáctenos directamente utilizando la información de contacto a continuación.</p>
    <p class="text-muted">Imagen de Freepik</p>

    <!-- Contact Info -->
    <div class="row mt-5">
      <!-- Office Location -->
      <div class="col-md-6">
        <div class="icon-circle">
          <i class="bi bi-geo-alt-fill"></i>
        </div>
        <h5>Ubicación de nuestra oficina</h5>
        <p>The Interior Design Studio Company<br>
        The Courtyard, Al Quoz 1, Colorado, EE. UU.</p>
      </div>
      <!-- Phone Number -->
      <div class="col-md-6">
        <div class="icon-circle">
          <i class="bi bi-telephone-fill"></i>
        </div>
        <h5>Teléfono (Fijo)</h5>
        <p>+ 912 3 567 8987<br>+ 912 5 252 3336</p>
      </div>
    </div>
  </div>

  
</body>
</html>
