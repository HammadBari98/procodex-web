
 document.addEventListener("DOMContentLoaded", function () {
      const circle = document.querySelector(".circle");
      const triangle = document.querySelector(".triangle");
      const section = document.querySelector(".section");

      let triangleBase, triangleHeight;
      let triangleVanished = false;

      function updateDimensions() {
        triangleBase = triangle.offsetWidth;
        triangleHeight = triangle.offsetHeight;
      }

      updateDimensions();
      window.addEventListener("resize", updateDimensions);

      window.addEventListener("scroll", function () {
        const triggerStart = section.offsetTop;
        const scrollWindow = 250;
        const scrollY = window.scrollY || window.pageYOffset;
        const scrollDelta = scrollY - triggerStart;

        const progress = Math.min(Math.max(scrollDelta / scrollWindow, 0), 1);

        const moveToCircle = Math.min(progress, 0.7); // Changed target
        const maxX = triangleBase - 100; // Using triangleBase for consistent movement

        const slideAlongTriangle = Math.max(0, (progress - 0.7) / 0.3);
        const maxY = triangleHeight;
        const translateYTriangle = slideAlongTriangle * maxY;

        const slope = triangleHeight / (triangleBase / 2);
        const translateXForSlope = translateYTriangle / slope;

        // Control the CIRCLE's movement (towards the initial triangle position)
        if (progress < 0.7) {
          circle.style.transform = `translate(${moveToCircle * maxX}px, 0px)`;
        } else {
          circle.style.transform = `translate(${moveToCircle * maxX - translateXForSlope}px, ${translateYTriangle}px)`;
        }

        // Control the TRIANGLE's vanishing
        if (progress >= 1) {
          circle.style.width = "0px";
          circle.style.height = "0px";
          circle.style.opacity = "0";
          if (!triangleVanished) {
            triangle.classList.add("vanish");
            triangleVanished = true;
          }
        } else {
          circle.style.width = (window.innerWidth >= 768) ? "120px" : "80px";
          circle.style.height = (window.innerWidth >= 768) ? "120px" : "80px";
          circle.style.opacity = "1";
          triangle.classList.remove("vanish");
          triangleVanished = false;
        }
      });
    });



    

/* About */


/* Out journey */

 document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.timeline-item');

    function revealItems() {
      const trigger = window.innerHeight * 0.85;
      items.forEach(item => {
        const top = item.getBoundingClientRect().top;
        if (top < trigger) {
          item.classList.add('show');
        }
      });
    }

    revealItems();
    window.addEventListener('scroll', revealItems);
  });


   /* home-projects */
   let targetX = 0, targetY = 0;
  let currentX = 0, currentY = 0;

  // Track mouse position
  document.addEventListener('mousemove', (e) => {
    targetX = e.clientX;
    targetY = e.clientY;
  });

  function animateFloatingImages() {
    currentX += (targetX - currentX) * 0.1;
    currentY += (targetY - currentY) * 0.1;

    document.querySelectorAll('.floating-image.show').forEach(img => {
      img.style.left = `${currentX}px`;
      img.style.top = `${currentY}px`;
    });

    requestAnimationFrame(animateFloatingImages);
  }

  animateFloatingImages();

  function showFloatingImage(id) {
    document.querySelectorAll('.floating-image').forEach(img => img.classList.remove('show'));
    document.getElementById(id).classList.add('show');
  }

  function hideFloatingImage(id) {
    document.getElementById(id).classList.remove('show');
  }