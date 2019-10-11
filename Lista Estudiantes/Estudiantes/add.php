<?php
//incluimos los archivos php que estaremos utilizando

include '../layout\header.php';
include '../layout\footer.php';
include '../helpers\utilities.php';

//Iniciamos la session para poder acceder a los valores guardada en ella
session_start();

//Validamos si existen valores en la variable de $_POST 
if(isset($_POST['name']) && isset($_POST['carreraId'])){
    
   //Obtenemos el listado actual de heroes almacenado en la session
    $estudiantes = $_SESSION['estudiantes'];

    $ESTUDIANTEId = 1;//El Id del hero que vamos a crear

   

    if(!empty($estudiantes)){//validamos si ya hay heroes creado
        $lastElement = getLastElement($estudiantes); //Obtenemos el ultimo elemento del listado de heroe  
        $ESTUDIANTEId =  $lastElement["ID"] + 1;
       //como ya existen heroes el id del nuevo heroe debe ser el id el ultimo + 1
    }


    array_push($estudiantes, ["ID" => $ESTUDIANTEId,"name" =>$_POST['name'], "apellido" =>$_POST['apellido'], "Estado" =>$_POST['estado'] ,"carreraId"=> $_POST['carreraId'] ]);//Agregamos el heroe al listado de heroes

    $_SESSION['estudiantes'] = $estudiantes; //guardamos en session el nuevo listado de heroes

    header("Location: ../index.php");//enviamos a la pagina principal del website
    exit();//esto detiene la ejecucion del php para que se realice el redireccionamiento
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
               <a href="../index.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i></a> Registra a Estudiante
            </div>
            <div class="card-body">

                <form method="POST" action="add.php">

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
                    <input type="checkbox" name="estado" id="estadoA" value="Activo" checked> Activo 
                    <label>
                     <input type="checkbox" name="estado" id="estadoI" value="Inactivo"> Inactivo
                    <label>        
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square"></i> Crear</button>
                </form>

            </div>
        </div>

    </main>

    <?php printFooter(); ?>

</body>

</html>