<?php snippet('header') ?>

<section id="Opener" class="opener">
    <div class="opener_pic space_top_20p space_bottom_40p">
      <img class="opener_pic_1 rellax" data-rellax-speed="0" src="<?= $page->opener_pic_1()->url() ?>" alt="">
      <img class="opener_pic_2 rellax" data-rellax-speed="-0.5" src="<?= $page->opener_pic_2()->url() ?>" alt="">
      <img class="opener_pic_3 rellax" data-rellax-speed="0.5" src="<?= $page->opener_pic_3()->url() ?>" alt="">
      <img class="opener_pic_4 rellax" data-rellax-speed="-0.5"src="<?= $page->opener_pic_4()->url() ?>" alt="">
      <img class="opener_pic_5 rellax" data-rellax-speed="0"src="<?= $page->opener_pic_5()->url() ?>" alt="">
    </div>
    <div class="mobile_opener_pic space_top_20p space_bottom_40p">
      <img class="mobile_opener_pic_5 rellax" data-rellax-speed="-0.5"src="<?= $page->mobile_opener_pic_5()->url() ?>" alt="">
      <img class="mobile_opener_pic_4 rellax" data-rellax-speed="0"src="<?= $page->mobile_opener_pic_4()->url() ?>" alt="">
      <img class="mobile_opener_pic_3 rellax" data-rellax-speed="0.5" src="<?= $page->mobile_opener_pic_3()->url() ?>" alt="">
      <img class="mobile_opener_pic_2 rellax" data-rellax-speed="0" src="<?= $page->mobile_opener_pic_2()->url() ?>" alt="">
      <img class="mobile_opener_pic_1 rellax" data-rellax-speed="-0.5" src="<?= $page->mobile_opener_pic_1()->url() ?>" alt="">
    </div>
</section>

<section id="Project" class="project project_background">
  <div class="container project_content content space_bottom_80p">
    <h2><?= $page->secTitle()->html() ?></h2>
     <p class="big_brot"> <?= $page->text_1()->ktr() ?></p>
     <p class="big_brot einzug"> <?= $page->text_2()->ktr() ?></p>
     <p class="big_brot einzug"> <?= $page->text_3()->ktr() ?></p>
  </div>
</section>
<?php snippet('join') ?>
<?php snippet('survey-banner') ?>
<?php snippet('about') ?>
<?php snippet('support-banner') ?>
<?php snippet('footer') ?>
