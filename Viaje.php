<?php

/**
 * Clase Viaje y atributos y metodos.
 * La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes.
 * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros
 *y los pasajeros del viaje.
 *Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar
 * los atributos de dicha clase (incluso los datos de los pasajeros). Utilice un array que almacene
 * la información correspondiente a los pasajeros.
 * Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y “numero de documento”.
 *Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.
 */
class Viaje {
    
    /**
     * Summary of codigoViaje
     * @var
     */
    private $codigoViaje;

    /**
     * Summary of destino
     * @var
     */
    private $destino;

    /**
     * Summary of cantMaxPasajeros
     * @var
     */
    private $cantMaxPasajeros;

    /**
     * Summary of pasajeros
     * @var
     */
    private $pasajeros;


    //Esto me lo hace el VS code
    /**
     * Summary of __construct Creo la funcion constructora
     * @param mixed $codigoViaje
     * @param mixed $destino
     * @param mixed $cantMaxPasajeros
     * @param mixed $pasajeros
     */
    public function __construct($codigoViaje, $destino, $cantMaxPasajeros, $pasajeros){
        $this -> codigoViaje = $codigoViaje;
        $this -> destino = $destino;
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
        $this -> pasajeros = $pasajeros;
    }


    /**
    * Setea el valor de codigoViaje
    */
    public function setCodigoViaje($codigoViaje){
        $this -> codigoViaje = $codigoViaje;
    }

    /**
     * Setea el valor de destino
     */
    public function setDestino($destino){
        $this -> destino = $destino;
    }

    /**
     * Setea el valor de cantMaxPasajeros
     */
    public function setCantMaxPasajeros($cantMaxPasajeros){
        $this -> cantMaxPasajeros = $cantMaxPasajeros;
    }

    /**
     * Setea el valor de pasajeros
     */
    public function setPasajeros($pasajeros){
        $this -> pasajeros = $pasajeros;
    }


    /**
    * Obtiene el valor de codigoViaje
    */
    public function getCodigoViaje(){
        return $this -> codigoViaje;
    }

    /**
    * Obtiene el valor de pdestinoB
    */
    public function getDestino(){
        return $this -> destino;
    }

    /**
    * Obtiene el valor de cantMaxPasajeros
    */
    public function getCantMaxPasajeros(){
        return $this -> cantMaxPasajeros;
    }

    /**
    * Obtiene el valor de pasajeros
    */
    public function getPasajeros(){
        return $this -> pasajeros;
    }


    /**
     * Summary of __toString
     * @return string
     */
    public function __toString(){
        return $this->escribirMensajeBienvenida()."\n\n".$this->seleccionarOpcion()."\n\n".$this->opcion();
    }

    
    /**
     * array multidimensional indexado
     * @return void
     */
    public function arrayPasajeros2(){
        $pasajeros = array();


        $pasajero1 = array("Nombre"=>"Juan", "Apellido"=>"Gomez", "DNI"=>"32133336"); //Índice 0
        $pasajero2 = array("Nombre"=>"Marta", "Apellido"=>"Roca", "DNI"=>"32156556"); //Índice 1
        $pasajero3 = array("Nombre"=>"Luis", "Apellido"=>"Salvo", "DNI"=>"43133559"); //Índice 2
        $pasajero4 = array("Nombre"=>"Juan", "Apellido"=>"Martinez", "DNI"=>"34563856"); //Índice 3
    }

    
    //Dibuja una division en la pantalla
    /**
     * Summary of separador
     * @return void
     */
    public function separador(){
        echo "\n___________________\n";
    }


    // Da un mensaje bienvenida 
    /**
     * Summary of escribirMensajeBienvenida
     * @return void
     */
    public function escribirMensajeBienvenida(){
        
        echo "Menú de opciones: \n";
        
    }



    //Crea el menu de opciones
    /**
     * Summary of seleccionarOpcion
     * @return string
     */
    public function seleccionarOpcion(){
        echo "Menú de opciones\n";
        echo "1) Cargar la información del viaje\n";
        echo "2) Modificar los datos de un pasajero\n";
        echo "3) Ver los datos de un pasajero\n";
        echo "4) Salir\n\n";
        echo "Ingrese la opcion deseada: ";    
        $opcion = trim(fgets(STDIN));
        return $opcion;
    }


    /**
     * Summary of arrayPasajeros: Cargar la información del viaje
     * @return bool
     */
    public function arrayPasajeros(){
        $pasajeros=array(
            array("Nombre"=>"Juan", "Apellido"=>"Fernandez", "DNI"=>"32989403"), //Índice 0
            array("Nombre"=>"Luis", "Apellido"=>"Salvo", "DNI"=>"43122446"), //Índice 1
            array("Nombre"=>"Pancho", "Apellido"=>"Cholo", "DNI"=>"22223451"), //Índice 2
            array("Nombre"=>"Jorge", "Apellido"=>"Perez", "DNI"=>"32123447") //Índice 3
        );
        
        // Imprimir el array usando print_r()
        return print_r($pasajeros);
    }

