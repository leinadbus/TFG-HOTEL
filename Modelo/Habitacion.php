<?php
    require_once "Estancia.php";

    class Habitacion extends Estancia {

        private $conexion,$cod_estan, $cod_estancia, $numCamas, $tipo_bano;
        public static $TABLA = 'habitacion';

        function __construct($cod_estan,$estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad, $cod_estancia, $num_camas, $tipo_bano)
        {
            parent::__construct($cod_estan,$estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad);
            $this->cod_estan = $cod_estan;
            $this->conexion = parent::conectar();
            $this->cod_estancia = $cod_estancia;
            $this->num_camas = $num_camas;
            $this->tipo_bano = $tipo_bano;
        }

        /*
            getter y setter magico
        */
        function __get($valor)
        {
            return $this->$valor;
        }
    
        function __set($valor, $nuevoValor)
        {
            $this->$valor = $nuevoValor;
        }
        
        /*
        Método que obtiene los datos de una habitación y su estancia relacionada
        */

        function obtenerTodoHabitacion()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM estancia, habitacion WHERE estancia.cod_estancia = habitacion.cod_estancia;");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS LAS FOTOS " . $e->getMessage();
            }
        }

        /*
        Método que muestra todas las habitaciones de la tabla
        */

        function muestraHabitaciones () {
            try {
                  $registro = $this->obtenerTodoHabitacion();
            foreach($registro as $x){
                echo "<tr>
                <td>". $x->cod_habitacion . "</td>
                <td>". $x->tipo_estancia . "</td>
                <td>". $x->precio ."€</td>
                <td>". $x->planta . "</td>" ; 
                if ($x->estado != 'libre') {
                    echo "<td style='background-color: #FFD6D6;'>No Disponible</td>";
                }
                 else echo "<td >Disponible</td>"; 
                // <td>". $x->estado ."</td>
                 echo "
                <td>". $x->num_camas ."</td>
                <td>". $x->tipo_bano ."</td>
                <td>". $x->ubicacion ."</td>
                <td>". $x->descripcion ."</td>
                <td>". $x->localidad ."</td>
                <td>". $x->cod_estancia ."</td>
                <td><form method='post'> <button name=cambiarEstadoHabitacion value='$x->cod_estancia'>Habilitar/Deshabilitar</button></form></td>
            
                </tr>";
                // <td><form method='post'> <button name=sinAccion value='$x->cod_habitacion]'>Borrar</button></form></td>
                // <td><form method='post'> <button name=sinAccion value='$x->cod_habitacion]'>Modificar</button></form></td>
            }
        }  catch (PDOException $e) {
            echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
        }
    }

         /*
        Método que obtiene los datos de una tupla concreta de habitación con su estancia otorgando el id de la habitación
        */

        function obtenerIdHabitacion($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM estancia, habitacion WHERE estancia.cod_estancia = habitacion.cod_estancia AND cod_habitacion = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER FOTO POR ID " . $e->getMessage();
            }
        }


        /*
        Método que obtiene los datos de una tupla concreta de habitación con su estancia orotgando el id de la estancia
        */

        function obtenerIdHabitacionConEstancia($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM estancia, habitacion WHERE estancia.cod_estancia = habitacion.cod_estancia AND estancia.cod_estancia = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER FOTO POR ID " . $e->getMessage();
            }
        }

        /*
        Método que permite añadir una nueva tupla de habitación
        */
        function crearHabitacion()
        {
            try {
                $a1 = $this->__get('cod_estan');
                $a2 = $this->__get('cod_estancia');
                $a3 = $this->__get('num_camas');
                $a4 = $this->__get('tipo_bano');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_habitacion, cod_estancia, num_camas, tipo_bano) 
                    VALUES (:A, :B, :C, :D)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $a2);
                $stmt->bindParam(':B', $a1);
                $stmt->bindParam(':C', $a3);
                $stmt->bindParam(':D', $a4);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR HABITACION " . $e->getMessage();
            }
        }

        /*
        Método que permite modificar una tupla de habitación
        */
        function modificarHabitacion($cod_habitacion, $cod_estancia, $numCamas, $tipoBano)
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA . " SET num_camas='$numCamas', tipo_bano='$tipoBano', cod_estancia='$cod_estancia' WHERE cod_habitacion='$cod_habitacion'";
                $cone->exec($sql);
                echo "<br/>modificado habitacion";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR HABITACION " . $e->getMessage();
            }
        }

        /*
        Función que cambia el estado de la habitación de libre a ocupado y viceversa
        Hago una consulta a la bd con el codigo, saco el estado, si es uno lo cambio si es otro tambien con un update
        */
        function cambiarEstadoHabitación( $cod_estancia)
        {
            try {
                $cone = $this->conexion;
                $registro = $this->obtenerIdHabitacionConEstancia($cod_estancia);
                $estado = $registro[0]['estado'];
                    if( $estado == 'libre'){
                        $sql = "UPDATE estancia SET estado='ocupado' WHERE cod_estancia='$cod_estancia'";
                        $cone->exec($sql);
                    }else {
                        $sql = "UPDATE estancia SET estado='libre' WHERE cod_estancia='$cod_estancia'";
                        $cone->exec($sql);
                    }
                // $sql = "UPDATE " . self::$TABLA . " SET num_camas='$numCamas', tipo_bano='$tipoBano', cod_estancia='$cod_estancia' WHERE cod_habitacion='$cod_habitacion'";
                // echo "<br/>modificado habitacion";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR HABITACION " . $e->getMessage();
            }
        }

    }

?>