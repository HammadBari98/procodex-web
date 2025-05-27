<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ProCodeX</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/custom.css">
  <script src="https://cdn.tailwindcss.com"></script>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Tailwind CSS (Optional, for styling) -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>
<body>

  <?php include 'header.php'; ?>
  <section id="background">
    <div id="blob"></div>
    <div id="blur"></div>
  </section>

  <div class="section">
    <div class="content">
      <h1>We build future Technology</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Discover how we craft digital excellence.</p>

      <div class="gs">
         <button href="#get-started" class="transparent-btn">Get Started</button>
      </div>
    </div>
    <div class="animation-area">
      <div class="circle"></div>
      <div class="triangle"></div> 
    </div>
  </div>

<section class="py-16 text-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-white">Our Services</h2>
      <p class="text-gray-300 mt-2 max-w-xl mx-auto">Explore our range of solutions crafted to elevate your business through future technology.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Service Card 1 -->
      <div class="rounded-2xl p-8 backdrop-blur-sm bg-white/10 border border-white/10 shadow-md hover:shadow-xl transition-all duration-300">
        <div class="text-blue-400 text-4xl mb-4">
          <i class="fas fa-code"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-white">Web Development</h3>
        <p class="text-gray-300">Responsive, scalable, and modern websites tailored for your business goals.</p>
      </div>

      <!-- Service Card 2 -->
      <div class="rounded-2xl p-8 backdrop-blur-sm bg-white/10 border border-white/10 shadow-md hover:shadow-xl transition-all duration-300">
        <div class="text-purple-400 text-4xl mb-4">
          <i class="fas fa-paint-brush"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-white">UI/UX Design</h3>
        <p class="text-gray-300">Intuitive and aesthetic user interfaces that enhance user experiences.</p>
      </div>

      <!-- Service Card 3 -->
      <div class="rounded-2xl p-8 backdrop-blur-sm bg-white/10 border border-white/10 shadow-md hover:shadow-xl transition-all duration-300">
        <div class="text-green-400 text-4xl mb-4">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-white">Mobile Apps</h3>
        <p class="text-gray-300">Cross-platform apps with seamless performance and native feel.</p>
      </div>

      <!-- Service Card 4 -->
      <div class="rounded-2xl p-8 backdrop-blur-sm bg-white/10 border border-white/10 shadow-md hover:shadow-xl transition-all duration-300">
        <div class="text-yellow-400 text-4xl mb-4">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-white">Data Analytics</h3>
        <p class="text-gray-300">Turn your data into actionable insights with our analytics solutions.</p>
      </div>

      <!-- Service Card 5 -->
      <div class="rounded-2xl p-8 backdrop-blur-sm bg-white/10 border border-white/10 shadow-md hover:shadow-xl transition-all duration-300">
        <div class="text-pink-400 text-4xl mb-4">
          <i class="fas fa-bullhorn"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-white">Digital Marketing</h3>
        <p class="text-gray-300">Boost your brand visibility with SEO, ads, and social media strategies.</p>
      </div>

      <!-- Service Card 6 -->
      <div class="rounded-2xl p-8 backdrop-blur-sm bg-white/10 border border-white/10 shadow-md hover:shadow-xl transition-all duration-300">
        <div class="text-red-400 text-4xl mb-4">
          <i class="fas fa-cloud"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-white">Cloud Solutions</h3>
        <p class="text-gray-300">Secure, scalable, and cost-effective cloud services for your business.</p>
      </div>
    </div>
  </div>
</section>

<section class="relative h-[70vh] text-white flex items-center px-10 overflow-hidden">

  <!-- Text Content -->
  <div class="z-10 w-1/2">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">ProCodeX Powers Innovation</h2>
    <p class="text-lg text-gray-300">Explore creative digital solutions with modern design and interactivity, designed for businesses that lead.</p>
  </div>

  <!-- Animated Rectangle -->
  <div class="giant-rectangle absolute top-1/2 left-0 w-[600px] h-[400px] -translate-y-1/2 bg-gradient-to-r from-purple-600 to-blue-600 rounded-3xl opacity-80"></div>
</section>

