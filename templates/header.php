  <nav class="navbar navbar-default" role="navigation">
    <div id="drawerExample" class="drawer dw-xs-10 dw-sm-6 dw-md-4 fold" aria-labelledby="drawerExample">
        <div class="drawer-controls">
            <a href="#drawerExample" data-toggle="drawer" href="#drawerExample" aria-foldedopen="false" aria-controls="drawerExample" class="btn btn-primary btn-sm">Menu</a>
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
                <small>&copy; Mike iLL/mZoo.org</small>
            </div>
        </div>
    </div>
  </nav>
</header>
