<?php
  // Fix menu overlap bug..
  if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
?>
<header class="banner">
    <nav class="navbar navbar-default" role="navigation">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <div id="navigationMenu" class="drawer drawer-right dw-xs-10 dw-sm-6 dw-md-4 fold" aria-labelledby="navigationMenu">
          <div class="drawer-controls" style="margin-top:1rem;">
              <a href="#navigationMenu" data-toggle="drawer" href="#navigationMenu" aria-foldedopen="false" aria-controls="navigationMenu" class="btn btn-primary btn-sm">Menu</a>
          </div>
          <div class="drawer-contents">
              <div class="drawer-heading">
                  <h2 class="drawer-title">Menu</h2>
              </div>

          <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'drawer-nav',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav',
                  'fallback_cb'       => 'wp_bs_drawer_navwalker::fallback',
                  'walker'            => new wp_bs_drawer_navwalker())
              );
          ?>

              <div class="drawer-footer">
                  <small>&copy; Ric Kindle</small>
              </div>
          </div>
      </div>
    </nav>
</header>
