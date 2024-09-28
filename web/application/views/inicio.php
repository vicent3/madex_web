<style>
    .hero {
      background: url('<?php echo base_url(); ?>/img/banner.JPG') no-repeat center center;
      background-size: cover;
      color: white;
      text-align: center;
      height: 60vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .hero h1 {
      font-size: 3rem;
    }

    .hero p {
      font-size: 1.5rem;
    }

    .feature-icon {
      font-size: 50px;
      color: #28a745;
    }
  </style>

<!-- Hero Section -->
<div class="hero">
    <h1>Bienvenido a Nuestro Sitio</h1>
    <p>Ofrecemos los mejores servicios para tu negocio</p>
    <a href="#servicios" class="btn btn-light btn-lg">Ver más</a>
  </div>

  <!-- Features Section -->
  <div class="container my-5">
    <h2 class="text-center mb-5">Nuestros Servicios</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="feature-icon">
          <i class="bi bi-gear"></i>
        </div>
        <h5 class="mt-3">Desarrollo Web</h5>
        <p>Creación de sitios web modernos y responsivos adaptados a tus necesidades.</p>
      </div>
      <div class="col-md-4">
        <div class="feature-icon">
          <i class="bi bi-lightbulb"></i>
        </div>
        <h5 class="mt-3">Consultoría</h5>
        <p>Te ayudamos a mejorar tus procesos con las mejores estrategias tecnológicas.</p>
      </div>
      <div class="col-md-4">
        <div class="feature-icon">
          <i class="bi bi-phone"></i>
        </div>
        <h5 class="mt-3">Soporte Técnico</h5>
        <p>Brindamos soporte técnico para resolver cualquier problema que tengas.</p>
      </div>
    </div>
  </div>

</div>


