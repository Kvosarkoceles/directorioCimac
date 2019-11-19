<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Usuarias
      <small>CIMAC</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Configuración</a></li>
      <li class="active">Areas</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Usuarias</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Username</th>
                <th>Rol</th>
                <th>opciones</th>
              </tr>
              </thead>
              <tbody>
                <?php if(!empty($areas)):?>
                    <?php foreach($areas as $area):?>
                      <tr>
                          <td><?php echo $area->id;?></td>
                          <td><?php echo $area->nombres;?></td>
                          <td><?php echo $area->apellidos;?></td>
                          <td><?php echo $area->email;?></td>
                          <td><?php echo $area->username;?></td>
                          <td><?php echo $area->rol;?></td>
                          <td>
                            <a href="<?php echo base_url()?>admin/usuarios/view/<?php echo $area->id;?>" ><span class="fa  fa-eye text-green"></span></a>
                          </td>
                          <td>
                            <a href="<?php echo base_url()?>admin/usuarios/view/<?php echo $area->id;?>" ><span class="fa  fa-eye text-green"></span></a>
                          </td>
                          <td>
                            <?php if ($area->id_estatus == 1): ?>
                              <a href="<?php echo base_url()?>admin/usuarios/view/<?php echo $area->id;?>" ><span class="fa  fa-eye text-green"></span></a>
                            <?php else: ?>
                              <a href="<?php echo base_url()?>admin/usuarios/view/<?php echo $area->id;?>" ><span class="fa  fa-eye text-red"></span></a>
                            <?php endif; ?>

                          </td>
                       </tr>
                    <?php endforeach;?>
                <?php endif;?>



              </tbody>
              <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Observaciones</th>
                <th>Descripcion</th>
                <th>Estatus</th>
                <th>Ver</th>
                <th>Editar</th>
                <th>Estatus</th>
              </tr>
              </tfoot>
            </table>
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
