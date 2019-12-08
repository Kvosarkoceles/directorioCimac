<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Telefonos
      <small>CIMAC</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/telefonos">Telefonos</a></li>
      <li class="active"><?php echo $area->nombre; ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">

      <div class="col-md-6">
        <!-- About Me Box -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Categorias Telefonos
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <strong><i class="fa fa-book margin-r-5"></i> Nombre</strong>

            <p class="text-muted">
              <?php echo $area->nombre; ?>
            </p>

            <hr>

            <strong><i class="fa  fa-pencil-square-o margin-r-5"></i> Descripcion</strong>

            <p class="text-muted">
              <?php echo $area->descripcion; ?>
            </p>

            <hr>

            <strong><i class="fa fa-check-square-o margin-r-5"></i> Estado</strong>
            <p class="text-muted">
              <?php echo $area->estatus; ?>
            </p>



            <hr>



            <p>
              <a class="btn btn-block btn-danger btn-sm" href="<?php echo base_url()?>mantenimiento/telefonos/edit/<?php echo $area->id; ?>">Editar</a>

            </p>
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
