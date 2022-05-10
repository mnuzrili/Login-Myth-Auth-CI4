<div id="sidebar" class="active">
    <div class="sidebar-wrapper active shadow">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="<?= base_url() ?>/mazer/dist/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?= ($menu == 'dashboard') ? 'active' : '' ?>">
                    <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <?php if (in_groups('admin')) : ?>
                    <li class="sidebar-item <?= ($menu == 'user-list') ? 'active' : '' ?>">
                        <a href="<?= base_url('admin/user') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>User List</span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item ">
                            <a href="layout-default.html">Default Layout</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-vertical-1-column.html">1 Column</a>
                        </li>
                        <li class="submenu-item">
                            <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-rtl.html">RTL Layout</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="layout-horizontal.html">Horizontal Menu</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>