    //Inicialización de variables:
    /**
     * Summary of opcion
     * @return void
     */
    public function opcion(){
        do {
            $opcion= $this->seleccionarOpcion();
            switch ($opcion) {  
                               
                case 1: 
                    // 1) Cargar la información del viaje

                    //Array de pasajeros
                    $pasajeros=array(
                        array("Nombre"=>"Gaston", "Apellido"=>"Fernando", "DNI"=>"32343456"), //Índice 0
                        array("Nombre"=>"Pancho", "Apellido"=>"Silvo", "DNI"=>"32526476"), //Índice 1
                        array("Nombre"=>"Gaston", "Apellido"=>"Linden", "DNI"=>"54123456"), //Índice 2
                        array("Nombre"=>"Martu", "Apellido"=>"Gomez", "DNI"=>"33345556") //Índice 3
                    );
                    print_r($pasajeros);
                    break;
                case 2:
                    // 2) Modificar los datos de un pasajero

                    //Array de pasajeros
                    $pasajeros=array(
                        array("Nombre"=>"Jorge", "Apellido"=>"Hernandez", "DNI"=>"30123456"), //Índice 0
                        array("Nombre"=>"Juan", "Apellido"=>"Loco", "DNI"=>"40123456"), //Índice 1
                        array("Nombre"=>"Mata", "Apellido"=>"Linden", "DNI"=>"50123456"), //Índice 2
                        array("Nombre"=>"Edu", "Apellido"=>"Galo", "DNI"=>"60123456") //Índice 3
                    );
                    // Definir el DNI del pasajero que quieres modificar
                    echo "Ingrese el DNI a buscar: ";
                    $buscar_dni = trim(fgets(STDIN));

                    // Recorrer el array para buscar el pasajero
                    foreach($pasajeros as $key => $pasajero){
                        if($pasajero["DNI"] == $buscar_dni){
                            // Si se encuentra el pasajero, modificar su nombre, apellido y DNI
                            echo "Ingrese el nuevo Nombre: ";
                            $nuevoNombre = trim(fgets(STDIN));
                            $pasajeros[$key]["Nombre"] = $nuevoNombre;
                            echo "\n";

                            echo "Ingrese el nuevo Apellido: ";
                            $nuevoApellido = trim(fgets(STDIN));
                            $pasajeros[$key]["Apellido"] = $nuevoApellido;
                            echo "\n";

                            echo "Ingrese el nuevo DNI: ";
                            $nuevoDNI = trim(fgets(STDIN));
                            $pasajeros[$key]["DNI"] = $nuevoDNI;
                            echo "\n";

                            break; 
                        }
                    }

                    // Imprimir el array
                    print_r($pasajeros);
                    break;
                case 3:
                    // 5) Ver los datos de un pasajero.
                    
                    // Recorrer el array para buscar al pasajero conociendo su DNI

                        //Array de pasajeros
                        $pasajeros=array(
                            array("Nombre"=>"Juan", "Apellido"=>"Salvo", "DNI"=>"33333456"), //Índice 0
                            array("Nombre"=>"Luis", "Apellido"=>"Silvo", "DNI"=>"33333456"), //Índice 1
                            array("Nombre"=>"Pancho", "Apellido"=>"Linden", "DNI"=>"4444446"), //Índice 2
                            array("Nombre"=>"Jorge", "Apellido"=>"Gerz", "DNI"=>"45555555") //Índice 3
                        );

                        //Busco a un pasajero por su DNI
                        echo "Ingrese el DNI que desea buscar: ";
                        $buscar_dni = trim(fgets(STDIN));
                        foreach($pasajeros as $pasajero){
                            if($pasajero["DNI"] == $buscar_dni){
                                
                                // Si se encuentra el pasajero, acceder a sus datos usando su índice en el array
                                echo "El pasajero buscado es: \n";
                                echo "Nombre: " . $pasajero["Nombre"] . "\n";
                                echo "Apellido: " . $pasajero["Apellido"] . "\n";
                                echo "DNI: " . $pasajero["DNI"] . "\n\n";
                                break; // Salir del ciclo foreach una vez que se ha encontrado el pasajero
                            }else{
                                echo "El DNI ingresado no pertenece a ningún pasajero.\n";
                            }
                        }
                    break;
                case 4: 
                    //Salir
                    echo "Saliendo...";
                    break;
                default:
                    //Caso general para cuando no se ingresa ninguna de la opciones del menu.
                    
                    echo "Ingrese una opcion correcta: \n";
                    break;
            }
        } while ($opcion != 4);
    }    


}