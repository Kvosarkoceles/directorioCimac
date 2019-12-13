<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url();?>uploads/imagenes/usuarios/128x128/<?php echo $this->session->userdata('avatar'); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nombres'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Directorio</li>
      <?php if(!empty($areas)):?>
          <?php foreach($areas as $area):?>
            <li>
              <a href="<?php echo base_url();?>directorio/contactos/areas/<?php echo $area->id;?>">
                <i class="fa fa-circle-o text-red"></i>
                 <span><?php echo $area->nombre;?></span>
               </a>
             </li>
          <?php endforeach;?>
      <?php endif;?>

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
              <a href="#"><i class="fa fa-gears text-red"></i> Configuración
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: block;">
                <li><a href="<?php echo base_url();?>mantenimiento/areas"><i class="fa  fa-industry text-green"></i> Areas</a></li>
                <li><a href="<?php echo base_url();?>mantenimiento/roles"><i class="fa fa-cogs text-yellow"></i> Roles</a></li>
                <li class="treeview menu-open">
                  <a href="#"><i class="fa fa-circle-o text-aqua"></i> Categorias
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu" style="display: block;">
                    <li><a href="<?php echo base_url();?>mantenimiento/telefonos"><i class="fa fa-phone text-red"></i> Telefonos</a></li>
                    <li><a href="<?php echo base_url();?>mantenimiento/emails"><i class="fa fa-envelope text-green"></i> Correos</a></li>
                  </ul>
                </li>
              </ul>
            </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
