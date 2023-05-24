<div id="part-krzyszkowska"></div>
<div class="bg-gray nop" id="krzyszkowska-gray">
  <div class="content">
    <div id="krzyszkowska-image-mobile-container" class="less-phone">
      <?= widok_img($part['image_mobile'], ['srcset' => true, 'id' => 'krzyszkowska-image-mobile']) ?>
      <img
        src="<?= get_template_directory_uri() ?>/media/logo_krzyszkowska_white.png"
        alt="logo" id="logo-krzyszkowska-mobile">
    </div>
    <div class="column">
      <img src="<?= get_template_directory_uri() ?>/media/logo_krzyszkowska.png"
        alt="logo" id="logo-krzyszkowska">
      <div class="r"></div>
      <div class="text text--width text--large text-center">
        <?= $part['description'] ?>
      </div>
      <div class="r"></div>
    </div>

    <?= widok_img($part['image'], ['srcset' => true, 'id' => 'krzyszkowska-image']) ?>

    <div class="column">
      <div class="message message--pink" id="krzyszkowska-message">
        <div class="message__text">
          <?= $part['message'] ?>
        </div>
        <img
          src="<?= get_template_directory_uri() ?>/media/logo_krzyszkowska_white.png"
          alt="" class="message__author">
      </div>


      <?= widok_img($part['image_mobile_2'], ['srcset' => true, 'class' => 'img-full less-phone']) ?>
    </div>
  </div>
</div>

<div class="r more-phone"></div>

<div class="nop">
  <div class="content content--wide column nocolumn-large">
    <div class="bg-beige" id="krzyszkowska-beige">
      <div class="content column">
        <h2 class="title">
          <?= $part['title'] ?>
        </h2>
      </div>
      <div class="rmin"></div>
      <div class="text text--width text--large text-center column">
        <?= $part['description_2'] ?>
      </div>
      <div class="r"></div>
      <?= widok_img($part['image_2'], ['srcset' => true, 'id' => 'krzyszkowska-beige-image', 'class' => 'img-full']) ?>
      <div class="r"></div>
      <div class="flex flex-justify-center">
        <a href="<?= $part['button_link'] ?>">
          <div class="button">
            <?= pll__('kup teraz') ?>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>