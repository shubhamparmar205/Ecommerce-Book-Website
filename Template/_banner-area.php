    <!-- CSS for Name Animation Effect  -->

    <style type="text/css">
      #svideo{
          width: 100%;
          height: auto;
          background:black;
          text-align: center;
          position: relative;
          overflow: hidden;
      }

      video{
          object-fit: cover;
          margin-left: 10px;
          max-width: 100%;
          height: auto;
      }

      h1{
          position: absolute;
          top: 40%;
          left: 13%;
          color: #ddd;
          font-size: 5em;
          letter-spacing: 0.2em;
         /* width: 100%;*/
      }

      h1 span{
          opacity: 0;
          display: inline-block;
          animation: animate 1s linear forwards;
      }

      @keyframes animate{
          0%{
              opacity: 0;
              transform: rotateY(90deg);
              filter: blur(10px);
          }

          100%{
              opacity: 1;
              transform: rotateY(0deg);
              filter: blur(0);
          }
      }

      /* Delay for each letter span */
      h1 span:nth-child(1) { animation-delay: 0.6s; }
      h1 span:nth-child(2) { animation-delay: 1s; }
      h1 span:nth-child(3) { animation-delay: 1.5s; }
      h1 span:nth-child(4) { animation-delay: 2.0s; }
      h1 span:nth-child(5) { animation-delay: 2.5s; }
      h1 span:nth-child(6) { animation-delay: 3.0s; }
      h1 span:nth-child(7) { animation-delay: 3.5s; }
      h1 span:nth-child(8) { animation-delay: 4.0s; }
      h1 span:nth-child(9) { animation-delay: 4.5s; }
      h1 span:nth-child(10) { animation-delay: 5.0s; }
      h1 span:nth-child(11) { animation-delay: 5.5s; }

      /* @media screen and (min-height: 600px){
          h1{
          position: absolute;
          top: 35%;
          left: 25vh;
          color: #ddd;
          font-size: 5em;
          letter-spacing: 0.2em;
          width: 200vh;
          }
      } */

        /* Responsive styles */
        @media (max-width: 768px) {
            h1 {
              top: 35%;
              left: 25vh;
              font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            h1 {
                top: 45%;
                left: 12%;
                font-size: 1.5rem;
            }
        }
  </style>

    <!-- !CSS for Name Animation Effect  -->


        <!-- Owl Carousel -->
            <section id="banner-area">
              <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="14000">
                <div class="carousel-inner"> 
                  <div class="carousel-item active">
                    <img class="img-fluid" src="./assets/b1.png" alt="Banner2">
                  </div>
                  <!-- <div class="carousel-item">
                    <img class="img-fluid" src="./assets/Banner3.png" alt="Banner3">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="./assets/10.png" alt="Banner3">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="./assets/9.png" alt="Banner3">
                  </div> -->
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </section>
        <!-- !Owl Carousel -->

<!-- Javascript for the video -->
<script>
  function loopVideoAndAnimation() {
      const video = document.getElementById('smokeVideo');
      const h1 = document.querySelector('h1');

      video.addEventListener('ended', function () {
          // Reset the animation by cloning and replacing the element
          const newH1 = h1.cloneNode(true);
          h1.parentNode.replaceChild(newH1, h1);

          // Reset the video to the beginning and play again
          video.currentTime = 0;
          video.play();

          // Call the loop function again
          requestAnimationFrame(loopVideoAndAnimation);
      });
  }

  // Start the loop
  loopVideoAndAnimation();
</script>