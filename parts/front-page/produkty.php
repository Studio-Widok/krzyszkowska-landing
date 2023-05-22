<div class="nop">
  <div class="content content--wide column-outer-growing">
    <?php foreach ($part['products'] as $product) { ?>
      <div class="product">

        <div class="column-inner-growing">
          <div class="title">
            <?= $product['title'] ?>
          </div>
          <div class="subtitle">
            <?= $product['subtitle'] ?>
          </div>
        </div>

        <div class="r"></div>

        <div class="flex">
          <div class="product__image-col column-inner-growing">
            <?= widok_img($product['image'], ['srcset' => true, 'class' => 'img-full']) ?>
            <?php foreach ($product['color'] as $key => $value) { ?>
              <div class="product__color"></div>
            <?php } ?>
          </div>
          <div class="product__content-col column-inner-growing">
            <div class="text text--width-slim text--large">
              <?= $product['description'] ?>
            </div>
            <div class="message message--brown product-message">
              <div class="message__text">
                <?= $product['message'] ?>
              </div>
              <img
                src="<?= get_template_directory_uri() ?>/media/logo_krzyszkowska_white.png"
                alt="" class="message__author">
            </div>
          </div>
        </div>

        <div class="r"></div>

        <div class="column-inner-growing">
          <div class="flex flex-justify-center">
            <a href="<?= $product['button_link'] ?>">
              <div class="button">
                <?= pll__('kup teraz') ?>
              </div>
            </a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>