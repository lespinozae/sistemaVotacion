<?php
require_once "header.php";
?>
<style>
  form {
    padding: 10px;
  }

  button{
    margin: 10px;
  }
</style>
<i class="fa fa-heart"></i><div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <span class="anchor" id="formLogin"></span>
                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin">
                                <div class="form-group">
                                    <label for="uname1">Usuario </label>
                                    <input type="text" placeholder="Nombre de usuario" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña </label>
                                    <input type="password" placeholder="Contraseña" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
                                </div>
                                <button type="button" class="btn btn-success btn-lg float-right">Login</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
<?php
    require_once "footer.php";
     ?>