<section class="relative h-[70vh] text-white flex items-center justify-end px-10 overflow-hidden">

  <!-- Text Content on Right -->
  <div class="z-10 w-1/2 text-right">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">Tailored For Tomorrow</h2>
    <p class="text-lg text-gray-300">We create sleek, scalable digital experiences that move with innovation and purpose.</p>
  </div>

  <!-- Animated Rectangle from Right -->
  <div class="giant-rectangle-rtl absolute top-1/2 right-0 w-[600px] h-[400px] -translate-y-1/2 bg-gradient-to-l from-pink-600 to-yellow-500 rounded-3xl opacity-80"></div>
</section>




<section class="relative py-20 overflow-hidden" id="project-slider-section">
  <div class="swiper-container perspective">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide" style="background-image: url('https://careercollegeindia.com/blog/wp-content/uploads/2024/09/UI-UX-Designer-scaled.jpg');">
        <div class="overlay">UI/UX Design</div>
      </div>
      <!-- Slide 2 -->
      <div class="swiper-slide" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoQ4JQCNMfAk3-rvSOrdPglv2A2SORHC96Pw&s');">
        <div class="overlay">Web App Development</div>
      </div>
      <!-- Slide 3 -->
      <div class="swiper-slide" style="background-image: url('https://framerusercontent.com/images/BtSOiu1CJrIjCK2LCNTsFwBj0wg.jpeg');">
        <div class="overlay">E-commerce Platform</div>
      </div>
      <!-- Slide 4 -->
      <div class="swiper-slide" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThCnvAkYCrK-YbRJEUFnx0SBO9Pyb6WElVbg&s');">
        <div class="overlay">Mobile App</div>
      </div>
      <!-- Slide 5 -->
      <div class="swiper-slide" style="background-image: url('https://cdn.prod.website-files.com/620d42e86cb8ecb3f739e579/62509f9b2ac18d6ecc71e2dd_Oil%20and%20Gas.webp');">
        <div class="overlay">Data Analytics Dashboard</div>
      </div>
    </div>
  </div>
</section>

<style>
  .perspective {
    perspective: 1200px;
  }

  .swiper-container {
    transform: rotateZ(-10deg);
    overflow: visible;
  }

  .swiper-slide {
    position: relative;
    width: 400px;
    height: 300px;
    border-radius: 1.5rem;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease-in-out;
  }

  .swiper-slide:hover .overlay {
    opacity: 1;
    transform: translateY(0);
  }

  .overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 1rem;
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.3s ease-in-out;
  }
