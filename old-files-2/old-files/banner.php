<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fixed Triangle & Circle</title>
 <style>
  html {
    overflow-x: hidden;
  }
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    overflow-x: hidden;
  }

  .section {
    display: flex;
    flex-direction: column;
    padding: 40px 20px;
  }

  .content, .animation-area {
    width: 100%;
  }

  .content {
    margin-bottom: 40px;
  }

  .content h1 {
    font-size: 2rem;
    margin-bottom: 20px;
  }

  .content p {
    font-size: 1rem;
    color: #444;
    max-width: 600px;
  }

  .animation-area {
    position: relative;
    height: 500px;
  }

  .triangle {
    position: absolute;
    bottom: 40px;
    right: 40px;
    width: 0;
    height: 0;
    border-left: 150px solid transparent;
    border-right: 150px solid transparent;
    border-bottom: 260px solid #667eea;
    transition: 
      transform 1s ease-in-out,
      opacity 1s ease-in-out;
  }

  .triangle.vanish {
    transform: translateX(200px) rotate(40deg);
    opacity: 0;
  }

  .circle {
    position: absolute;
    width: 120px;
    height: 120px;
    background: #ff9a9e;
    border-radius: 50%;
    top: 139px;
    right: calc(90px + 150px + 100px);
    transition: 
      transform 0.1s linear,
      width 0.3s ease,
      height 0.3s ease,
      opacity 0.3s ease;
  }

  .spacer {
    height: 100vh;
  }

  @media (min-width: 768px) {
    .section {
      flex-direction: row;
      align-items: center;
      padding: 60px 5%;
    }

    .content, .animation-area {
      width: 50%;
    }

    .content {
      margin-bottom: 0;
      padding-right: 5%;
    }
  }

  /* Mobile adjustments */
  @media (max-width: 767px) {
    .animation-area {
        height: 372px;
        left: 50px;
        top: -60px;
    }

    .triangle {
      border-left: 80px solid transparent;
      border-right: 80px solid transparent;
      border-bottom: 140px solid #667eea;
      right: 50%;
      transform: translateX(50%);
    }

    .triangle.vanish {
      transform: translateX(200px) rotate(40deg);
    }

    .circle {
      width: 80px;
      height: 80px;
      top: 100px;
      right: calc(50% + 40px);
    }
  }
</style>

</head>
<body>
  <div class="section">
    <div class="content">
      <h1>We build future-ready experiences</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Discover how we craft digital excellence.</p>
    </div>
    <div class="animation-area">
      <div class="triangle"></div>
      <div class="circle"></div>
    </div>
  </div>

  <div class="spacer"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const circle = document.querySelector(".circle");
      const triangle = document.querySelector(".triangle");
      const section = document.querySelector(".section");

      let triangleBase, triangleHeight;
      let triangleVanished = false; // to ensure animation runs once

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

        // Circle movement
        const moveToTriangle = Math.min(progress, 0.7);
        const maxX = triangleBase - 100;
        const translateX = moveToTriangle * maxX;

        const slideAlongTriangle = Math.max(0, (progress - 0.7) / 0.3);
        const maxY = triangleHeight;
        const translateY = slideAlongTriangle * maxY;

        const slope = triangleHeight / (triangleBase / 2);
        const translateXForSlope = translateY / slope;

        if (progress < 0.7) {
          circle.style.transform = `translate(${translateX}px, 0px)`;
        } else {
          circle.style.transform = `translate(${translateX - translateXForSlope}px, ${translateY}px)`;
        }

        // Circle fade and shrink
        if (progress >= 1) {
          circle.style.width = "0px";
          circle.style.height = "0px";
          circle.style.opacity = "0";

          // Trigger triangle vanish once
          if (!triangleVanished) {
            triangle.classList.add("vanish");
            triangleVanished = true;
          }
        } else {
          circle.style.width = "120px";
          circle.style.height = "120px";
          circle.style.opacity = "1";

          // Reset triangle if scrolling back up
          triangle.classList.remove("vanish");
          triangleVanished = false;
        }
      });
    });
  </script>
</body>
</html>
