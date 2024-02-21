<?php 
  /* Template Name:  О компании */
  get_header(); 
  ?>
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?php CFS()->get('about_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS()->get('about_img'); ?>" alt="О компании">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_header('advantages'); ?>
  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?php CFS()->get('about_pasport_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?php CFS()->get('about_pasport_title'); ?></h2>
          <p><?php CFS()->get('about_pasport_text'); ?></p>
          <a href="<?php CFS()->get('about_pasport_open'); ?>" class="btn" target="_blank"><?php CFS()->get('about_pasport_open_btn'); ?></a>
          <a href="<?php CFS()->get('about_pasport_download'); ?>" class="btn" download=""><?php CFS()->get('about_pasport_download_btn'); ?></a>
        </div>
      </div>
    </div>
  </div>
  <?php wp_footer(  ); ?>
  <?php get_footer(); ?>