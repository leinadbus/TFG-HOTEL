<?php
    /*

    */

    require_once "CRUD.php";

    class Reserva extends CRUD {
        private $conexion;
        public static $TABLA = 'reserva';

        function __construct()
        {
            parent::__construct(self::$TABLA);
            $this->conexion = parent::conectar();
        }


         /* 
        Función que recoge las habitaciones disponibles entre un rango de fechas dadas
        */
        function disponibilidad () {
            try {

                $fechaInicio =  $_POST['datoFechaInicio'];
                $fechaFin = $_POST['datoFechaFin'];
                $tipo = $_POST['tipoEstancia'];
                $numeroHabitaciones = $_POST['cantidadHabitaciones'];
               
            
                $cone = $this->conexion;

                if ( $tipo == 'todas'){

                    $sql = "SELECT *
                    FROM habitacion, estancia
                    WHERE habitacion.cod_estancia = estancia.cod_estancia AND estancia.estado = 'libre' AND habitacion.cod_estancia NOT IN (
                        SELECT cod_estancia 
                        FROM reserva
                        WHERE fecha_inicio BETWEEN :A AND :B
                        OR fecha_fin BETWEEN :C AND :D
                        OR fecha_inicio < :E AND fecha_fin > :F 
                    ) ORDER BY tipo_estancia  ;";

                    $stmt = $cone->prepare($sql);
                    $stmt->bindParam(':A', $fechaInicio);
                    $stmt->bindParam(':B', $fechaFin);
                    $stmt->bindParam(':C', $fechaInicio);
                    $stmt->bindParam(':D', $fechaFin);
                    $stmt->bindParam(':E', $fechaInicio);
                    $stmt->bindParam(':F', $fechaFin);
                   

                } else {

                    $sql = "SELECT *
                    FROM habitacion, estancia
                    WHERE habitacion.cod_estancia = estancia.cod_estancia AND estancia.tipo_estancia LIKE :G  AND habitacion.cod_estancia NOT IN (
                        SELECT cod_estancia 
                        FROM reserva
                        WHERE fecha_inicio BETWEEN :A AND :B
                        OR fecha_fin BETWEEN :C AND :D
                        OR fecha_inicio < :E AND fecha_fin > :F 
                    ) ORDER BY tipo_estancia LIMIT $numeroHabitaciones ;";
                    $stmt = $cone->prepare($sql);
                    $stmt->bindParam(':A', $fechaInicio);
                    $stmt->bindParam(':B', $fechaFin);
                    $stmt->bindParam(':C', $fechaInicio);
                    $stmt->bindParam(':D', $fechaFin);
                    $stmt->bindParam(':E', $fechaInicio);
                    $stmt->bindParam(':F', $fechaFin);
                    $stmt->bindParam(':G', $tipo);
                    
                }

                $stmt->execute();

                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage() ;
                // echo $stmt->queryString;
            }
        }

        /* 
        Función que añade la reserva a la tabla reservas
        */

        function añadirReserva ($codigoUser, $codigoEstancia,$fechaInicio, $fechaFin) {
            try {
              
                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_usuario, cod_estancia, fecha_inicio, fecha_fin ) 
                    VALUES (:A, :B, :C, :D)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $codigoUser);
                $stmt->bindParam(':B', $codigoEstancia);
                $stmt->bindParam(':C', $fechaInicio);
                $stmt->bindParam(':D', $fechaFin);
                $stmt->execute();
                // echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR HABITACION " . $e->getMessage();
            }
        }

        /* 
        Función que recoge el numero de reservas que existen para introducirlo en facturas
        */
        function nuevaFactura () {
            try {
                $cone = $this->conexion;
                $sql = "SELECT MAX(cod_reserva) FROM reserva ;";
                $stmt = $cone->prepare($sql);

                $stmt->execute();

                $resultado = $stmt->fetchColumn(); //Obtiene el valor de la primera columna de la primera fila del conjunto de resultados
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
            }
        }

         /* 
        Función que añade una tupla a la tabla facturas 
        */
        function añadirFactura ( $codigoReserva,$extras, $precioTotal ) {
            try {
              
                $cone = $this->conexion;
                $sql = "INSERT INTO factura (cod_reserva, extras, precio_total) 
                    VALUES (:A, :B, :C)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $codigoReserva);
                $stmt->bindParam(':B', $extras);
                $stmt->bindParam(':C', $precioTotal);
                
                $stmt->execute();
                // echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR FACTURA " . $e->getMessage();
            }
        }
        

    }

    
?>