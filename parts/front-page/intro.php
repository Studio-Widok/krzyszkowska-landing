<div class="nop">
  <div class="content column">
    <h1 class="title">
      <?= $part['title'] ?>
    </h1>

    <div class="more-tablet">
      <div class="r"></div>
      <div class="uppercase text-center">
        <?= $part['top_text'] ?>
      </div>
      <div class="r"></div>
      <div class="flex flex-justify-center"> <a
          href="<?= $part['button_link'] ?>" target="_blank"
          rel="noopener noreferrer">
          <div class="button">
            <?= pll__('kup teraz') ?>
          </div>
        </a>
      </div>
    </div>

    <div class="r"></div>
  </div>

  <div class="content content--wide column">
    <?= widok_img($part['image'], ['srcset' => true, 'class' => 'img-full more-phone']) ?>
    <?= widok_img($part['image_mobile'], ['srcset' => true, 'class' => 'img-full less-phone']) ?>
  </div>

  <div class="bg-pink" id="intro-pink">
    <div class="content column">
      <h2 class="title">
        <?= $part['title_2'] ?>
      </h2>

      <div class="less-tablet">
        <div class="r"></div>
        <div class="uppercase text-center">
          <?= $part['top_text'] ?>
        </div>
        <div class="r"></div>
        <div class="flex flex-justify-center"> <a
            href="<?= $part['button_link'] ?>" target="_blank"
            rel="noopener noreferrer">
            <div class="button">
              <?= pll__('kup teraz') ?>
            </div>
          </a>
        </div>
      </div>

      <div class="r"></div>
      <div class="r more-tablet"></div>

      <div class="more-phone">
        <img src="<?= get_template_directory_uri() ?>/media/logo_tall_white.png"
          alt="logo" id="intro-logo-tall">
      </div>
      <div class="less-phone"> <img
          src="<?= get_template_directory_uri() ?>/media/logo_tall_left_white.png"
          alt="logo" id="intro-logo-tall-left">
      </div>

      <div class="r"></div>
      <div class="r more-tablet"></div>

      <div class="text text--width-slim text--large text-center">
        <?= $part['description'] ?>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="column">
      <div class="r"></div>
      <h2 class="title" id="intro-2-title">
        <?= $part['title_3'] ?>
      </h2>
      <div class="r"></div>
    </div>
    <div class="flex flex-align-center flex-tablet column-outer"
      id="intro-2-flex">
      <div class="column-inner" id="intro-2-image">
        <?= widok_img($part['image_2'], ['srcset' => true, 'class' => 'img-full']) ?>
      </div>
      <div class="column-inner" id="intro-2-icons">
        <?php foreach ($part['icons'] as $icon) { ?>
          <div class="intro-2-icon">
            <?= widok_img($icon['icon'], ['class' => 'icon-img']) ?>
            <div class="text-center icon-label">
              <?= $icon['label'] ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="r"></div>
</div>