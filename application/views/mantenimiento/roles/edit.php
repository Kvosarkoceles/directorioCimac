<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Editar
      <small><?php echo $area->nombre; ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/roles">Roles</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/roles/view/<?php echo $area->id; ?>"><?php echo $area->nombre; ?></a></li>
      <li class="active">Editar</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Editar</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url();?>mantenimiento/roles/update" method="POST">
            <input type="hidden" name="id_rol" value="<?php echo $area->id?>">
            <div class="box-body col-md-6">
              <div class="form-group col-md-12">
                <label for="nombre_rol">Nombre</label>
                <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" value="<?php echo $area->nombre; ?>">
              </div>
              <div class="form-group col-md-12">
                <label for="descripcion_rol">Descripcion</label>
                <input type="text" class="form-control" id="descripcion_rol" name="descripcion_rol" value="<?php echo $area->descripcion; ?>">
              </div>
              <div class="form-group col-md-3">
                    <label for="estatus_rol">Estatus:</label>
                    <select name="estatus_rol" id="estatus_rol" class="form-control">
                        <?php foreach($menu_estatus as $rol):?>
                            <option value="<?php echo $rol->id;?>" <?php echo $rol->id==$area->id_estatus
                            ? "selected":"";?> ><?php echo $rol->nombre;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-danger">Guardar</button>
                  </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">

            </div>
          </form>

        </div>
        <!-- /.box -->




      </div>
      <!--/.col (left) -->
      <!-- right column -->

      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
