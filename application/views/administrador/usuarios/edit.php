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
      <li><a href="<?php echo base_url()?>administrador/usuarios/view/<?php echo $usuario->id; ?>"><?php echo $usuario->username; ?></a></li>
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
            <h3 class="box-title">Agregar</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="<?php echo base_url();?>administrador/usuarios/update" method="POST">
            <input type="hidden" name="id_usuario" value="<?php echo $usuario->id?>">
            <div class="box-body col-md-6">
              <div class="form-group col-md-6">
                    <label for="area_usuario">Area:</label>
                    <select name="area_usuario" id="area_usuario" class="form-control">
                        <?php foreach($areas as $rol):?>
                            <option value="<?php echo $rol->id;?>" <?php echo $rol->id==$usuario->id_area
                            ? "selected":"";?> ><?php echo $rol->nombre;?></option>
                        <?php endforeach;?>
                    </select>

                </div>

              <div class="form-group col-md-6">
                <label for="rol_usuario">Rol:</label>
                <select name="rol_usuario" id="rol_usuario" class="form-control">
                    <?php foreach($roles as $rol):?>
                        <option value="<?php echo $rol->id;?>" <?php echo $rol->id==$usuario->id_rol
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
