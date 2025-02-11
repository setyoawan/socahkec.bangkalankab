

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Socah </div>
    </a>


    <!-- Divider -->
    
   <hr class="sidebar-divider ">

<!-- query menu-->

<?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "SELECT user_menu.id,menu 
            FROM user_menu JOIN user_access_menu 
            ON user_menu.id = user_access_menu.menu_id  
            WHERE user_access_menu.role_id = $role_id
            ORDER BY user_access_menu.menu_id ASC ";

$menu = $this->db->query($queryMenu)->result_array();

?>


<!--Looping menu-->
<?php foreach ($menu as $m) : ?>

<!-- Heading -->
<div class="sidebar-heading">
  <?= $m['menu']; ?>
</div>

<!--menyiapkan sub-menu sesuai menu-->

            <?php 
            $menuId = $m['id'];
            $querySubMenu = "SELECT * FROM user_sub_menu 
                            JOIN user_menu ON user_sub_menu.menu_id = user_menu.id
                            WHERE user_sub_menu.menu_id = $menuId 
                            AND user_sub_menu.is_active = 1
                          ";

            $subMenu = $this->db->query($querySubMenu)->result_array();

            ?>

            <?php foreach ($subMenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>

            <!-- Nav Item - Dashboard SUB MENU NYALA KETIKA DI KLIK( DIHALAMAN ITU-->
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
              <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                <i class="<?= $sm['icon']; ?>"></i>
                <span><?= $sm['title']; ?></span></a>
            </li>
            <?php endforeach; ?>

<!-- Divider -->
<hr class="sidebar-divider mt-3">

<?php endforeach; ?>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="far fa-fw fa-file-word"></i>
          <span>Artikel</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Artikel:</h6>
            <a class="collapse-item" href="<?= base_url('crud/input'); ?>">Posting</a>
            <a class="collapse-item" href="<?= base_url('crud/index'); ?>">Lihat</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="far fa-fw fa-file-word"></i>
          <span>Agenda</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Keagendaan Socah:</h6>
            <a class="collapse-item" href="<?= base_url('crud2/input'); ?>">Posting</a>
            <a class="collapse-item" href="<?= base_url('crud2/index'); ?>">Lihat</a>
            
           
          </div>
        </div>
      </li> 

 <li class="nav-item">
  <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
    <i class="fas fa-fw fa-sign-out-alt"></i>
    <span>Logout</span></a>
</li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->