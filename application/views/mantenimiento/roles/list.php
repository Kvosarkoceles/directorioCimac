<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Roles
      <small>CIMAC</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Configuración</a></li>
      <li class="active">Roles</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box box-danger">
          <div class="box-header">
            <h3 class="box-title">Roles</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estatus</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Estatus</th>
              </tr>
              </thead>
              <tbody>
                <?php if(!empty($areas)):?>
                    <?php foreach($areas as $area):?>
                      <tr>
                          <td><?php echo $area->id;?></td>
                          <td><?php echo $area->nombre;?></td>
                          <td><?php echo $area->descripcion;?></td>
                          <td><?php echo $area->estatus;?></td>
                          <td>
                            <a href="<?php echo base_url()?>mantenimiento/roles/view/<?php echo $area->id;?>" ><span class="fa  fa-eye text-green"></span></a>
                          </td>
                          <td>
                            <a href="<?php echo base_url()?>mantenimiento/roles/edit/<?php echo $area->id;?>" ><span class="fa  fa  fa-pencil text-yellow"></span></a>
                          </td>
                          <td>
                            <?php if ($area->id_estatus == 1): ?>
                              <a href="<?php echo base_url()?>mantenimiento/roles/disabled/<?php echo $area->id;?>" ><span class="fa  fa-close text-red"></span></a>
                            <?php else: ?>
                              <a href="<?php echo base_url()?>mantenimiento/roles/enabled/<?php echo $area->id;?>" ><span class="fa  fa-check text-aqua"></span></a>
                            <?php endif; ?>

                          </td>
                       </tr>
                    <?php endforeach;?>
                <?php endif;?>



              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estatus</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Estatus</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <div class="box-body" align="left" >
            <a href="<?php echo base_url()?>mantenimiento/roles/add"  class="btn btn-danger" >Agregar</a>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
