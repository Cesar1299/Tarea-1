<?php
//incluimos los archivos php que estaremos utilizando
include 'layout\header.php';
include 'layout\footer.php';
include 'helpers\utilities.php';

//Iniciamos la session para poder acceder a los valores guardada en ella
session_start();

$_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array(); //Inicializamos el listado de heroes en la session en caso de no existir pero si existe tomamos los valores almacenados en la seccion

//Obtenemos el listado actual de Estudiante almacenado en la session
$listadoEstudiantes = $_SESSION['estudiantes'];

if (!empty($listadoEstudiantes)) {

    if (isset($_GET['carreraId'])) { 

        $listadoEstudiantes = filtro($listadoEstudiantes, 'carreraId', $_GET['carreraId']); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Estudiantes</title>
</head>

<body>

    <?php printHeader(); ?>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Lista de Estudiantes</h1>
                <p class="lead text-muted">Listado de Estudiantes</p>
                <p>
                    <a href="Estudiantes/add.php?page=true" class="btn btn-primary my-2"><i class="fa fa-plus-square"></i> Agregar nuevo Estudiantes</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-9"></div>

                    <div class="col-md-3">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="index.php?carreraId=1" class="btn btn-secondary">Software</a>
                            <a href="index.php?carreraId=2" class="btn btn-secondary">Multimedia</a>
                            <a href="index.php?carreraId=3" class="btn btn-secondary">Redes</a>
                            <a href="index.php?carreraId=4" class="btn btn-secondary">Mecatronica</a>
                            <a href="index.php?carreraId=5" class="btn btn-secondary">Seguridad Informatica</a>
                            <a href="index.php" class="btn btn-secondary">TODOS</a>
                        </div>
                    </div>
                </div>

               

                    <?php if (empty($listadoEstudiantes)) : ?>

                        <h2>No hay Estudiantes registrado, <a href="Estudiantes/add.php?page=true" class="btn btn-primary my-2"><i class="fa fa-plus-square"></i> Agregar nuevo Estudiantes</a> </h2>

                    <?php else : ?>
                    

                        <?php foreach ($listadoEstudiantes as $estudiante) : ?>
                        <table class="table table-responsive">      
                                    <thead>
                                    <tr>
                                    <th> Nombre</th> 
                                    <th> Apellido</th> 
                                    <th> Estado</th> 
                                    <th>Carrera</th> 
                                    </tr> 
                                     </thead> 
                                     <tbody> 
                                     <tr>               
                                    <th style = center> <?php echo $estudiante['name']; ?></th> 
                                    <th> <?php echo $estudiante['apellido']; ?></th> 
                                    <th> <?php echo $estudiante['Estado']; ?></th> 
                                    <th> <?php echo $estudiante['carreraId']; ?></th>  
                                    <th> <a href="Estudiantes/edit.php?page=true&id=<?php echo array_search($estudiante, $listadoEstudiantes ) ?>" class="btn btn-sm btn-outline-secondary">Edit</a></th>  
                                    </tr>    
                                    </tbody> 
                                    </table>                                                                 
    <?php endforeach; ?>
    
      <?php endif; ?>
                </div>
            </div>   
    </main>

    <?php printFooter(); ?>

</body>

</html>