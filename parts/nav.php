<nav>
  <div id="nav-logo">
    <img src="<?= get_template_directory_uri() ?>/media/logo_wide.png"
      alt="logo">
  </div>
  <div id="nav-links">
    <?php foreach ($parts as $partKey => $part) { ?>
      <div class="nav-link" data-scroll-target="<?= $partKey ?>">
        <?= $part['nav_title'] ?>
      </div>
    <?php } ?>
    <div class="nav-separator">|</div>
    <div class="nav-link">eng</div>
  </div>
</nav>

<div id="burger"></div>