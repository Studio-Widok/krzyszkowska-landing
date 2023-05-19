<div class="content column">
  <div class="title">
    <?= $part['title'] ?>
  </div>
  <div class="uppercase">
    <?= $part['top_text'] ?>
  </div>
  <a href="<?= $part['button_link'] ?>">
    <div class="button">
      <?= pll__('kup teraz') ?>
    </div>
  </a>
</div>

<div class="content content--wide column">
  <?= widok_img($part['image'], ['srcset' => true, 'class' => 'img-full']) ?>
</div>

<div class="r"></div>

<div class="bg-gray">
  <div class="content column">
    <img src="<?= get_template_directory_uri() ?>/media/logo_tall.png"
      alt="logo">
    <div class="r"></div>
    <div class="title">
      <?= $part['title_2'] ?>
    </div>
    <div class="r"></div>
    <div class="text text--width">
      <?= $part['description'] ?>
    </div>
  </div>
</div>

<div class="bg-pink">
  <div class="content">
    <div class="column">
      <div class="title" id="intro-pink-title">
        <?= $part['title_3'] ?>
      </div>
      <?= widok_img($part['image'], ['srcset' => true, 'class' => 'img-full']) ?>
    </div>
    <div class="flex flex-wrap column-outer-growing" id="intro-pink-icons">
      <?php foreach ($part['icons'] as $icon) { ?>
        <div class="intro-pink-icon column-inner-growing">
          <?= widok_img($icon['icon'], ['class' => 'icon-img']) ?>
          <div class="text-center icon-label">
            <?= $icon['label'] ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>