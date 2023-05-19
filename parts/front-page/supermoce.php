<div class="content column">
  <div class="title">
    <?= $part['title'] ?>
  </div>
  <div class="text text--width">
    <?= $part['description'] ?>
  </div>
</div>

<div class="r"></div>

<div class="content content--wide column-outer">
  <div class="flex" id="super-icons">
    <?php foreach ($part['icons'] as $icon) { ?>
      <div class="super-icon">
        <?= widok_img($icon['icon'], ['srcset' => true, 'class' => 'super-icon__icon img-full']) ?>
        <div class="icon-label">
          <?= $icon['label'] ?>
        </div>
        <div class="icon-description">
          <?= $icon['description'] ?>
        </div>
      </div>
    <?php } ?>
  </div>
</div>