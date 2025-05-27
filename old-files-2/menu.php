<style>
  /* Header */
  .header {
    padding: 1rem 2rem;
    background: transparent;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    width: 100%;
    z-index: 100;
    mix-blend-mode: difference;
    transition: opacity 0.3s ease, visibility 0.3s ease; /* Add transition for smooth appearance/disappearance */
  }

  .header.menu-active .logo-text,
  .header.menu-active .menu-toggle {
    opacity: 0;
    visibility: hidden;
  }

  .logo-text {
    font-size: 1.5rem;
    font-weight: bold;
    z-index: 101;
    color: white;
  }

  .menu-toggle {
    cursor: pointer;
    display: flex;
    flex-direction: column;
    gap: 5px;
    z-index: 101;
    transition: transform 0.4s ease;
  }

  .menu-toggle .bar {
    width: 25px;
    height: 2px;
    background: white;
    transition: all 0.4s cubic-bezier(0.65, 0, 0.35, 1);
  }

  .menu-toggle.active .bar:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
  }

  .menu-toggle.active .bar:nth-child(2) {
    opacity: 0;
    transform: translateX(-20px);
  }

  .menu-toggle.active .bar:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
  }

  /* Fullscreen Menu */
  .fullscreen-menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: white;
    color: white;
    z-index: 99;
    display: flex;
    flex-direction: column;
    padding: 2rem;
    clip-path: circle(0% at 100% 0);
    transition: clip-path 1.2s cubic-bezier(0.65, 0, 0.35, 1);
    pointer-events: none;
  }

  .fullscreen-menu.active {
    clip-path: circle(150% at 100% 0);
    pointer-events: all;
  }

  .menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.5rem;
    font-weight: bold;
    padding-top: 1rem;
  }

  .close-btn {
    font-size: 2rem;
    cursor: pointer;
    opacity: 0;
    transform: translateY(-20px);
    transition: all 0.6s cubic-bezier(0.65, 0, 0.35, 1) 0.4s;
    color: black;
  }

  .fullscreen-menu.active .close-btn {
    opacity: 1;
    transform: translateY(0);
  }

  .menu-content {
    flex: 1;
    display: flex;
    justify-content: space-between;
    margin-top: 3rem;
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s cubic-bezier(0.65, 0, 0.35, 1) 0.3s;
  }

  .fullscreen-menu.active .menu-content {
    opacity: 1;
    transform: translateY(0);
  }

  .menu-left {
    width: 45%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding-bottom: 3rem;
  }

  .menu-right {
    width: 45%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .bottom-contact {
    font-size: 1rem;
    color: black;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s ease 0.8s;
    line-height: 1.6;
  }

  .fullscreen-menu.active .bottom-contact {
    opacity: 1;
    transform: translateY(0);
  }

  .contact-title {
    font-weight: bold;
    margin-bottom: 1rem;
    font-size: 1.1rem;
  }

  .nav-links {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    font-size: 4vw;
    font-weight: 700;
    line-height: 1.2;
  }

  .nav-links a {
    color: black;
    text-decoration: none;
    position: relative;
    display: inline-block;
    overflow: hidden;
  }

  .nav-links a span {
    display: inline-block;
    position: relative;
    transition: transform 0.4s cubic-bezier(0.65, 0, 0.35, 1);
  }

  .nav-links a:hover span {
    transform: translateX(15px);
  }

  .nav-links a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: black;
    transition: width 0.4s cubic-bezier(0.65, 0, 0.35, 1);
  }

  .nav-links a:hover::after {
    width: 100%;
  }

  .nav-links li {
    opacity: 0;
    transform: translateX(50px);
    transition: all 0.6s cubic-bezier(0.65, 0, 0.35, 1);
  }

  .fullscreen-menu.active .nav-links li {
    opacity: 1;
    transform: translateX(0);
  }

  .nav-links li:nth-child(1) { transition-delay: 0.4s; }
  .nav-links li:nth-child(2) { transition-delay: 0.5s; }
  .nav-links li:nth-child(3) { transition-delay: 0.6s; }
  .nav-links li:nth-child(4) { transition-delay: 0.7s; }
  .nav-links li:nth-child(5) { transition-delay: 0.8s; }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .menu-content {
      flex-direction: column;
    }

    .menu-left, .menu-right {
      width: 100%;
    }

    .menu-left {
      order: 2;
      padding-bottom: 1rem;
      justify-content: flex-start;
      margin-top: 2rem;
    }

    .menu-right {
      order: 1;
    }

    .nav-links {
      font-size: 10vw;
      margin-bottom: 2rem;
    }

    .bottom-contact {
      font-size: 1rem;
    }
  }
</style>

<header class="header">
  <div class="logo-text">ProCodeX</div>
  <div class="menu-toggle" id="open-menu">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
</header>

<div class="fullscreen-menu" id="fullscreen-menu">
  <div class="menu-header">
    <div class="logo-text">ProCodeX</div>
    <div class="close-btn" id="close-menu">&times;</div>
  </div>

  <div class="menu-content">
    <div class="menu-right">
      <ul class="nav-links">
        <li><a href="#"><span>ABOUT US</span></a></li>
        <li><a href="#"><span>SERVICES</span></a></li>
        <li><a href="#"><span>OUR WORK</span></a></li>
        <li><a href="#"><span>INSIGHTS</span></a></li>
        <li><a href="#"><span>GET IN TOUCH</span></a></li>
      </ul>
    </div>

    <div class="menu-left">
      <div class="bottom-contact">
        <p class="contact-title">Get in Touch</p>
        <p>Email: info@procodex.com</p>
        <p>Phone: +1 234 567 890</p>
        <p>Address: 123 Tech Street, NY</p>
      </div>
    </div>
  </div>
</div>

<script>
  const openMenuBtn = document.getElementById('open-menu');
  const closeMenuBtn = document.getElementById('close-menu');
  const fullMenu = document.getElementById('fullscreen-menu');
  const header = document.querySelector('.header'); // Select the header
  const body = document.body;

  openMenuBtn.addEventListener('click', () => {
    openMenuBtn.classList.add('active');
    fullMenu.classList.add('active');
    header.classList.add('menu-active'); // Add a class to the header
    body.style.overflow = 'hidden';
  });

  closeMenuBtn.addEventListener('click', () => {
    openMenuBtn.classList.remove('active');
    fullMenu.classList.remove('active');
    header.classList.remove('menu-active'); // Remove the class from the header
    body.style.overflow = 'auto';
  });

  // Close menu when clicking on a link
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
      openMenuBtn.classList.remove('active');
      fullMenu.classList.remove('active');
      header.classList.remove('menu-active'); // Remove the class here too
      body.style.overflow = 'auto';
    });
  });
</script>