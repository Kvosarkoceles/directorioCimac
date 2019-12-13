<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Editar
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
            <h3 class="box-title">Editar</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url();?>administrador/usuarios/store" method="POST" enctype="multipart/form-data">

            <div class="box-body col-md-6">
              <div class="form-group col-md-6">
                <label for="nombres_usuario">Nombres</label>
                <input type="text" class="form-control" id="nombres_usuario" name="nombres_usuario" value="<?php echo $usuario->nombres; ?>">
                <?php echo form_error("nombres_usuario","<small class='text-danger'>","</small>"); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="apellidos_usuario">Apellidos</label>
                <input type="text" class="form-control" id="apellidos_usuario" name="apellidos_usuario" value="<?php echo $usuario->apellidos; ?>">
                <?php echo form_error("apellidos_usuario","<small class='text-danger'>","</small>"); ?>
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

              <div class="form-group col-lg-12">
                  <label for="domicilio_particularUsuario">Domicilio Particular:</label>
                  <input type="text" class="form-control" id="domicilio_particularUsuario" name="domicilio_particularUsuario">
              </div>





              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-danger">Guardar</button>
              </div>
            </div>
            <div class="box-body col-md-6">
              <div class="form-group col-lg-6">
                   <label for="telefono_usuario">Telefono:</label>
                  <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario">
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
                   <label for="email_usuario">Correo electronico:</label>
                  <input type="text" class="form-control" id="email_usuario" name="email_usuario">
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
