<div class="nop" id="part-supermoce">
  <div class="content column">
    <h2 class="title">
      <?= $part['title'] ?>
    </h2>
    <div class="r"></div>
    <div class="text text--width text--large text-center">
      <?= $part['description'] ?>
    </div>
  </div>

  <div class="r"></div>

  <div class="content content--wide column-outer">
    <div class="flex flex-wrap" id="super-icons">
      <?php foreach ($part['icons'] as $icon) { ?>
        <div class="super-icon column-inner">
          <?= widok_img($icon['icon'], ['srcset' => true, 'class' => 'super-icon__icon img-full']) ?>
          <div class="icon-label">
            <?= $icon['label'] ?>
          </div>
          <div class="rmik"></div>
          <div class="icon-description text">
            <?= $icon['description'] ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<div class="r"></div>