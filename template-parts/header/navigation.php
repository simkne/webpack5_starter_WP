<?php
/**
 * Navigation layout.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:22:26
 * @Last Modified by:   Tuomas Marttila
 * @Last Modified time: 2023-02-17 10:31:08
 *
 */


?>

<nav id="nav" class="nav-primary nav-menu">


  <div id="menu-items-wrapper" class="menu-items-wrapper">
    <?php wp_nav_menu( array(
      'theme_location' => 'main-menu',
      'container'      => false,
      'depth'          => 4,
      'menu_class'     => 'menu-items',
      'menu_id'        => 'main-menu',
      'echo'           => true,
      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'has_dropdown'   => true,
    ) ); ?>
  </div>

</nav>
