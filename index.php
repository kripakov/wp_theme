<?php get_header(); ?>
      <div class="container intell">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="intell-text">
              <p><?php echo get_bloginfo('description') ?></p><span>We’re small but impressive creative agency.</span>
            </div>
            <div class="intell-btn"><a href="javascript:void(0);">READ MORE</a></div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
        </div>
      </div>
    </div>
    <div class="section description">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="sec1">
                  <h2>Peace <br>of Mind.</h2>
                  <p>You’re safe with us. The privacy and security of your financial information is your top</p><a href="javascript:void(0);">More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="sec2">
                  <h2>Free.<br>Actually free</h2>
                  <p>No more pricing grids. No more fine print. Sending and receivin cash  is free without gimmicks</p><a href="javascript:void(0);">More</a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="sec3">
                  <h2>Simple <br>payments.</h2>
                  <p>The same debit card you use to buy coffee lets deposit money staught to your bank account</p><a href="javascript:void(0);">More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section portfolio">
      <div class="container">
        <div class="row">
        <?php if(have_posts()) : query_posts('p=25');
          while(have_posts()) : the_post();?>
          <div class="book col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <?php if(has_post_thumbnail()) : ?>
            <div class="mac">
              <img src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ?>">
              <?php the_post_thumbnail(array(528,301)); ?>
            </div>
          <?php endif; ?>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h2>PORTFOLIO.</h2>
              <?php the_content(); ?>
            <a href="javascript:void(0);">More</a>
          </div>
        </div>
      <? endwhile; endif; wp_reset_query(); ?>
      </div>
    </div>
    <div class="section team">
      <div class="container">
        <div class="row">
          <div class="team-top">
            <h2>Our team.</h2>
            <p>They are big but still friendly.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section command">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if(have_posts()) : query_posts('p=28');
                while (have_posts()) : the_post(); ?>

                <?php the_post_thumbnail(array(220,220)); ?>
              

              <img src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ?>">
              
              <?php the_content(); ?>
            <? endwhile; endif; wp_reset_query(); ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if(have_posts()) : query_posts('p=32');
              while (have_posts()) : the_post(); ?>

              <?php the_post_thumbnail(array(220,220)); ?>
            

              <img src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ?>">

              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
            <? endwhile; endif; wp_reset_query(); ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if(have_posts()) : query_posts('p=35');
              while (have_posts()) : the_post(); ?>

              <?php the_post_thumbnail(array(220,220)); ?>
            
              <img src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large') ?>">
              <h2><?php the_title(); ?></h2>

              <?php the_content(); ?>

              <a href="javascript:void(0);">More</a>
            <? endwhile; endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="section border">
      <div class="container">
        <div class="row">
          <div class="b col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>