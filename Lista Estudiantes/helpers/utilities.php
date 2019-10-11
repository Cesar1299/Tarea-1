<?php

/* Esta funcion retorna el ultimo elemento del un array */
function getLastElement($list)
{
    $countList = count($list);
    $lastElement = $list[$countList - 1];

    return $lastElement;
}

/* Esta funcion realiza una busqueda en un listado por la propiedad y valor que pasemos por parametros
   Retorna: Un listado con el filtro que realizamos */
function filtro($list, $property, $value)
{
    $filtro = [];

    foreach ($list as $elemento) {

        if ($elemento[$property] == $value) {
            array_push($filtro, $elemento);
        }
    }

    return $filtro;
}

/* Esta funcion realiza una busqueda en un listado por la propiedad y valor que pasemos por parametros
   Retorna: El index del primer elemento que cumpla con la condicion de busqueda */
function getIndexElement($list, $property, $value)
{
    $index = 0;
    $i = 0;
    foreach ($list as $elemento) {

        if ($elemento[$property] == $value) {
            $index = $i;
            break;
        }
        $i++;
    }
    return $index;
}