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
      <li><a href="<?php echo base_url()?>administrador/usuarios">Usuarias</a></li>
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
          <form role="form" action="<?php echo base_url();?>administrador/usuarios/store" method="POST" enctype="multipart/form-data">

            <div class="box-body col-md-6">
              <div class="form-group col-md-6">
                <label for="nombres_usuario">Nombres</label>
                <input type="text" class="form-control" id="nombres_usuario" name="nombres_usuario" value="<?php echo set_value('nombres_usuario');?>">
                <?php echo form_error("nombres_usuario","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="apellidos_usuario">Apellidos</label>
                <input type="text" class="form-control" id="apellidos_usuario" name="apellidos_usuario" value="<?php echo set_value('apellidos_usuario');?>">
                <?php echo form_error("apellidos_usuario","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="username_usuario">Username</label>
                <input type="text" class="form-control" id="username_usuario" name="username_usuario" value="<?php echo set_value('username_usuario');?>">
                <?php echo form_error("username_usuario","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="titulo">Archivo</label>
                <input type="file" class="form-control" name="mi_archivo" id="mi_archivo" accept=".gif, .jpg, .png" >
                <?php echo form_error("mi_archivo","<span class='text-danger'>","</span>"); ?>
              </div>

              <div class="form-group col-md-6">
                <label for="password_usuario">Password</label>
                <input type="password" class="form-control" id="password_usuario" name="password_usuario" value="<?php echo set_value('password_usuario');?>">
                <?php echo form_error("password_usuario","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="confirmacionPasword_usuario">Confirmacion de password</label>
                <input type="password" class="form-control" id="confirmacionPasword_usuario" name="confirmacionPasword_usuario" value="<?php echo set_value('confirmacionPasword_usuario');?>">
                <?php echo form_error("confirmacionPasword_usuario","<small class='text-danger'>","</small>"); ?>
              </div>


              <div class="form-group col-md-6">
                    <label for="area_usuario">Area:</label>
                    <select name="area_usuario" id="area_usuario" class="form-control">
                        <?php foreach($areas as $rol):?>
                          <option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

              <div class="form-group col-md-6">
                <label for="rol_usuario">Rol:</label>
                <select name="rol_usuario" id="rol_usuario" class="form-control">
                  <?php foreach($roles as $rol):?>
                    <option value="<?php echo $rol->id;?>"><?php echo $rol->nombre;?></option>
                  <?php endforeach;?>
                </select>
              </div>

              <div class="form-group col-lg-6">
                  <label for="institucion">Institucion:</label>
                  <input type="text" class="form-control" id="institucion" name="institucion" value="CIMAC">
              </div>
              <div class="form-group col-lg-6">
                  <label for="domicilio_laboral">Domicilio Laboral:</label>
                  <input type="text" class="form-control" id="domicilio_laboral" name="domicilio_laboral" value="Balderas #86 Colonia Centro">
              </div>
              <div class="form-group col-lg-12">
                  <label for="domicilio_particular">Domicilio Particular:</label>
                  <input type="text" class="form-control" id="domicilio_particular" name="domicilio_particular">
              </div>





              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-danger">Guardar</button>
              </div>
            </div>
            <div class="box-body col-md-6">
              <div class="form-group col-lg-6">
                   <label for="telefono">Telefono:</label>
                  <input type="text" class="form-control" id="telefono" name="telefono">
              </div>
              <div class="form-group col-lg-6">
                           <label for="id_telefono">Tipo:</label>
                  <select name="id_telefono" id="id_telefono" class="form-control">
                      <?php foreach($telefonos as $telefono):?>
                          <option value="<?php echo $telefono->id;?>"><?php echo $telefono->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>



              <div class="form-group col-lg-6">
                   <label for="email">Correo electronico:</label>
                  <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group col-lg-6">
                           <label for="telefono">Tipo:</label>
                  <select name="id_email" id="id_email" class="form-control">
                      <?php foreach($emails as $email):?>
                          <option value="<?php echo $email->id;?>"><?php echo $email->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>

              <div class="form-group col-lg-12">
                  <label for="institucion">Observaciones y/o datos de asistente:</label>
                  <textarea class="form-control" id="institucion" name="datos_asistente" rows="10" id="datos_asistente"></textarea>
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
