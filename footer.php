<!-- footer.php -->
<footer>
  <ul class="footer-social-links">
    <li><a href="https://open.spotify.com/intl-es/artist/2lW9ePDPIpvCA2o8OXx8vH" target="_blank"><i class="fab fa-spotify"></i> Spotify</a></li>
    <li><a href="https://www.tiktok.com/@tvt.oficial" target="_blank"><i class="fab fa-tiktok"></i> TikTok</a></li>
    <li><a href="https://www.instagram.com/tvt.oficial/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
    <li><a href="https://m.youtube.com/@tvtoficial_" target="_blank"><i class="fab fa-youtube"></i> YouTube</a></li>
  </ul>
  <p>&copy; 2025 TVT. Todos los derechos reservados.</p>
</footer>
<?php wp_footer(); ?>
<script>
  const animatedElements = document.querySelectorAll('section');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  animatedElements.forEach(el => observer.observe(el));
</script>

</body>
</html>
