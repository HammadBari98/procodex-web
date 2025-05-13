<nav class="navbar">
  <div class="navbar-container">
    <a href="#" class="logo">ProCodeX</a>
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    <ul class="nav-menu" id="nav-menu">
      <li class="nav-item">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
        <ul class="dropdown-menu">
          <li><a href="#">Immersive Experiences</a></li>
          <li><a href="#">Interactive Design</a></li>
          <li><a href="#">Motion Graphics</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link">Products <i class="fas fa-chevron-down"></i></a>
        <ul class="dropdown-menu">
          <li><a href="#">ProCodeX Studio</a></li>
          <li><a href="#">ProCodeX AR</a></li>
          <li><a href="#">ProCodeX VR</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">About</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<style>
  /* Navbar Styles */
  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    z-index: 1000;
    padding: 20px 0;
  }

  .navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    position: relative;
  }

  .logo {
    font-size: 1.5rem;
    color: white;
    text-decoration: none;
  }

  .nav-menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .nav-item {
    position: relative;
    margin-right: 20px;
  }

  .nav-link {
    color: white;
    text-decoration: none;
    font-size: 1rem;
    padding: 8px 12px;
    display: block;
  }

  /* Dropdown Menu */
  .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background: rgba(29, 29, 31, 0.98);
    backdrop-filter: blur(10px);
    border-radius: 8px;
    min-width: 180px;
    z-index: 1001;
  }

  .dropdown-menu li {
    padding: 10px 15px;
  }

  .dropdown-menu li a {
    color: white;
    text-decoration: none;
    display: block;
  }

  .nav-item:hover .dropdown-menu {
    display: block;
  }

  /* Toggle button for mobile */
  .menu-toggle {
    display: none;
    cursor: pointer;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 20px;
  }

  .bar {
    width: 30px;
    height: 3px;
    background-color: white;
  }

 /* Mobile Styles */
  @media (max-width: 768px) {
    .nav-menu {
      display: none;
      flex-direction: column;
      position: absolute;
      top: 60px;
      right: 20px;
      background: rgba(29, 29, 31, 0.98);
      backdrop-filter: blur(10px);
      padding: 20px;
      border-radius: 10px;
      width: 100%; /* Make it span the width with some margin */
      align-items: flex-start; /* Align items to the left */
    }

    .nav-item {
      margin: 10px 0;
      width: 100%; /* Make each nav item full width */
    }

    .nav-link {
      width: 100%; /* Make the link full width */
      text-align: center;
    }

    .menu-toggle {
      display: flex;
    }

    .nav-menu.active {
      display: flex;
    }

    .nav-item.dropdown {
      position: relative; /* Needed for absolute positioning of mobile dropdown */
    }

    .dropdown-menu {
      position: static; /* Revert to static for proper flow in mobile */
      background: transparent;
      backdrop-filter: none;
      border-radius: 0;
      padding-left: 15px;
      width: 100%; /* Make dropdown full width */
      box-shadow: none; /* Remove potential shadows */
    }

    .nav-item.dropdown .dropdown-menu {
      display: none;
      position: absolute; /* Position the dropdown relative to the .nav-item.dropdown */
      top: 100%;
      left: 0;
      background: rgba(29, 29, 31, 0.95); /* Slightly different background */
      backdrop-filter: blur(8px);
      border-radius: 8px;
      padding: 10px 0;
      width: 100%; /* Make it full width */
      z-index: 1002; /* Ensure it's above other elements */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
    }

    .nav-item.dropdown.active .dropdown-menu {
      display: block;
    }

    .dropdown-menu li {
      padding: 10px 15px;
    }

    .dropdown-menu li a {
      text-align:center;
      color: white;
      text-decoration: none;
      display: block;
    }
  }
</style>

<script>
  const mobileMenu = document.getElementById('mobile-menu');
  const navMenu = document.getElementById('nav-menu');
  const dropdowns = document.querySelectorAll('.nav-item.dropdown');

  mobileMenu.addEventListener('click', () => {
    navMenu.classList.toggle('active');
  });

  // Toggle dropdowns on mobile
  dropdowns.forEach(item => {
    item.addEventListener('click', function (e) {
      // Prevent the link from triggering navigation
      e.preventDefault();

      // Close other dropdowns
      dropdowns.forEach(d => {
        if (d !== item) d.classList.remove('active');
      });

      // Toggle current dropdown
      item.classList.toggle('active');
    });
  });
</script>
