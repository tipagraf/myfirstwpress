<?php 
  /* 
  Template Name:  Политика конфиденциальности 
  */
  get_header(); 
  ?>
  <!-- Текст политики конфиденциальности -->
  <div class="policy" style="background-image: url(<?php echo CFS()-> get('background_policy'); ?>)">
    <div class="container">
      <div class="row">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
  <?php get_footer(); ?>