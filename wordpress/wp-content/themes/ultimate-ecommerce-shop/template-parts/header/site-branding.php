<?php 
/*
* Display Logo and contact details
*/
?>
<div class="headerbox">
  <div class="container-fluid">
    <div class="row">
      <div class="call col-lg-4 col-md-4">
        <?php if( get_theme_mod( 'ultimate_ecommerce_shop_call','' ) != '' || get_theme_mod( 'ultimate_ecommerce_shop_call_text','' ) != '') { ?>
          <i class="fas fa-phone"></i><span class="infotext"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call_text','') ); ?></span>
          <a href="tel:<?php echo esc_url( get_theme_mod('ultimate_ecommerce_shop_call','' )); ?>"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_call','') ); ?></span></a>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="logo">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $blog_info ) ) : ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>
          <?php endif; ?>
          <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
          ?>
            <p class="site-description">
              <?php echo esc_html($description); ?>
            </p>
          <?php endif; ?>
        </div>
      </div>    
      <div class="email col-lg-4 col-md-4">
        <?php if( get_theme_mod( 'ultimate_ecommerce_shop_mail','' ) != '' || get_theme_mod( 'ultimate_ecommerce_shop_mail_text','' ) != '') { ?>
          <i class="far fa-envelope"></i><span class="infotext"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail_text','') ); ?></span>
          <a href="mailto:<?php echo esc_url( get_theme_mod('ultimate_ecommerce_shop_mail','') ); ?>"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('ultimate_ecommerce_shop_mail','') ); ?></span></a>
        <?php } ?>
      </div>
      <div class="clear"></div>
    </div>
  </div> 
</div>
