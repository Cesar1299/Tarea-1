<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Bienvenidos a la Tabla Periodica</title>
</head>
<body >
     
<?php


$bloque_Elemento =[' ', 'Lu']; 
/*variable con valor */
$contador = 0;

/*Array de elementos */
$elementos = ['H','.','.','.','.','.','.','.','.','.','.','.','.','.','.','.','.','He',
              'Li','Be','.','.','.','.','.','.','.' ,'.','.','.','B','C','N','O','F','Ne',
            'Na','Mg','.','.','.','.','.','.','.','.','.','.','Al','Si','P','S', 'Cl', 'Ar',
            'K','Ca','Sc','Ti','V','Cr','Mn','Fe','Co','Ni','Cu','Zn','Ga','Ge','As','Se','Br','Kr',
            'Rb','Sr','Y','Zr','Nb','Mo','Tc','Ru','Rh','Pd','Ag','Cd','In','Sn','Sb','Te','I','Xe',
            'Cs','Ba','La-Lu', 'Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg','Tl','Pb','Bi', 'Po','At','Rn',
            'Fr','Ra','Ac-Lr','Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn','Nh','Fl','Mc','Lv','Ts','Og'
             ];
$metales_Raros = ['.','.','.','La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu',
                 '.','.','.','Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No', 'Lr'
                ];
/*Array asosiativo de cada uno de los elementos */                
$elementosClasificados = [
    "Alcalinos" => ['Li', 'Na', 'K', 'Rb', 'Cs', 'Fr'],
    'Alcalinoterreos' => ['Be', 'Mg', 'Ca', 'Sr', 'Ba', 'Ra'],
    'Metales de transicion' => ['Sc', 'Ti', 'V', 'Cr', 'Mn', 'Fe', 'Co', 'Ni', 'Cu',
                                'Zn', 'Y', 'Zr', 'Nb', 'Mo', 'Tc', 'Ru', 'Rh', 'Pd',
                                'Ag','Cd','Hf','Ta','W','Re','Os','Ir','Pt','Au','Hg',
                                'Rf','Db','Sg','Bh','Hs','Mt','Ds','Rg','Cn'],                            
    'Lantanidos' => ['La-Lu','La','Ce','Pr','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'],
    'Actinidos' => ['Ac-Lr','Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No', 'Lr'],
    'Otros metales' => ['Al', 'Ga', 'In', 'Sn', 'Tl','Pb','Bi','Nh','Fl','Mc','Lv'],
    'Metaloides' => ['B','Si','Ge','As','Sb','Te','Po'],
    'Halogenos' => ['F','Cl','Br','I','At','Ts'],
    'Gases nobles' => ['He','Ne','Ar','Kr','Xe','Rn','Og'],
    'Otros no metales' => ['H', 'C', 'N', 'O', 'P', 'S','Se']
];
?>
    <h2>Tabla Periodica de elementos</h2>
</div>
<!--metodo para recorrer los elemetos de la tabla periodica-->
<?php foreach ($elementos as $elemento):?>
<!--metodo para eliminar cualesquiera de los elemetos de la tabla periodica-->
<?php if(in_array($elemento,$bloque_Elemento)): ?>
     <div class ="filasBlock"> <?php echo "<span> &nbsp; </span>"?></div>
<?php else: ?>
<!--recorrer cada elemento de forma como esta en los Arrays-->
        <?php if(in_array($elemento, $elementosClasificados["Alcalinos"])): ?> 
        <div class ="Alcalinos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Alcalinoterreos"])): ?> 
        <div class ="Alcalinoterreos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Metales de transicion"])): ?> 
        <div class ="MetalesTransicion"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Lantanidos"])): ?> 
        <div class ="Lantanidos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Actinidos"])): ?> 
        <div class ="Actinidos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Otros metales"])): ?> 
        <div class ="OtrosMetales"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Metaloides"])): ?> 
        <div class ="Metaloides"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Otros no metales"])): ?> 
        <div class ="OtrosNoMetales"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Halogenos"])): ?> 
        <div class ="Halogenos"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if(in_array($elemento, $elementosClasificados["Gases nobles"])): ?> 
        <div class ="GasesNobles"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
        <?php if($elemento == "."): ?> 
        <div class ="filas"> <?php echo "<span> {$elemento} </span>"?></div>
        <?php endif?>
<?php endif ?>

<?php $contador++; ?>
<?php if($contador==18){
     echo "<br>"; 
     $contador=0;
} ?>

<?php endforeach?>

<br>

<?php foreach ($metales_Raros as $metalRaro):?>
<?php if(in_array($metalRaro,$bloque_Elemento)): ?>
     <div class ="filasblock"> <?php echo "<span> &nbsp; </span>"?></div>
<?php else:?>
        <?php if(in_array($metalRaro, $elementosClasificados["Lantanidos"])): ?> 
        <div class ="Lantanidos"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
        <?php if(in_array($metalRaro, $elementosClasificados["Actinidos"])): ?> 
        <div class ="Actinidos"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
        <?php if($metalRaro == "."): ?> 
        <div class ="filas"> <?php echo "<span> {$metalRaro} </span>"?></div>
        <?php endif?>
<?php endif?>
<!--Funcion para dividir espacios entre la tabla periodica y la leyenda-->
<?php $contador++; ?>
<?php if($contador==19){
     echo "<br>"; 
     $contador=0;
} ?>

<?php endforeach?>

<br>
<!--Creacion de la tabla de leyenda-->
<div class="leyenda">
   <div class="metales"><strong>Metales</strong></div>
   <div class="metalesA" style="background-color:#33D4FF"><strong>Metales Alcalinos</strong></div>
   <div class="metalesA" style="background-color:#D733FF"><strong>Metales Alcalinoterreos</strong></div>
   <div class="metalesA" style="background-color:#FFC433 "><strong>Metales de Transicion</strong></div>
   <div class="metalesB">
      <div class="" style="background-color:#644848"><strong>Lantanidos</strong></div>
      <div class="" style="background-color:#D37E99  "><strong>Actinidos</strong></div>
    </div>
   <div class="metalesA" style="background-color:#E85031" ><strong>OTROS Metales</strong></div>
</div>
<div class="leyenda">
<div class="metaloides" style="background-color:#C1F800"><strong>Metaloides</strong></div>
<div class="metaloides1"style="background-color: "><strong>Metaloides</strong></div>
</div>
<div class="leyenda">
   <div class="noMetales"><strong>No metales</strong></div>
   <div class="noMetalesA"style="background-color: #FBE4D8"><strong>Otros no metales</strong></div>
   <div class="noMetalesA"style="background-color: #00E7B8"><strong>No metales Halogenos</strong></div>
   <div class="noMetalesA"style="background-color: #009AE7"><strong>Gases nobles</strong></div>
</div>




</body>
</html>