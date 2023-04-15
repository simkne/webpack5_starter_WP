<?php

/**
 * Navigation layout.
 *
 * @Author: sim kne
 * @Date: 2023-05
 *
 */
?>
<nav id="nav" class="nav-primary nav-menu">

  <div id="menu-items-wrapper" class="menu-items-wrapper">
    <?php wp_nav_menu(array(
      'theme_location' => 'main-menu',
      'container'      => false,
      'depth'          => 4,
      'menu_class'     => 'menu-items',
      'menu_id'        => 'main-menu',
      'echo'           => true,
      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'has_dropdown'   => true,
    )); ?>
  </div>

</nav>