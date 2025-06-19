
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            dots: true,
            responsive: {
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        });
    });
    document.addEventListener('DOMContentLoaded', () => {
      // Mouse tilt effect (from section 1: hero-section)
      const heroSection = document.getElementById('hero-section');
      if (heroSection) { // Check if heroSection exists
          const leftShape = heroSection.querySelector('.middle-left-3d');
          const rightShape = heroSection.querySelector('.middle-right-3d');

          if(leftShape && rightShape) {
            document.addEventListener('mousemove', (e) => {
              const x = (e.clientX / window.innerWidth - 0.5) * 20;
              const y = (e.clientY / window.innerHeight - 0.5) * 20;

              leftShape.style.transform = `rotateY(${x}deg) rotateX(${y}deg) translateZ(0)`; // Added translateZ(0) for better transform context
              rightShape.style.transform = `rotateY(${-x}deg) rotateX(${y}deg) translateZ(0)`;
            });
          }
      }

      // GSAP animations for innovation-animation-section (was section 3)
      gsap.registerPlugin(ScrollTrigger);

      const container = document.querySelector('#innovation-animation-section .relative.w-3\\/4'); // More specific selector
      if (container) {
        const box1 = container.querySelector('.box1');
        const shapesContainer = container.querySelector('.shapes-container');
        const shapes = gsap.utils.toArray(container.querySelectorAll('.shape'));

        function setupBoxAnimations() {
          if (!box1 || !shapesContainer) return;

          const containerWidth = container.offsetWidth;
          const boxWidth = box1.offsetWidth;

          const maxX1 = containerWidth - boxWidth;
          // Ensure maxXShapes calculation is logical for its movement
          const maxXShapes = -(containerWidth / 2 - shapesContainer.offsetWidth / 2 - boxWidth / 2);


          const scrollDistanceBox1 = window.innerHeight * 0.5;
          const scrollDistanceShapes = window.innerHeight * 0.3;

          gsap.to(box1, {
            x: maxX1,
            ease: "none",
            scrollTrigger: {
              trigger: container,
              start: "top 50%",
              end: `+=${scrollDistanceBox1}`,
              scrub: true,
            }
          });

          gsap.to(shapesContainer, {
            x: maxXShapes,
            ease: "none",
            scrollTrigger: {
              trigger: container,
              start: "top 50%",
              end: `+=${scrollDistanceShapes}`,
              scrub: true,
            }
          });
        }

        function floatingAnimation() {
          if (shapes.length === 0) return;
          shapes.forEach((shape, i) => {
            const amplitudeX = 10 + Math.random() * 15;
            const amplitudeY = 5 + Math.random() * 10;
            const amplitudeZ = 5 + Math.random() * 10;
            const duration = 3 + Math.random() * 3;

            gsap.to(shape, {
              x: `+=${amplitudeX}`,
              y: `+=${amplitudeY}`,
              z: `+=${amplitudeZ}`,
              duration: duration,
              ease: "sine.inOut",
              yoyo: true,
              repeat: -1,
              // yoyoEase: true, // yoyoEase is deprecated, use ease on yoyo:true
              repeatRefresh: true,
              delay: i * 0.3,
            });
          });
        }
        
        setupBoxAnimations();
        floatingAnimation();

        window.addEventListener('resize', () => {
          ScrollTrigger.getAll().forEach(trigger => trigger.kill()); // Kill all ScrollTriggers
          gsap.killTweensOf([box1, shapesContainer, ...shapes]); // Kill all tweens
          setupBoxAnimations();
          floatingAnimation();
          ScrollTrigger.refresh(); // Refresh ScrollTrigger after re-applying animations
        });
      }
      
      // Swiper initialization for #project-slider-section
      const swiperEl = document.querySelector('#project-slider-section .mySwiper');
      let projectSwiperInstance = null; // Declare here to be accessible by scroll handler

      if (swiperEl) {
        projectSwiperInstance = new Swiper(swiperEl, {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          loop: true,
          speed: 800,
          coverflowEffect: {
            rotate: 0,
            stretch: -60,
            depth: 150,
            modifier: 1,
            slideShadows: false,
          },
          autoplay: { // Added autoplay from the second config, can be removed if not desired
            delay: 3000, // Adjusted delay
            disableOnInteraction: true,
          },
        });

        if (projectSwiperInstance.slides.length > 1) {
          projectSwiperInstance.slideToLoop(1, 0, false);
        }

        const sliderWrapper = document.querySelector('#project-slider-section .swiper-container-wrapper');
        const mouseIndicator = document.querySelector('#project-slider-section .mouse-drag-indicator');

        if (sliderWrapper && mouseIndicator) {
          sliderWrapper.addEventListener('mouseenter', () => {
            mouseIndicator.classList.add('visible');
          });
          sliderWrapper.addEventListener('mouseleave', () => {
            mouseIndicator.classList.remove('visible');
          });
          sliderWrapper.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;
            mouseIndicator.style.left = x + 'px';
            mouseIndicator.style.top = y + 'px';
          });
        }
      }

      // Scroll-based Swiper navigation for #project-slider-section
      const projectSliderSection = document.getElementById('project-slider-section');
      if (projectSliderSection && projectSwiperInstance) { // Ensure both exist
        let lastScrollTop = window.scrollY;
        const scrollObserverForSwiper = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              window.addEventListener('scroll', handleSwiperScroll);
            } else {
              window.removeEventListener('scroll', handleSwiperScroll);
            }
          });
        }, { threshold: 0.3 });

        scrollObserverForSwiper.observe(projectSliderSection);

        function handleSwiperScroll() {
          const currentScroll = window.scrollY;
          if (projectSwiperInstance) { // Check if instance exists
            if (currentScroll > lastScrollTop) {
              projectSwiperInstance.slideNext();
            } else if (currentScroll < lastScrollTop) {
              projectSwiperInstance.slidePrev();
            }
          }
          lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        }
      }

      // Custom video player for #mojo-section
      const video = document.getElementById("customVideo");
      const playPauseBtn = document.getElementById("playPauseBtn");
      const progressFill = document.getElementById("progressFill");
      const thumbnailWrapper = document.getElementById("thumbnailWrapper");
      const thumbnailPlayBtn = document.getElementById("thumbnailPlayBtn");
      
      if (video && playPauseBtn && progressFill && thumbnailWrapper && thumbnailPlayBtn) {
        const icon = playPauseBtn.querySelector("i");
        let animationFrameId;

        function updateProgressBar() {
          if (!video.duration) return; // Ensure duration is available
          const percent = (video.currentTime / video.duration) * 100;
          progressFill.style.width = percent + "%";
          if (!video.paused) { // Only request next frame if playing
             animationFrameId = requestAnimationFrame(updateProgressBar);
          }
        }

        function togglePlayPause() {
          if (video.paused) {
            video.play();
            icon.className = "fa fa-pause";
            updateProgressBar(); // Start progress updates
          } else {
            video.pause();
            icon.className = "fa fa-play";
            cancelAnimationFrame(animationFrameId); // Stop progress updates
          }
        }

        thumbnailPlayBtn.addEventListener("click", () => {
          thumbnailWrapper.style.display = "none";
          video.play();
          icon.className = "fa fa-pause";
          updateProgressBar();
        });

        playPauseBtn.addEventListener("click", togglePlayPause);

        const progressContainer = document.getElementById("progressContainer");
        if (progressContainer) {
            progressContainer.addEventListener("click", (e) => {
                if (!video.duration) return;
                const rect = e.currentTarget.getBoundingClientRect();
                const percent = (e.clientX - rect.left) / rect.width;
                video.currentTime = percent * video.duration;
                progressFill.style.width = (percent * 100) + "%";
            });
        }
        

        video.addEventListener("loadedmetadata", () => {
          progressFill.style.width = "0%";
        });

        video.addEventListener('play', updateProgressBar); // Keep updating on play
        video.addEventListener('pause', () => cancelAnimationFrame(animationFrameId)); // Stop on pause
        video.addEventListener('ended', () => { // Reset on ended
            icon.className = "fa fa-play";
            progressFill.style.width = "100%"; // Or 0% if you prefer reset
            cancelAnimationFrame(animationFrameId);
        });

      }

      // Footer scroll effect
      const footer = document.getElementById("footer");
      const footerContainer = document.getElementById("footerContainer"); // Observe container for better trigger
      if (footer && footerContainer) {
        const footerObserver = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                footer.classList.add("scrolled");
              } else {
                footer.classList.remove("scrolled");
              }
            });
          },
          { threshold: 0.1 } // Trigger when 10% of the footer container is visible
        );
        footerObserver.observe(footerContainer);
      }

      // GSAP animations for .giant-rectangle (if these elements exist)
      gsap.utils.toArray(".giant-rectangle").forEach(el => {
        gsap.to(el, {
          scrollTrigger: {
            trigger: el,
            start: "top 60%",
            end: "bottom top",
            scrub: true,
          },
          x: 800,
          opacity: 0,
          ease: "power2.out"
        });
      });
      
      gsap.utils.toArray(".giant-rectangle-rtl").forEach(el => {
        gsap.to(el, {
          scrollTrigger: {
            trigger: el,
            start: "top 60%",
            end: "bottom top",
            scrub: true,
          },
          x: -800,
          opacity: 0,
          ease: "power2.out"
        });
      });


      // Gradient blob observer
      const gradientBlobObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const gradientClass = Array.from(entry.target.classList)
              .find(cls => cls.startsWith('to-'));
            
            if (gradientClass) {
              document.documentElement.style.setProperty('--gradient-opacity', '0.6');
              setTimeout(() => {
                const blobElement = document.querySelector('.gradient-blob');
                if (blobElement) {
                    blobElement.className = 'gradient-blob ' + gradientClass;
                }
                setTimeout(() => {
                  document.documentElement.style.setProperty('--gradient-opacity', '0.8');
                }, 100);
              }, 50);
            }
          }
        });
      }, {
        threshold: 0.5,
        rootMargin: '0px 0px -30% 0px'
      });
      
      document.querySelectorAll('section[class*="to-"]').forEach(section => { // Target sections with 'to-' class
        gradientBlobObserver.observe(section);
      });

      // AOS Initialization
      AOS.init();

    }); // End DOMContentLoaded
 