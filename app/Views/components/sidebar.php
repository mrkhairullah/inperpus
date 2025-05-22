<?php
$menus = [
  'Home',
  [
    'name' => 'Dashboard',
    'link' => 'dashboard',
    'icon' => 'ti ti-layout-dashboard'
  ],
  'Master',
  [
    'name' => 'Rak',
    'link' => 'racks.index',
    'icon' => 'ti ti-book'
  ],
  [
    'name' => 'Buku',
    'link' => 'books.index',
    'icon' => 'ti ti-book'
  ],
];
?>

<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="./index.html" class="fs-8 fw-bold text-nowrap text-center logo-img">
        <span class="text-dark">CUY</span>PERPUS
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <?php foreach ($menus as $menu) : ?>
          <?php if (gettype($menu) === 'string') : ?>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"><?= $menu; ?></span>
            </li>
          <?php else : ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url_to($menu['link']) ?>" aria-expanded="false">
                <span>
                  <i class="<?= $menu['icon']; ?>"></i>
                </span>
                <span class="hide-menu"><?= $menu['name']; ?></span>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>