<?php

// Arrays con la informacion del CV 
$Personalidad=['Soy una Amable', 'Responsable en proyectos pautados', 'Creativo al momento de diseñar ', 
          'Pensamientos con vision y objetivos claros'];

$Conocimientos =['Microsoft SQLServer', 'Visual Studio', 'AnyDesk', 'Microsoft Project'];

$idiomas=['Ingles', 'Español'];

$referencias = ["representante" => ["Nombre"=>"Julio Cesar", "Telefono"=>"8098179288"],
"representate1" => ["Nombre"=>"Salvador Diaz", "Telefono"=>"8093882361"]
];

$experiencias =['Gerente departamento TI', 'Soporte tecnico', 'Auxiliar Contable'];

$estudios = ['Bachillerato (Tecnico en contabilidad computarizada)', 'Tecnologo en Software (ITLA)'];

$skills = ['Capacidad para trabajar en equipo', 'Responsabilidad', 'Motivador de grupo'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Examen parcial practico</title>
    <link rel="stylesheet" href="estilo.css" type="text/css"> 
</head>
<body >
  
   <article> 
 <section class="parte_Izquierda" >

 <?php if(empty($Personalidad)):?>
 <?php else:?>
 <div>
 <br>   
 <br>
 <br>
 <br>
 <p class="IzquierdaTitulo"> QUIEN SOY</p>
 <?php foreach($Personalidad as $info):?>
 <p ><?php echo $info?></p>
  <?php endforeach?>
  </div>
  <br>
  <?php endif?> 

<?php if(empty($Conocimientos)):?>
 <?php else:?>
 <p class="IzquierdaTitulo">PROGRAMAS</p>
 <?php foreach($Conocimientos as $programas):?>
 <p > <?php echo $programas?></p>
  <?php endforeach?>
  <br>
  <?php endif?>

     <?php if(empty($idiomas)):?>
       <?php else:?>
       <p class="IzquierdaTitulo">IDIOMAS</p>
       <?php foreach($idiomas as $idioma):?>
          <p><?php echo $idioma?></p>
        <?php endforeach?>
        <br>
        <?php endif?>
 
       <?php if(empty($referencias)):?>
       <?php else:?>
       <p class="IzquierdaTitulo">REFERENCIAS</p>
      <?php foreach($referencias as $referencia=>$cuña):?>
       <?php foreach($cuña as $representante):?>
         <p><?php echo "$representante"?>}</p>
          <?php endforeach?>
          <br>   
           <?php endforeach?>
        <?php endif?>
    </section>

      <section class="parte_Derecha">
      <div class="Nombre" >Cesar Gonzalez </div>
      <?php if(empty($experiencias)):?>
       <?php else:?>
       <p class="DerechaTitulo">EXPERIENCIA PROFESIONAL</p>
       <?php foreach($experiencias as $experiencia):?>
          <p><?php echo $experiencia?></p>
        <?php endforeach?>
        <?php endif?> 

       <?php if(empty($estudios)):?>
          <?php else:?>
          <p class="DrechaTitulo">ESTUDIOS ACADEMICOS</p>
          <?php foreach($estudios as $estudio):?>
          <p><?php echo $estudio?></p>
            <?php endif?> 

        <?php if(empty($skills)):?>
          <?php else:?>
          <p class="DerechaTitulo">HABILIDADES</p>
       <?php foreach($skills as $HABILIDADES):?>
          <p ><?php echo $HABILIDADES?></p>         
        <?php endforeach?>
        <?php endif?>
      </section>
</article>  
</body>
</html>
