<nav>
  <div id="nav-wrap">
    <img id="nav-logo"
      src="<?= get_template_directory_uri() ?>/media/logo_wide.png" alt="logo">
    <div id="nav-links">
      <?php foreach ($parts as $partKey => $part) { ?>
        <div class="nav-link nav-link--scroll"
          data-scroll-target="<?= $partKey ?>">
          <?= $part['nav_title'] ?>
        </div>
      <?php } ?>
      <div class="nav-separator">|</div>
      <div class="nav-link">eng</div>
    </div>
  </div>
</nav>

<div id="mobile-navbar" class="column">
  <img id="nav-logo-mobile"
    src="<?= get_template_directory_uri() ?>/media/logo_wide.png" alt="logo">
  <div class="nav-link">eng</div>
  <div id="burger">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>

<div id="nav-spacer"></div>