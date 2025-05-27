// Blob and video react to mouse position

let allowRotation = true;
window.addEventListener("mousemove", (mouseEvent) => {
  const { clientX, clientY } = mouseEvent;

  blobFollowMouse(clientX, clientY); // Animation

  const videoContainer = document.querySelector("#video-container");

  const rect = videoContainer.getBoundingClientRect();
  const centerX = rect.left + rect.width / 2;
  const centerY = rect.top + rect.height / 2;
  const distanceX = (clientX - centerX) / rect.width;
  const distanceY = (clientY - centerY) / rect.height;

  if (allowRotation) {
    // To prevent conflicting animations
    rotateVideo3D(distanceX, distanceY); // Animation
  }
});

// Button Reactivity
let btnPlayed = false;
const button = document.querySelector("#replay");

button.addEventListener("mouseover", () => {
  buttonGrow(button); // Animation
  buttonTextIn();
  if (!btnPlayed) {
    buttonColorsWave();
    btnPlayed = true;
  }
});

button.addEventListener("mouseout", () => {
  buttonShrink(button); // Animation
  btnPlayed = false;
});

button.addEventListener("click", () => {
  titleSlideIn(); // Animation
  videoButtonPopIn(); // Animation
});

// initial animations
titleSlideIn();
videoButtonPopIn();

/* -- GSAP ANIMATIONS -- */

// Blob

function blobRotate() {
  const tl = gsap
    .timeline({ repeat: -1, ease: "none" })
    .to("#blob", { rotation: 180, scaleX: 1.6 })
    .to("#blob", { rotation: 360, scaleX: 1 })
    .totalDuration(17);
  tl.play();
}
blobRotate();

function blobFollowMouse(x, y) {
  gsap.to("#blob", {
    left: x,
    top: y,
    duration: 2
  });
}

// 3D Video

function rotateVideo3D(distanceX, distanceY) {
  gsap.to("#video-container", {
    rotateX: -20 * distanceY,
    rotateY: 20 * distanceX,
    duration: 0.5,
    ease: "power1.out"
  });
}

function videoButtonPopIn() {
  allowRotation = false;

  gsap.fromTo(
    "#replay, #video-container",
    { scale: 0 },
    {
      scale: 1,
      ease: "elastic.out(1, 0.8)",
      duration: 0.8,
      delay: 0.4,
      onComplete: () => {
        allowRotation = true;
      }
    }
  );
}

// Title Text

function titleSlideIn() {
  document.querySelectorAll(".word").forEach((word, wordIdx) => {
    Array.from(word.children).forEach((char, charIdx) => {
      gsap.fromTo(
        char,
        {
          opacity: 0,
          x: 0
        },
        {
          opacity: 1,
          x: -300,
          ease: "elastic.out(1.1, 0.7)",
          duration: 1.2,
          delay: wordIdx * 0.2 + charIdx * 0.03
        }
      );
    });
  });
}

// Button

function buttonColorsWave() {
  gsap.fromTo(
    "#purple",
    {
      scale: 0
    },
    {
      scale: 1
    }
  );
  gsap.fromTo(
    "#turquois",
    {
      scale: 0
    },
    {
      scale: 1,
      delay: 0.1
    }
  );
  gsap.fromTo(
    "#yellow",
    {
      scale: 0
    },
    {
      scale: 1,
      delay: 0.2
    }
  );
}

function buttonTextIn() {
  gsap.fromTo(
    ".text",
    {
      y: 9
    },
    {
      y: -8
    }
  );
  gsap.fromTo(
    "#text-static",
    {
      opacity: 1
    },
    {
      opacity: 0
    }
  );
  gsap.fromTo(
    "#text-reveal",
    {
      opacity: 0
    },
    {
      opacity: 1
    }
  );
}

function buttonGrow(button) {
  gsap.to(button, {
    width: 170,
    height: 46
  });
}

function buttonShrink(button) {
  gsap.to(button, {
    width: 180,
    height: 50
  });
}


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

  // Contact Section
   const iconBox = document.getElementById('icon3d');
  const section = document.getElementById('contact-section');

  let active = false;

  // Track visibility
  const observer1 = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      active = entry.isIntersecting;
    });
  }, {
    threshold: 0.4
  });

  observer1.observe(section);

  // Mouse movement
  document.addEventListener('mousemove', (e) => {
    if (!active) return;

    const rect = section.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = ((y - centerY) / centerY) * 25;
    const rotateY = ((x - centerX) / centerX) * 25;

    iconBox.style.transform = `rotateX(${-rotateX}deg) rotateY(${rotateY}deg)`;
  });

  document.addEventListener('mouseleave', () => {
    iconBox.style.transform = 'rotateX(0deg) rotateY(0deg)';
  });


  // Nav Button hide
  window.addEventListener('scroll', function () {
  const button = document.querySelector('.outline-button');

  // Only run this on desktop (e.g. width > 768px)
  if (window.innerWidth > 768) {
    if (window.scrollY > 50) {
      button.classList.add('hide-on-scroll');
    } else {
      button.classList.remove('hide-on-scroll');
    }
  } else {
    // On mobile, always keep it visible
    button.classList.remove('hide-on-scroll');
  }
});


// Menu Toggle
const openMenuBtn = document.getElementById('open-menu');
const closeMenuBtn = document.getElementById('close-menu');
const fullMenu = document.getElementById('fullscreen-menu');
const mainHeader = document.getElementById('main-header');

openMenuBtn.addEventListener('click', () => {
  openMenuBtn.classList.add('active');
  fullMenu.classList.add('active');
  mainHeader.classList.add('menu-active');
  document.body.style.overflow = 'hidden';
});

closeMenuBtn.addEventListener('click', () => {
  openMenuBtn.classList.remove('active');
  fullMenu.classList.remove('active');
  mainHeader.classList.remove('menu-active');
  document.body.style.overflow = '';
});

document.querySelectorAll('.menu-links a').forEach(link => {
  link.addEventListener('click', () => {
    openMenuBtn.classList.remove('active');
    fullMenu.classList.remove('active');
    mainHeader.classList.remove('menu-active');
    document.body.style.overflow = '';
  });
});



// smmothscroll learn more
 document.querySelector('.scroll-circle').addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    target.scrollIntoView({ behavior: 'smooth' });
  });