<?php
require_once 'consultas.php';

$usuario = new Usuario();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Registro de Usuarios</title>

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Inicio</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrados<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="registro.php">Agregar</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="index.php">Lista</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron center-block">
                <p class="text-center">¡Rellene con sus datos!</p>
            </div>
            <form method="POST">

                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess1">Ingrese sus nombres*</label>
                    <input type="text" class="form-control" id="inputSuccess1">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputSuccess1">Ingrese sus apellidos*</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div>
                <div class="form-group has-error">
                    <label class="control-label" for="inputSuccess1">Ingrese su usuario de Twitter*</label>
                    <input type="text" class="form-control" id="inputError1">
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Guardar</a>
                </div>
            </form>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>