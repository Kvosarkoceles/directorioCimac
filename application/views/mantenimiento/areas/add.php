<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Agregar
      <small>Area</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/areas">Areas</a></li>
      <li class="active">Agregar</li>
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
            <h3 class="box-title">Agregar</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url();?>mantenimiento/areas/store" method="POST">

            <div class="box-body col-md-6">
              <div class="form-group col-md-12">
                <label for="nombre_area">Nombre</label>
                <input type="text" class="form-control" id="nombre_area" name="nombre_area" value="<?php echo set_value('nombre_area');?>">
                <?php echo form_error("nombre_area","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-12">
                <label for="descripcion_area">Descripcion</label>
                <input type="text" class="form-control" id="descripcion_area" name="descripcion_area" value="<?php echo set_value('descripcion_area');?>">
                <?php echo form_error("descripcion_area","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-12">
                    <label for="estatus_area">Estatus:</label>
                    <select name="estatus_area" id="estatus_area" class="form-control">
                        <?php foreach($menu_estatus as $rol):?>
                          <option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
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
