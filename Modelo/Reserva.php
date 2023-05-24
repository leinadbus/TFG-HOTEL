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

                $cone = $this->conexion;
                $sql = "SELECT *
                FROM habitacion, estancia
                WHERE habitacion.cod_estancia = estancia.cod_estancia AND habitacion.cod_estancia NOT IN (
                    SELECT cod_estancia 
                    FROM reserva
                    WHERE fecha_inicio BETWEEN :A AND :B
                    OR fecha_fin BETWEEN :C AND :D
                    OR fecha_inicio < :E AND fecha_fin > :F 
                ) ORDER BY tipo_estancia;";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $fechaInicio);
                $stmt->bindParam(':B', $fechaFin);
                $stmt->bindParam(':C', $fechaInicio);
                $stmt->bindParam(':D', $fechaFin);
                $stmt->bindParam(':E', $fechaInicio);
                $stmt->bindParam(':F', $fechaFin);

                $stmt->execute();

                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
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
        // function reservarHabitacionPorTipo(/*$tipo, $fechaInicio, $fechaFin*/)
        // {
        //     try {
        //         $cone = $this->conexion;

        //         // sql para reservar la primera habitacion disponible por tipo dentro de un rango de fechas
        //         // de momento hace la reserva en la primera habitacion disponible por tipo
        //         $sql = $cone->prepare(
        //                     // SELECT habitacion.cod_estancia AS COD_ESTANCIA, 
        //                     // habitacion.cod_habitacion AS COD_HABITACION,
        //                     // habitacion.nombre AS NOMBRE,
        //                     // estancia.estado AS ESTADO, 
        //                     // estancia.tipo_estancia AS TIPO_ESTANCIA, 
        //                     // reserva.cod_reserva AS RESERVA, 
        //                     // reserva.fecha_inicio AS FECHA_INICIO, 
        //                     // reserva.fecha_fin AS FECHA_FIN
        //                 "SELECT habitacion.*, estancia.*, reserva.*   
        //                 FROM habitacion 
        //                     LEFT JOIN estancia on habitacion.cod_estancia = estancia.cod_estancia
        //                     LEFT JOIN reserva on estancia.cod_estancia = reserva.cod_estancia
        //                     WHERE reserva.cod_reserva IS NULL
        //                     AND estancia.tipo_estancia = 'Presidencial'
        //                     GROUP BY estancia.cod_estancia
        //                     LIMIT 1");
                
        //         $sql->execute();
        //         $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        //         echo "<style>table, td, th{border: solid black 1px;}</style>
        //         <table>
        //         <tr>
        //             <th>Código Habitación</th>
        //             <th>Estado</th>
        //             <th>Código Estancia</th>
        //             <th>Descripción</th>
        //             <th>Ubicación</th>
        //             <th>Planta</th>
        //             <th>Tipo Estancia</th>
        //             <th>Precio</th>
        //             <th>Descuento</th>
        //             <th>Localidad</th>
        //             <th>Número de Camas</th>
        //             <th>Tipo de Baño</th>
        //         </tr>";

        //         for ($i = 0; $i < count($resultado); $i++) {
        //             echo "<tr>
        //                     <td>".$resultado[$i]['cod_habitacion']."</td>
        //                     <td>".$resultado[$i]['estado']."</td>
        //                     <td>".$resultado[$i]['cod_estancia']."</td>
        //                     <td>".$resultado[$i]['descripcion']."</td>
        //                     <td>".$resultado[$i]['ubicacion']."</td>
        //                     <td>".$resultado[$i]['planta']."</td>
        //                     <td>".$resultado[$i]['tipo_estancia']."</td>
        //                     <td>".$resultado[$i]['precio']."</td>
        //                     <td>".$resultado[$i]['descuento']."</td>
        //                     <td>".$resultado[$i]['localidad']."</td>
        //                     <td>".$resultado[$i]['num_camas']."</td>
        //                     <td>".$resultado[$i]['tipo_bano']."</td>
        //                 </tr>";
                    
        //         }
                
        //     echo "</table>";
        //     }  catch(PDOException $e) {
        //         echo "<br/> ERROR AL COMPROBAR ESTADO POR FECHA " . $e->getMessage();
        //     }
        // }

        // /*
        //     Función que cambia el estado de la habitación que se quiere reservar

        //     Esta función se debe de complementar con la función de mostrarHabitacionesLibres y comprobarEstadoFecha
        // */
        // function reservarHabitacion($id)
        // {
        //     try{
        //         $cone = $this->conexion;

        //         // sql para obtener el estado actual de la habitacion
        //         $sqlEstado = "SELECT estancia.estado as aux FROM habitacion, estancia WHERE estancia.cod_estancia = habitacion.cod_estancia 
        //             AND habitacion.cod_habitacion = :A";
        //         $stmt = $cone->prepare($sqlEstado);
        //         $stmt->bindParam(':A', $id);
        //         $stmt->execute();
        //         $estado = $stmt->fetch(PDO::FETCH_ASSOC);
                
        //         // según el estado de la habitacion se cambia con una sql u otra
        //         if($estado['aux'] == 'libre'){
        //             $sql = "UPDATE habitacion INNER JOIN estancia ON habitacion.cod_estancia = estancia.cod_estancia SET estancia.estado = 'ocupado' 
        //             WHERE habitacion.cod_habitacion = $id";
        //         }else {  
        //             $sql = "UPDATE habitacion INNER JOIN estancia ON habitacion.cod_estancia = estancia.cod_estancia SET estancia.estado = 'libre' 
        //             WHERE habitacion.cod_habitacion = $id";
        //         }

        //         $cone->exec($sql);
        //         // echo "<br/>modificado reserva";
        //     } catch(PDOException $e) {
        //         echo "<br/> ERROR AL RESERVAR HABITACION " . $e->getMessage();
        //     }
        // }

        // function mostrarHabitacionesLibres()
        // {
        //     try {
        //         $cone = $this->conexion;
        //         $sql = $cone->prepare("SELECT * FROM habitacion, estancia WHERE estancia.cod_estancia = habitacion.cod_estancia AND estancia.estado = 'libre';

        //             /*BETWEEN '2022-01-01' AND '2022-01-31'*/");
        //         $sql->execute();
        //         $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        //         // echo $resultado[0]['cod_estancia'];
        //         // echo $resultado[0]['estado'];


        //         echo "<style>table, td, th{border: solid black 1px;}</style>
        //             <table>
        //             <tr>
        //                 <th>Código Habitación</th>
        //                 <th>Estado</th>
        //                 <th>Código Estancia</th>
        //                 <th>Descripción</th>
        //                 <th>Ubicación</th>
        //                 <th>Planta</th>
        //                 <th>Tipo Estancia</th>
        //                 <th>Precio</th>
        //                 <th>Descuento</th>
        //                 <th>Localidad</th>
        //                 <th>Número de Camas</th>
        //                 <th>Tipo de Baño</th>
        //             </tr>";

        //             for ($i = 0; $i < count($resultado); $i++) {
        //                 echo "<tr>
        //                         <td>".$resultado[$i]['cod_habitacion']."</td>
        //                         <td>".$resultado[$i]['estado']."</td>
        //                         <td>".$resultado[$i]['cod_estancia']."</td>
        //                         <td>".$resultado[$i]['descripcion']."</td>
        //                         <td>".$resultado[$i]['ubicacion']."</td>
        //                         <td>".$resultado[$i]['planta']."</td>
        //                         <td>".$resultado[$i]['tipo_estancia']."</td>
        //                         <td>".$resultado[$i]['precio']."</td>
        //                         <td>".$resultado[$i]['descuento']."</td>
        //                         <td>".$resultado[$i]['localidad']."</td>
        //                         <td>".$resultado[$i]['num_camas']."</td>
        //                         <td>".$resultado[$i]['tipo_bano']."</td>
        //                     </tr>";
                        
        //             }
                    
        //         echo "</table>";

        //         return $resultado;
        //     } catch (PDOException $e) {
        //         echo "<br/> ERROR AL MOSTRAR HABITACIONES LIBRES " . $e->getMessage();
        //     }
        // }

        // function mostrarEstadoHabitaciones()
        // {
        //     try {
        //         $cone = $this->conexion;
        //         $sql = $cone->prepare("SELECT * FROM habitacion, estancia WHERE estancia.cod_estancia = habitacion.cod_estancia;

        //             /*BETWEEN '2022-01-01' AND '2022-01-31'*/");
        //         $sql->execute();
        //         $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

        //         // echo $resultado[0]['cod_estancia'];
        //         // echo $resultado[0]['estado'];


        //         echo "<style>table, td, th{border: solid black 1px;}</style>
        //             <table>
        //             <tr>
        //                 <th>Código Habitación</th>
        //                 <th>Estado</th>
        //                 <th>Código Estancia</th>
        //                 <th>Descripción</th>
        //                 <th>Ubicación</th>
        //                 <th>Planta</th>
        //                 <th>Tipo Estancia</th>
        //                 <th>Precio</th>
        //                 <th>Descuento</th>
        //                 <th>Localidad</th>
        //                 <th>Número de Camas</th>
        //                 <th>Tipo de Baño</th>
        //             </tr>";

        //             for ($i = 0; $i < count($resultado); $i++) {
        //                 echo "<tr>
        //                         <td>".$resultado[$i]['cod_habitacion']."</td>
        //                         <td>".$resultado[$i]['estado']."</td>
        //                         <td>".$resultado[$i]['cod_estancia']."</td>
        //                         <td>".$resultado[$i]['descripcion']."</td>
        //                         <td>".$resultado[$i]['ubicacion']."</td>
        //                         <td>".$resultado[$i]['planta']."</td>
        //                         <td>".$resultado[$i]['tipo_estancia']."</td>
        //                         <td>".$resultado[$i]['precio']."</td>
        //                         <td>".$resultado[$i]['descuento']."</td>
        //                         <td>".$resultado[$i]['localidad']."</td>
        //                         <td>".$resultado[$i]['num_camas']."</td>
        //                         <td>".$resultado[$i]['tipo_bano']."</td>
        //                     </tr>";
                        
        //             }
                    
        //         echo "</table>";

        //         return $resultado;
        //     } catch (PDOException $e) {
        //         echo "<br/> ERROR AL MOSTRAR ESTADO DE HABITACIONES " . $e->getMessage();
        //     }
        // }

 /*
Función que recoge las fechas del cliente y busca habitaciones disponibles (Da igual el tipo de habitación)
        */
        



    }

    
?>