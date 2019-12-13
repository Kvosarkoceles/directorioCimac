usuarios<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Contactos
      <small>CIMAC</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Configuración</a></li>
      <li class="active">Contactos</li>
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
                <th>Areas</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Institucion</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody>
                <?php if(!empty($contactos)):?>
                    <?php foreach($contactos as $contacto):?>
                      <tr>
                          <td><?php echo $contacto->id;?></td>
                          <td><?php echo $contacto->id_area;?></td>
                          <td><?php echo $contacto->nombres;?></td>
                          <td><?php echo $contacto->apellidos;?></td>
                          <td><?php echo $contacto->institucion;?></td>
                          <td>
                            <?php if ($contacto->id_estatus == 1): ?>
                              <a href="<?php echo base_url()?>administrador/usuarios/disabled/<?php echo $contacto->id;?>" ><span class="fa  fa-close text-red"></span></a>
                            <?php else: ?>
                              <a href="<?php echo base_url()?>administrador/usuarios/enabled/<?php echo $contacto->id;?>" ><span class="fa  fa-check text-aqua"></span></a>
                            <?php endif; ?>

                          </td>
                       </tr>
                    <?php endforeach;?>
                <?php endif;?>



              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Areas</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Institucion</th>
                <th>Opciones</th>
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
