<?php get_header(); ?>

<?php get_part('nav'); ?>
<div class="content column">
  <h1 class="title">
    <?= get_the_title() ?>
  </h1>
  <div class="r"></div>
  <?= get_the_content() ?>
</div>
<div class="rsep"></div>
<?php get_footer(); ?>