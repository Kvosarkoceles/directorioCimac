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
     <li class="active"><?php echo $usuario->username; ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">

      <div class="col-md-6">

        <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url()?>uploads/imagenes/usuarios/thumbs/<?php echo $usuario->avatar; ?>" alt="User profile picture">

                <h3 class="profile-username text-center">  <?php echo $usuario->nombres." ".$usuario->apellidos; ?></h3>

              <p class="text-muted text-center"><?php echo $usuario->username; ?></p>


              <strong><i class="fa fa-book margin-r-5"></i> Nombres</strong>

              <p class="text-muted">
              <?php echo $usuario->nombres; ?>
               <a class="pull-right" href="<?php echo base_url()?>directorio/contactos/edit/<?php echo $usuario->id_contacto; ?>">Cambiar</a>
              </p>

              <hr>
              <strong><i class="fa  fa-pencil-square-o margin-r-5"></i> Apellidos</strong>

              <p class="text-muted">
                <?php echo $usuario->apellidos; ?>
                 <a class="pull-right" href="<?php echo base_url()?>directorio/contactos/edit/<?php echo $usuario->id_contacto; ?>">Cambiar</a>
              </p>

              <hr>




              <strong><i class="fa fa-check-square-o margin-r-5"></i>Nombre de Usuario</strong>
              <p class="text-muted">
                 <?php echo $usuario->username; ?>
              

              </p>

              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Password</strong>
              <p class="text-muted">
                 <a href="<?php echo base_url()?>administrador/usuarios/passwordReset/<?php echo $usuario->id; ?>" class="pull-right">Restablecer</a>
              </p>
              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Area</strong>
              <p class="text-muted">
                 <?php echo $usuario->area; ?>
                 <a class="pull-right" href="<?php echo base_url()?>administrador/usuarios/edit/<?php echo $usuario->id; ?>">Cambiar</a>
              </p>
              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Rol</strong>
              <p class="text-muted">
                 <?php echo $usuario->rol; ?>
                 <a class="pull-right" href="<?php echo base_url()?>administrador/usuarios/edit/<?php echo $usuario->id; ?>">Cambiar</a>
              </p>
              <hr>

              <strong><i class="fa fa-check-square-o margin-r-5"></i>Estatus</strong>
              <p class="text-muted">
                 <?php echo $usuario->status; ?>
                 <a class="pull-right" href="<?php echo base_url()?>administrador/usuarios/updateStatus/<?php echo $usuario->id; ?>">Cambiar</a>
              </p>
              <hr>



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
