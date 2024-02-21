
<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
                <?php 
                wp_nav_menu([
                    'theme_location' => 'bottom',
                    'container' => '',
                    'items_wrap' => '%3$s'
                ]);
                ?>
                						
                <span class="accent-color">&copy; </span> <?= CFS()->get('footer_text'); ?>, 2020-<?= date('Y'); ?>  
                <!-- если в пхп указать ?= bloginfo('name'); ?> то появится название сайта -->
                </div>
            </div>
		</div>
	</div>
    <?php wp_footer(); ?>
   <?php get_footer(); ?>
   
</body>
 
</html>

 