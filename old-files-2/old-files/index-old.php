<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ProCodeX</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/custom.css">
</head>
<body>
  <!-- Navigation -->
 <?php include 'header.php' ?>

  <!-- Hero Section -->
 <section>
  <div class="scroll-rectangle"></div>
  <div class="hero">
    <div class="hero-shapes">
      <div class="shape triangle"></div>
      <div class="shape circle"></div>
    </div>
    <div class="hero-content">
      <h1>Create immersive digital experiences</h1>
      <p>Transforming ideas into interactive realities through cutting-edge technology and design</p>
      <button class="cta-button">Explore Now</button>
    </div>
  </div>
</section>
<style>
  
</style>

  <!-- Original Content Section -->
  <section id="background">
    <div id="blob"></div>
    <div id="blur"></div>
  </section>

  <div class="original-main">
    <div id="video-container">
      <video poster="/assets/general/_webpTransform/ezgif.com-gif-maker.webp" src="https://videos.pexels.com/video-files/28561591/12421521_640_360_30fps.mp4" muted autoplay loop playsinline></video>
    </div>

    <div id="title">
      <span class="word">
        <span class="char">c</span>
        <span class="char">o</span>
        <span class="char">n</span>
        <span class="char">v</span>
        <span class="char">e</span>
        <span class="char">r</span>
        <span class="char">s</span>
        <span class="char">i</span>
        <span class="char">o</span>
        <span class="char">n</span>
      </span>
      <span class="word">
        <span class="char">t</span>
        <span class="char">h</span>
        <span class="char">r</span>
        <span class="char">o</span>
        <span class="char">u</span>
        <span class="char">g</span>
        <span class="char">h</span>
      </span>
      <span class="word">
        <span class="char">i</span>
        <span class="char">m</span>
        <span class="char">m</span>
        <span class="char">e</span>
        <span class="char">r</span>
        <span class="char">s</span>
        <span class="char">i</span>
        <span class="char">o</span>
        <span class="char">n</span>
      </span>
    </div>

    <button id="replay">
      <span id="purple"></span>
      <span id="turquois"></span>
      <span id="yellow"></span>
      <span class="text" id="text-static">Replay animation</span>
      <span class="text" id="text-reveal">Replay animation</span>
    </button>
  </div>

  <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Register ScrollTrigger plugin
      gsap.registerPlugin(ScrollTrigger);
      
      // Enhanced rectangle animation
      gsap.to(".scroll-rectangle", {
        scrollTrigger: {
          trigger: "body",
          start: "top top",
          end: "bottom bottom",
          scrub: 1,
          markers: false
        },
        x: "100%",
        rotate: "30deg",
        y: "+=300", // Increased movement
        opacity: 0,
        scale: 1.5, // Added scaling
        ease: "power2.inOut",
        duration: 1
      });
    
      // Enhanced hero shapes animations
      // Triangle - slides left with more rotation
      gsap.to('.triangle', {
        scrollTrigger: {
          trigger: ".hero",
          start: "top center",
          end: "bottom center",
          scrub: 1
        },
        x: "-150%", // Increased movement
        rotate: "-90deg", // More rotation
        opacity: 0,
        scale: 1.5, // Added scaling
        ease: "power1.out"
      });
    
      // Rectangle - dramatic zoom and spin
      gsap.to('.rectangle', {
        scrollTrigger: {
          trigger: ".hero",
          start: "top center",
          end: "bottom center",
          scrub: 1
        },
        scale: 3, // Increased zoom
        rotate: "360deg", // Full rotation
        opacity: 0,
        x: "50%", // Added horizontal movement
        ease: "power1.out"
      });
    
      // Circle - diagonal movement with pulsing
      gsap.to('.circle', {
        scrollTrigger: {
          trigger: ".hero",
          start: "top center",
          end: "bottom center",
          scrub: 1
        },
        x: "120%", // Increased movement
        y: "120%",
        scale: 0,
        opacity: 0,
        ease: "back.inOut(2)" // More dramatic easing
      });
    
      // Trapezoid - 3D perspective movement
      gsap.to('.trapezoid', {
        scrollTrigger: {
          trigger: ".hero",
          start: "top center",
          end: "bottom center",
          scrub: 1
        },
        x: "120%",
        y: "-120%",
        rotateX: "180deg", // Increased rotation
        rotateZ: "90deg",
        opacity: 0,
        scale: 1.5,
        ease: "power3.inOut" // Stronger easing
      });
    
      // Hero content animation (subtle)
      gsap.to('.hero-content', {
        scrollTrigger: {
          trigger: ".hero",
          start: "top center",
          end: "bottom center",
          scrub: 0.5
        },
        y: 100,
        opacity: 0.8, // Less fade
        ease: "power1.out"
      });
    });
  </script>
  
  <script src="assets/script.js"></script>
</body>
</html>