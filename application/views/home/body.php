<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo base_url('assets/frontend/'); ?>img/logo.png" alt="Logo Sinergi OM 70">
        <!-- <span>Bufter</span> -->
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="<?php echo base_url('login'); ?>">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Monitoring System<br>Bunker Fresh Water</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">DERMAGA TUKS PERTAMINA</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="<?php echo base_url('login/register'); ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Register</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo base_url('assets/frontend/'); ?>/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  
  <footer id="footer" class="footer">   
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Oil Movement Area 70</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="http://mitrasama.com/" target="_blank">Mitrasama</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>