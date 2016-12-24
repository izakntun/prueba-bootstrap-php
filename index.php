<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lista de Registrados</title>

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
                <p class="text-center">¡Lista de Registrados!</p>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Twitter</th>
                            <th>accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="#" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="#" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="#" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="#" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="#" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="#" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td>Column content</td>
                            <td><a href="#" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>