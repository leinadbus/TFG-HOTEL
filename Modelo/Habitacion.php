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

        */

        function muestraHabitaciones () {
            try {
                  $registro = $this->obtenerTodoHabitacion();
            foreach($registro as $x){
                echo "<tr>
                <td>". $x->cod_habitacion . "</td>
                <td>". $x->tipo_estancia . "</td>
                <td>". $x->precio ."€</td>
                <td>". $x->planta . "</td>
                <td>". $x->estado ."</td>
                <td>". $x->num_camas ."</td>
                <td>". $x->tipo_bano ."</td>
                <td>". $x->ubicacion ."</td>
                <td>". $x->descripcion ."</td>
                <td>". $x->localidad ."</td>
                <td>". $x->cod_estancia ."</td>
                <td><form method='post'> <button name=sinAccion value='$x->cod_habitacion]'>Reservar</button></form></td>
                <td><form method='post'> <button name=sinAccion value='$x->cod_habitacion]'>Borrar</button></form></td>
                <td><form method='post'> <button name=sinAccion value='$x->cod_habitacion]'>Modificar</button></form></td>
                </tr>";
            }
        }  catch (PDOException $e) {
            echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
        }
    }

         /*

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
    }




/*
Esta pinta mejor
SELECT *
FROM habitacion
WHERE cod_estancia NOT IN (
    SELECT cod_estancia 
    FROM reserva
    WHERE fecha_inicio BETWEEN '2023-05-01' AND '2023-05-09'
    OR fecha_fin BETWEEN '2023-05-03' AND '2023-05-09'
)
    */
?>