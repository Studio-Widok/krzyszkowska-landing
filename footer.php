<footer>
  <div class="column flex flex-align-center flex-justify-space-between">
    <div class="copyrights">
      <?= get_field('copyrights', 'options') ?>
    </div>
    <div class="footer-social flex">
      <a href="<?= get_field('instagram_link', 'options') ?>"
        class="social-link" target="_blank" rel="noopener noreferrer">
        <img src="<?= get_template_directory_uri() ?>/media/instagram.svg"
          alt="instagram">
      </a>
      <a href="<?= get_field('tiktok_link', 'options') ?>" class="social-link"
        target="_blank" rel="noopener noreferrer">
        <img src="<?= get_template_directory_uri() ?>/media/tiktok.svg"
          alt="tiktok">
      </a>
      <a href="<?= get_field('facebook_link', 'options') ?>" class="social-link"
        target="_blank" rel="noopener noreferrer">
        <img src="<?= get_template_directory_uri() ?>/media/facebook.svg"
          alt="facebook">
      </a>
      <a href="<?= get_field('linkedin_link', 'options') ?>" class="social-link"
        target="_blank" rel="noopener noreferrer">
        <img src="<?= get_template_directory_uri() ?>/media/linkedin.svg"
          alt="linkedin">
      </a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>