<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Editar
      <small><?php echo $telefono->nombre; ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/telefonos">Telefonos</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/telefonos/view/<?php echo $telefono->id; ?>"><?php echo $telefono->nombre; ?></a></li>
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
          <form role="form" action="<?php echo base_url();?>mantenimiento/telefonos/update" method="POST">
            <input type="hidden" name="id_CategoriaTelefono" value="<?php echo $telefono->id?>">
            <div class="box-body col-md-6">
              <div class="form-group col-md-12">
                <label for="nombre_CategoriaTelefono">Nombre</label>
                <input type="text" class="form-control" id="nombre_CategoriaTelefono" name="nombre_CategoriaTelefono" value="<?php echo $telefono->nombre; ?>">
              </div>
              <div class="form-group col-md-12">
                <label for="descripcion_CategoriaTelefono">Descripcion</label>
                <input type="text" class="form-control" id="descripcion_CategoriaTelefono" name="descripcion_CategoriaTelefono" value="<?php echo $telefono->descripcion; ?>">
              </div>
              <div class="form-group col-md-3">
                    <label for="estatus_CategoriaTelefono">Estatus:</label>
                    <select name="estatus_CategoriaTelefono" id="estatus_CategoriaTelefono" class="form-control">
                        <?php foreach($menu_estatus as $rol):?>
                            <option value="<?php echo $rol->id;?>" <?php echo $rol->id==$telefono->id_estatus
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
