<div class="bg-gray">
  <div class="content column">
    <img src="<?= get_template_directory_uri() ?>/media/logo-krzyszkowska.png"
      alt="logo" id="logo-krzyszkowska">
    <div class="text text--width">
      <?= $part['description'] ?>
    </div>

    <?= widok_img($part['image'], ['srcset' => true, 'id' => 'krzyszkowska-image']) ?>

    <div class="message message--pink">
      <div class="message__text">
        <?= $part['message'] ?>
      </div>
      <img
        src="<?= get_template_directory_uri() ?>/media/logo-krzyszkowska-white.png"
        alt="" class="message__author">
    </div>
  </div>
</div>

<div class="r"></div>

<div class="content content--wide column nocolumn-tablet">
  <div class="bg-beige">
    <div class="content column">
      <?= $part['title'] ?>
    </div>
    <div class="text text--wide">
      <?= $part['description_2'] ?>
    </div>
    <div class="r"></div>
    <?= widok_img($part['image_2'], ['srcset' => true, 'id' => 'krzyszkowska-image-2', 'class' => 'img-full']) ?>
    <div class="r"></div>
    <a href="<?= $part['button_link'] ?>">
      <div class="button">
        <?= pll__('kup teraz') ?>
      </div>
    </a>
  </div>
</div>