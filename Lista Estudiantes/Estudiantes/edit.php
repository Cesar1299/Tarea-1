<?php
//incluimos los archivos php que estaremos utilizando
include '../layout\header.php';
include '../layout\footer.php';
include '../helpers\utilities.php';

//Iniciamos la session para poder acceder a los valores guardada en ella
session_start();

//Obtenemos el listado actual de heroes almacenado en la session
$estudiantes = $_SESSION['estudiantes'];
$element = [];

    if(isset($_GET['ID'])==true){
        $editID = $_GET['ID']; 
        $element= filtro($estudiantes,'ID', $_GET['ID'])[0];
    $elementIndex = getIndexElement($estudiantes, 'ID', $_GET['ID']); 

    $selectedCarreraSf = ($element['carreraId'] == 1) ? "selected" : ""; 
    $selectedCarreraMl = ($element['carreraId'] == 2) ? "selected" : ""; 
    $selectedCarreraRs = ($element['carreraId'] == 3) ? "selected" : ""; 
    $selectedCarreraMc = ($element['carreraId'] == 4) ? "selected" : "";
    $selectedCarreraSg = ($element['carreraId'] == 5) ? "selected" : "";
}

if (isset($_POST['name']) && isset($_POST['carreraId'])) { 
    $updateEstudiante = ['id' => $_GET['id'], 'name' => $_POST['name'],"apellido" =>$_POST['apellido'], "Estado" =>$_POST['estado'],  'carreraId' => $_POST['carreraId']]; 

    $estudiantes[$elementIndex] =  $updateEstudiante; 

    $_SESSION['estudiantes'] = $estudiantes; 

    header("Location: ../index.php"); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php printHeader(); ?>

    <main role="main">

            <div class="card">
                <div class="card-header">
                    <a href="../index.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i></a> Editando Estudiante <?php echo $element['name'] ?>
                </div>
                <div class="card-body">

                    <form method="POST" action="edit.php? id=<?php echo $element["id"] ?>" >

                        <div class="col-md-4">
                            <div class="form-group">

                            <label for="InputName">Nombre</label>
                            <input type="text" name="name" class="form-control" id="InputName" placeholder="Introduzca el nombre ">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">

                            <label for="InputName">Apellido</label>
                            <input type="text" name="apellido" class="form-control" id="Inputapellido" placeholder="Introduzca el apellido ">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="carreraId"> Carrera </label>
                            <select name="carreraId" class="form-control" id="carrera">
                                <option value="1">Software</option>
                                <option value="2">Multimedia</option>
                                <option value="3">Redes</option>
                                <option value="4">Mecatronica</option>
                                <option value="5">Seguridad</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="checkbox">
                       <label for="InputName">Estado</label><br>  
                    <input type="checkbox" name="estado" id="estadoA" value="Activo"> Activo 
                    <label>
                     <input type="checkbox" name="estado" id="estadoI" value="Inactivo"> Inactivo
                    <label>        
                    </div>

                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Actualizar</button>
                    </form>

                </div>
            </div>

     

            <h2>No existe</h2>

    </main>

    <?php printFooter(); ?>

