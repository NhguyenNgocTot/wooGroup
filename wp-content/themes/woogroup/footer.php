<footer id="mainFooter" class="footer">

</footer>
<?php wp_footer(); ?>
<script>
    AOS.init();
    var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        effect: "fade",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
</script>
</body>
</html>
