<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Agregar
      <small>Email</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/roles">Roles</a></li>
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
            <h3 class="box-title">Categorias</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url();?>mantenimiento/emails/store" method="POST">

            <div class="box-body col-md-6">
              <div class="form-group col-md-12">
                <label for="nombre_CategoriaEmail">Nombre</label>
                <input type="text" class="form-control" id="nombre_CategoriaEmail" name="nombre_CategoriaEmail" value="<?php echo set_value('nombre_CategoriaEmail');?>">
                <?php echo form_error("nombre_CategoriaEmail","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-12">
                <label for="descripcion_CategoriaEmail">Descripcion</label>
                <input type="text" class="form-control" id="descripcion_CategoriaEmail" name="descripcion_CategoriaEmail" value="<?php echo set_value('descripcion_CategoriaEmail');?>">
                <?php echo form_error("descripcion_CategoriaEmail","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-12">
                    <label for="estatus_CategoriaEmail">Estatus:</label>
                    <select name="estatus_CategoriaEmail" id="estatus_CategoriaEmail" class="form-control">
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
