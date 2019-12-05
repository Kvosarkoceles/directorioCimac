<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Configuración</li>
      <li><a href="<?php echo base_url();?>/mantenimiento/areas"><i class="fa fa-circle-o text-red"></i> <span>Areas</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      <li class="header">Mantenimiento</li>
      <li class="treeview menu-open" style="height: auto;">
            <a href="#">
              <i class="fa fa-folder text-green"></i> <span>Administrador</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: block;">
              <li><a href="<?php echo base_url();?>administrador/usuarios"><i class="fa fa-users text-aqua"></i> Usuarias</a></li>
            </ul>
      </li>
      <li class="treeview menu-open" style="height: auto;">
            <a href="#">
              <i class="fa fa-folder text-red"></i> <span>Configuración</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: block;">
              <li><a href="<?php echo base_url();?>mantenimiento/areas"><i class="fa  fa-industry text-green"></i> Areas</a></li>
              <li><a href="<?php echo base_url();?>mantenimiento/roles"><i class="fa fa-cogs text-yellow"></i> Roles</a></li>

            </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
