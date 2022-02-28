<footer id="mainFooter" class="footer">

</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
    AOS.init();

      const $bigBall = document.querySelector('.cursor__ball--big');
      const $smallBall = document.querySelector('.cursor__ball--small');
      const $hoverables = document.querySelectorAll('.hoverable');

      document.body.addEventListener('mousemove', onMouseMove);
      for (let i = 0; i < $hoverables.length; i++) {
        $hoverables[i].addEventListener('mouseenter', onMouseHover);
        $hoverables[i].addEventListener('mouseleave', onMouseHoverOut);
      }

      // Move the cursor
      function onMouseMove(e) {
        TweenMax.to($bigBall, .4, {
          x: e.pageX - 15,
          y: e.pageY - 15
        })
        TweenMax.to($smallBall, .1, {
          x: e.pageX - 5,
          y: e.pageY - 7
        })
      }

      // Hover an element
      function onMouseHover() {
        TweenMax.to($bigBall, .3, {
          scale: 4
        })
      }
      function onMouseHoverOut() {
        TweenMax.to($bigBall, .3, {
          scale: 1
        })
      }

      jQuery(document).ready(function() {
        let SwiperArray = [];
        jQuery('.swiper-wrapper > .swiper-slide').each( function() {
            SwiperArray.push(jQuery(this).data('name'));
        });
        var swiper = new Swiper(".mySwiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: true,
            parallax: true,
            speed: 300,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
                renderBullet: function (index, className) {
                return '<a class="' + className + '"><span>' + (SwiperArray[index]) + '</span></a>';
                },
            },
        });
    });
</script>
</body>
</html>
