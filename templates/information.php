<?php 
  /* Template Name:  Полезная информация */
  get_header(); 
  ?>
  <!-- Полезная информация -->
  <div class="information_page">
    <div class="container">
			<!-- Кованная полоса -->
      <div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 8, ARRAY_A ) ['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
				<?php 
                $posts = get_posts([
                    'numberposts' => -1, /* если 'numbers' => -1 то без ограничений */
                    'category' => 8,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppres_filter' => true
                ]);
                foreach($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-3 col-lg-6 col-sm-12">
                    <?php the_post_thumbnail( ' ' ); ?>
						        <h3><?php the_title(); ?></h3>  
				            </div>
                <?php
                }
                wp_reset_postdata();
                ?>
			</div>
			<!-- Ручки -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 9, ARRAY_A ) ['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			          <?php 
                $posts = get_posts([
                    'numberposts' => -1, /* если 'numbers' => -1 то без ограничений */
                    'category' => 9,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppres_filter' => true
                ]);
                foreach($posts as $post) {
                    setup_postdata($post);
                ?>
                    <div class="col-3 col-lg-6 col-sm-12">
					            <?php the_post_thumbnail( '' ); ?>
						          <h3><?php the_title(); ?></h3>  
				            </div>
                <?php
                }
                wp_reset_postdata();
                ?>
			</div>
			<!-- Элементы ковки -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 10, ARRAY_A ) ['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php 
                $posts = get_posts([
                    'numberposts' => -1, /* если 'numbers' => -1 то без ограничений */
                    'category' => 10,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppres_filter' => true
                ]);
                foreach($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-3 col-lg-6 col-sm-12">
					    <?php the_post_thumbnail( '' ); ?>
						<h3><?php the_title(); ?></h3>  
				    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
			</div>
			<!-- Цвет -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 11, ARRAY_A ) ['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php 
                $posts = get_posts([
                    'numberposts' => -1, /* если 'numbers' => -1 то без ограничений */
                    'category' => 11,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppres_filter' => true
                ]);
                foreach($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-3 col-lg-6 col-sm-12">
					    <?php the_post_thumbnail( '' ); ?>
						<h3><?php the_title(); ?></h3>  
				    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
			</div>
			<!-- Рисунок МДФ 10мм -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 12, ARRAY_A ) ['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php 
                $posts = get_posts([
                    'numberposts' => -1, /* если 'numbers' => -1 то без ограничений */
                    'category' => 12,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppres_filter' => true
                ]);
                foreach($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-3 col-lg-6 col-sm-12">
					    <?php the_post_thumbnail( '' ); ?>
						<h3><?php the_title(); ?></h3>  
				    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
			</div>
			<!-- Рисунок МДФ 16мм -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 13, ARRAY_A ) ['name']; ?></h2>
        </div>
      </div>
			<div class="row information_grid">
			<?php 
                $posts = get_posts([
                    'numberposts' => -1, /* если 'numbers' => -1 то без ограничений */
                    'category' => 13,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_type' => 'post',
                    'suppres_filter' => true
                ]);
                foreach($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="col-3 col-lg-6 col-sm-12">
					    <?php the_post_thumbnail( '' ); ?>
						<h3><?php the_title(); ?></h3>  
				    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
			</div>
			<!-- Цвета МДФ -->
			<div class="row information_title">
        <div class="col-12">
          <h2><?= get_category( 14, ARRAY_A ) ['name']; ?></h2>
        </div>
      </div>
		<div class="row information_grid">
		<?php 
			$posts = get_posts([
				'numberposts' => -1, /* если 'numbers' => -1 то без ограничений */
				'category' => 14,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'post',
				'suppres_filter' => true
			]);
			foreach($posts as $post) {
				setup_postdata($post);
				?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail( '' ); ?>
					<h3><?php the_title(); ?></h3>  
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>
    </div>
  </div>
  <!-- Футер -->
  <?php wp_footer(); ?>
  <?php get_footer(); ?>