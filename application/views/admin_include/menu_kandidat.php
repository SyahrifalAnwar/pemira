 <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Urora</a>-->
            <a href="<?php echo base_url('admin') ?>" class="logo">
                <img src="https://kprsttnf.com/assets/images/logo-light.png" alt="" class="logo-large">
            </a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft" id="sidebar-main">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="<?php echo base_url('admin') ?>" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Beranda
                        </span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo base_url('secure/logout') ?>" class="waves-effect">
                        <i class="mdi mdi-logout-variant"></i>
                        <span> Logout </span>
                    </a>
                </li>


            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>