<?php 
  /* Template Name:  Контакты */
  get_header(); 
  ?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
              <?php 
             $loop = CFS()->get('branches');
             foreach ($loop as $row) {
              ?>                            
              <div class="contacts-block">
                <h2><?php echo $row['branches_title']; ?></h2>
                <div class="contacts-inner">
                  <div class="contacts-card">
                    <img src="<?php echo CFS()->get('contact_message_img'); ?>" alt="пишите">
                    <h3><?php echo CFS()->get('contact_message'); ?></h3>
                    <p><?php echo $row['branches_email']; ?></p>
                  </div>
                  <div class="contacts-card">
                    <img src="<?php echo CFS()->get('contact_call_img'); ?>" alt="звоните">
                    <h3><?php echo CFS()->get('contact_call'); ?></h3>
                    <p><?php echo $row['branches_phone']; ?></p>
                  </div>
                  <div class="contacts-card">
                    <img src="<?php echo CFS()->get('contact_adress_img'); ?>" alt="приезжайте">
                    <h3><?php echo CFS()->get('contact_adress'); ?></h3>
                    <p><?php echo $row['branches_adress']; ?></p>
                  </div>
                </div>
                <?php echo $row['branches_map']; ?>
              </div>

              <?php
             }
            ?>                           
        </div>
        <div class="col-3 col-lg-12" id="cities">
          <h2><?= CFS()->get('dealers_title'); ?></h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
            <?php 
                $loop = CFS()->get('dealers');
                foreach ($loop as $row) {
              ?>
                <li><p class="city"><?= $row['dealers_adress']; ?></p></li>
            <?php
                }
            ?>            
          </ul>
        </div>
      </div>
    </div>
  </div>
    <?php wp_footer(); ?>
  	<?php get_footer(); ?>