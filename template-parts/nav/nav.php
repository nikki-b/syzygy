<?php
    wp_nav_menu( array(
      'theme_location'    => 'primary',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => '',
      'container_id'      => '',
      'menu_class'        => 'nav justify-content-center',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker()
    ) );
?>