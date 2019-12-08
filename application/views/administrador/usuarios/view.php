<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Usuarias
      <small>CIMAC</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url()?>administrador/usuarios">Usuarias</a></li>
      <!-- <li class="active"><?php echo $area->nombre; ?></li>-->
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">

      <div class="col-md-6">

        <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url()?>uploads/imagenes/usuarios/128x128/<?php echo $usuario->avatar; ?>" alt="User profile picture">

                <h3 class="profile-username text-center">  <?php echo $usuario->nombres." ".$usuario->apellidos; ?></h3>

              <p class="text-muted text-center"><?php echo $usuario->username; ?></p>


              <strong><i class="fa fa-book margin-r-5"></i> Nombres</strong>

              <p class="text-muted">
              <?php echo $usuario->nombres; ?>
              </p>

              <hr>
              <strong><i class="fa  fa-pencil-square-o margin-r-5"></i> Apellidos</strong>

              <p class="text-muted">
                <?php echo $usuario->apellidos; ?>
              </p>

              <hr>




              <strong><i class="fa fa-check-square-o margin-r-5"></i>Nombre de Usuario</strong>
              <p class="text-muted">
                 <?php echo $usuario->username; ?>
              </p>


              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Password</strong>
              <p class="text-muted">
                 <a href="#">Restablecer</a>
              </p>
              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Area</strong>
              <p class="text-muted">
                 <?php echo $usuario->area; ?>
              </p>
              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Rol</strong>
              <p class="text-muted">
                 <?php echo $usuario->rol; ?>
              </p>
              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Estatus</strong>
              <p class="text-muted">
                 <?php echo $usuario->status; ?>
              </p>
              <hr>


              <a href="<?php echo base_url()?>administrador/usuarios/edit/<?php echo $usuario->id;?>" class="btn btn-danger btn-block"><b>Editar</b></a>
            </div>
            <!-- /.box-body -->
          </div>


















        <!--       <a class="btn btn-block btn-danger btn-sm" href="<?php echo base_url()?>mantenimiento/roles/edit/<?php echo $area->id; ?>">Editar</a>-->

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