</style>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 2,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: true,
    },
    coverflowEffect: {
      rotate: 50,
      stretch: 100,
      depth: 300,
      modifier: 1,
      slideShadows: true,
    },
  });

  // Scroll-based control
  let lastScrollTop = window.scrollY;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        window.addEventListener('scroll', handleScroll);
      } else {
        window.removeEventListener('scroll', handleScroll);
      }
    });
  }, {
    threshold: 0.3
  });

  observer.observe(document.querySelector('#project-slider-section'));

  function handleScroll() {
    const currentScroll = window.scrollY;
    if (currentScroll > lastScrollTop) {
      swiper.slideNext();
    } else if (currentScroll < lastScrollTop) {
      swiper.slidePrev();
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  }
</script>




<section class="relative min-h-screen flex items-center justify-center text-white px-6">
  <!-- Background Glow -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-1/3 left-1/4 w-96 h-96 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-1/4 w-72 h-72rounded-full blur-3xl"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-4xl text-center backdrop-blur-md bg-white/10 border border-white/10 rounded-2xl p-10 shadow-xl">
    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
      Elevate Your Brand with <span class="text-blue-400">Digital Excellence</span>
    </h1>
    <p class="text-gray-300 text-lg mb-8">
      Webnex crafts digital solutions that fuel business growth — from custom websites to full-stack innovation.
    </p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="#services" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl transition-all duration-300">Explore Services</a>
      <a href="#contact" class="px-6 py-3 border border-white/20 hover:bg-white/10 text-white rounded-xl transition-all duration-300">Get in Touch</a>
    </div>
  </div>
</section>



<footer class="bg-gray-900 text-white py-10">
  <div class="container mx-auto px-6">
    <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-8">
      <!-- Column 1 -->
      <div>
        <h3 class="text-xl font-semibold mb-4">ProCodeX</h3>
        <p class="text-sm leading-6 text-gray-400">
          We build digital products that transform businesses. Let's craft something exceptional together.
        </p>
      </div>

      <!-- Column 2 -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Services</h4>
        <ul class="space-y-2 text-gray-400 text-sm">
          <li><a href="#" class="hover:text-white transition">Web Development</a></li>
          <li><a href="#" class="hover:text-white transition">UI/UX Design</a></li>
          <li><a href="#" class="hover:text-white transition">Mobile Apps</a></li>
          <li><a href="#" class="hover:text-white transition">Analytics Dashboards</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Company</h4>
        <ul class="space-y-2 text-gray-400 text-sm">
          <li><a href="#" class="hover:text-white transition">About Us</a></li>
          <li><a href="#" class="hover:text-white transition">Portfolio</a></li>
          <li><a href="#" class="hover:text-white transition">Blog</a></li>
          <li><a href="#" class="hover:text-white transition">Contact</a></li>
        </ul>
      </div>

      <!-- Column 4 -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Get in Touch</h4>
        <ul class="space-y-2 text-gray-400 text-sm">
          <li>Email: <a href="mailto:info@webnexagency.com" class="hover:text-white">info@ProCodeX.com</a></li>
          <li>Phone: <a href="tel:+1234567890" class="hover:text-white">+1 234 567 890</a></li>
          <li>Location: Karachi, Pakistan</li>
        </ul>
        <div class="flex gap-4 mt-4">
          <a href="#" class="text-gray-400 hover:text-white text-lg"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-gray-400 hover:text-white text-lg"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="text-gray-400 hover:text-white text-lg"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>

    <div class="mt-10 border-t border-gray-700 pt-6 text-center text-sm text-gray-500">
      &copy; 2025 ProCodeX. All rights reserved.
    </div>
  </div>
</footer>



  <!-- <div class="original-main">
    <div id="video-container">
      <video poster="/assets/general/_webpTransform/ezgif.com-gif-maker.webp" src="https://videos.pexels.com/video-files/28561591/12421521_640_360_30fps.mp4" muted autoplay loop playsinline></video>
    </div>

    <div id="title">
      <span class="word">
        <span class="char">c</span><span class="char">o</span><span class="char">n</span>
        <span class="char">v</span><span class="char">e</span><span class="char">r</span>
        <span class="char">s</span><span class="char">i</span><span class="char">o</span>
        <span class="char">n</span>
      </span>
      <span class="word">
        <span class="char">t</span><span class="char">h</span><span class="char">r</span>
        <span class="char">o</span><span class="char">u</span><span class="char">g</span>
        <span class="char">h</span>
      </span>
      <span class="word">
        <span class="char">i</span><span class="char">m</span><span class="char">m</span>
        <span class="char">e</span><span class="char">r</span><span class="char">s</span>
        <span class="char">i</span><span class="char">o</span><span class="char">n</span>
      </span>
    </div>

    <button id="replay">
      <span id="purple"></span>
      <span id="turquois"></span>
      <span id="yellow"></span>
      <span class="text" id="text-static">Replay animation</span>
      <span class="text" id="text-reveal">Replay animation</span>
    </button>
  </div> -->

  <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <script src="assets/script.js"></script>
  <script src="assets/custom.js"></script>
<!-- GSAP + ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
  gsap.registerPlugin(ScrollTrigger);

  gsap.to(".giant-rectangle", {
    scrollTrigger: {
      trigger: ".giant-rectangle",
      start: "top 60%",
      end: "bottom top",
      scrub: true,
    },
    x: 800, // move right
    opacity: 0,
    ease: "power2.out"
  });
</script>
<script>
  gsap.to(".giant-rectangle-rtl", {
    scrollTrigger: {
      trigger: ".giant-rectangle-rtl",
      start: "top 60%",
      end: "bottom top",
      scrub: true,
    },
    x: -800, // move left
    opacity: 0,
    ease: "power2.out"
  });
</script>



</body>
</html>