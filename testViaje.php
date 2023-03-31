<?php

    /*
    *Implementar un script testViaje.php que cree una instancia de la clase Viaje y
    *presente un menú que permita cargar la información del viaje, modificar y ver sus datos.
    */
    include("Viaje.php");

    //Creo el objeto Viaje
    $objViaje = new Viaje(123, "Roca", 3, "pasajeros");
    
    
    //LLamo metodos Menus!!!
    echo $objViaje->escribirMensajeBienvenida(); 
    echo $objViaje->seleccionarOpcion();
    $objViaje->opcion();