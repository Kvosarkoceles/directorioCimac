<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Agregar
      <small>Usuaria</small>
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
            <h3 class="box-title">Agregar</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url();?>mantenimiento/roles/store" method="POST">

            <div class="box-body col-md-6">
              <div class="form-group col-md-6">
                <label for="nombre_rol">Nombres</label>
                <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" value="<?php echo set_value('nombre_rol');?>">
                <?php echo form_error("nombre_rol","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="descripcion_rol">Apellidos</label>
                <input type="text" class="form-control" id="descripcion_rol" name="descripcion_rol" value="<?php echo set_value('descripcion_rol');?>">
                <?php echo form_error("descripcion_rol","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-12">
                <label for="descripcion_rol">Username</label>
                <input type="text" class="form-control" id="descripcion_rol" name="descripcion_rol" value="<?php echo set_value('descripcion_rol');?>">
                <?php echo form_error("descripcion_rol","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="descripcion_rol">Password</label>
                <input type="password" class="form-control" id="descripcion_rol" name="descripcion_rol" value="<?php echo set_value('descripcion_rol');?>">
                <?php echo form_error("descripcion_rol","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="descripcion_rol">Confirmacion de password</label>
                <input type="password" class="form-control" id="descripcion_rol" name="descripcion_rol" value="<?php echo set_value('descripcion_rol');?>">
                <?php echo form_error("descripcion_rol","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-12">
                <label for="descripcion_rol">Avatar</label>
                <input type="file" class="form-control" id="descripcion_rol" name="descripcion_rol" value="<?php echo set_value('descripcion_rol');?>">
                <?php echo form_error("descripcion_rol","<small class='text-danger'>","</small>"); ?>
              </div>

              <div class="form-group col-md-6">
                    <label for="estatus_rol">Area:</label>
                    <select name="estatus_rol" id="estatus_rol" class="form-control">
                        <?php foreach($areas as $rol):?>
                          <option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

              <div class="form-group col-md-6">
                <label for="estatus_rol">Rol:</label>
                <select name="estatus_rol" id="estatus_rol" class="form-control">
                  <?php foreach($roles as $rol):?>
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
