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
      <li><a href="<?php echo base_url()?>mantenimiento/areas">Areas</a></li>
      <li><a href="<?php echo base_url()?>mantenimiento/areas/view/<?php echo $area->id; ?>"><?php echo $area->nombre; ?></a></li>
      <li class="active">Editar</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Editar</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="nombre_area">Nombre</label>
                <input type="text" class="form-control" id="nombre_area" value="<?php echo $area->nombre; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Descripcion</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $area->descripcion; ?>">
              </div>
              <div class="form-group">
                  <label>Estatus</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>              
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-danger">Submit</button>
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
