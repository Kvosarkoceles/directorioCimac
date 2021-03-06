usuarios<!-- Content Wrapper. Contains page content -->
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
      <li class="active">Usuarias</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box box-danger">
          <div class="box-header">
            <h3 class="box-title">Usuarias</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>


                <th>Username</th>
                <th>Area</th>
                  <th>Rol</th>
                <th>Ver</th>

                <th>Estatus</th>
              </tr>
              </thead>
              <tbody>
                <?php if(!empty($usuarios)):?>
                    <?php foreach($usuarios as $usuario):?>
                      <tr>
                          <td><?php echo $usuario->id;?></td>
                          <td><?php echo $usuario->username;?></td>
                          <td><?php echo $usuario->area;?></td>
                          <td><?php echo $usuario->rol;?></td>
                          <td>
                            <a href="<?php echo base_url()?>administrador/usuarios/view/<?php echo $usuario->id;?>" ><span class="fa  fa-eye text-green"></span></a>
                          </td>

                          <td>
                            <?php if ($usuario->id_estatus == 1): ?>
                              <a href="<?php echo base_url()?>administrador/usuarios/disabled/<?php echo $usuario->id;?>" ><span class="fa  fa-close text-red"></span></a>
                            <?php else: ?>
                              <a href="<?php echo base_url()?>administrador/usuarios/enabled/<?php echo $usuario->id;?>" ><span class="fa  fa-check text-aqua"></span></a>
                            <?php endif; ?>

                          </td>
                       </tr>
                    <?php endforeach;?>
                <?php endif;?>



              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Username</th>
                <th>Area</th>
                  <th>Rol</th>
                <th>Ver</th>

                <th>Estatus</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <div class="box-body" align="left" >
            <a href="<?php echo base_url()?>administrador/usuarios/add"  class="btn btn-danger" >Agregar</a>

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
