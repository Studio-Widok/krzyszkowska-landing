<?php
$frontPageId = pll_get_post(get_option('page_on_front'));
$parts       = $parts ?? [
  'intro'        => get_field('intro', $frontPageId),
  'krzyszkowska' => get_field('krzyszkowska', $frontPageId),
  'produkty'     => get_field('produkty', $frontPageId),
  'supermoce'    => get_field('supermoce', $frontPageId),
];
?>

<nav>
  <div id="nav-wrap">
    <div id="nav-logo">
      <?php if (!is_front_page()) { ?>
        <a href="<?= get_the_permalink($frontPageId) ?>">
        <?php } else { ?>
          <div class="nav-link--scroll" data-scroll-target="intro">
          <?php } ?>
          <img src="<?= get_template_directory_uri() ?>/media/logo_wide.png"
            alt="logo">
          <?php if (!is_front_page()) { ?>
        </a>
      <?php } else { ?>
      </div>
    <?php } ?>
  </div>

  <div id="nav-links">
    <?php
    foreach ($parts as $partKey => $part) {
      if (is_front_page()) {
        ?>
        <div class="nav-link nav-link--scroll" data-scroll-target="<?= $partKey ?>">
          <?= $part['nav_title'] ?>
        </div>
      <?php } else { ?>
        <a href="<?= get_the_permalink($frontPageId) ?>#part-<?= $partKey ?>"
          class="nav-link"> <?= $part['nav_title'] ?> </a>
      <?php }
    } ?>
    <div class="nav-separator">|</div>
    <?php
    $langs = pll_the_languages([
      'raw'          => true,
      'hide_current' => true,
    ]);
    foreach ($langs as $lang) {
      ?>
      <a href="<?= $lang['url'] ?>" class="nav-link"><?= $lang['slug'] ?></a>
    <?php } ?>
  </div>
  </div>
</nav>

<div id="mobile-navbar" class="column">

  <div id="nav-logo-mobile">
    <?php if (!is_front_page()) { ?>
      <a href="<?= get_the_permalink($frontPageId) ?>">
      <?php } else { ?>
        <div class="nav-link--scroll" data-scroll-target="intro">
        <?php } ?>
        <img src="<?= get_template_directory_uri() ?>/media/logo_wide.png"
          alt="logo">
        <?php if (!is_front_page()) { ?>
      </a>
    <?php } else { ?>
    </div>
  <?php } ?>
</div>

<?php foreach ($langs as $lang) { ?>
  <a href="<?= $lang['url'] ?>" class="nav-link"><?= $lang['slug'] ?></a>
<?php } ?>
<div id="burger">
  <div></div>
  <div></div>
  <div></div>
</div>
</div>

<div id="nav-spacer"></div>