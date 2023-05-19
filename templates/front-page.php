<?php // template name: front page
get_header();

$parts = [
  'intro'        => get_field('intro'),
  'krzyszkowska' => get_field('krzyszkowska'),
  'produkty'     => get_field('produkty'),
  'supermoce'    => get_field('supermoce'),
];

get_part('nav', ['parts' => $parts]);
?>

<?php
get_part('front-page/intro', ['part' => $parts['intro']]);
get_part('front-page/krzyszkowska', ['part' => $parts['krzyszkowska']]);
get_part('front-page/produkty', ['part' => $parts['produkty']]);
get_part('front-page/supermoce', ['part' => $parts['supermoce']]);
?>

<div class="content column">
</div>

<?php get_footer(); ?>