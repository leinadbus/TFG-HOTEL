<?php
    require_once "CRUD.php";

    class Estancia extends CRUD {

            private $conexion,$cod_estancia, $estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad;
            public static $TABLA = 'estancia';

            function __construct($cod_estancia,$estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad)
            {
                parent::__construct(self::$TABLA);
                $this->cod_estancia=$cod_estancia;
                $this->conexion = parent::conectar();
                $this->estado = $estado;
                $this->descripcion = $descripcion;
                $this->ubicacion = $ubicacion;
                $this->planta = $planta;
                $this->tipo_estancia = $tipo_estancia;
                $this->precio = $precio;
                $this->descuento = $descuento;
                $this->localidad = $localidad;
            }

        /*

        */
        function crearEstancia() 
        {
            try {
                $a0 = $this->__get('cod_estancia');
                $a1 = $this->__get('estado');
                $a2 = $this->__get('descripcion');
                $a3 = $this->__get('ubicacion');
                $a4 = $this->__get('planta');
                $a5 = $this->__get('tipo_estancia');
                $a6 = $this->__get('precio');
                $a7 = $this->__get('descuento');
                $a8 = $this->__get('localidad');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, estado, descripcion, ubicacion, planta, tipo_estancia, precio, descuento, localidad) 
                    VALUES (:A, :B, :C, :D, :E, :F, :G, :H, :I)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $a0);
                $stmt->bindParam(':B', $a1);
                $stmt->bindParam(':C', $a2);
                $stmt->bindParam(':D', $a3);
                $stmt->bindParam(':E', $a4);
                $stmt->bindParam(':F', $a5);
                $stmt->bindParam(':G', $a6);
                $stmt->bindParam(':H', $a7);
                $stmt->bindParam(':I', $a8);
                $stmt->execute();
               
                return true;
            } catch (PDOException $e) {
                echo "No puede añadir una estancia con el cod_estancia de otra existente.";
                return false;
            }
        }
        
         /*

        */
        function obtenerNiSaNiHa()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT *
                FROM estancia
                WHERE NOT EXISTS (
                  SELECT *
                  FROM habitacion
                  WHERE habitacion.cod_estancia = estancia.cod_estancia
                )
                AND NOT EXISTS (
                  SELECT *
                  FROM sala
                  WHERE sala.cod_estancia = estancia.cod_estancia
                );"
                                                                            );
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
            }
        }


        /*
SELECT que saca las estancias que no estan siendo usadas en la tabla de habitaciones

subconsultas

SELECT *
FROM estancia
WHERE estancia.cod_estancia NOT IN (
  SELECT cod_estancia
  FROM habitacion
  WHERE cod_estancia IS NOT NULL
);

JOIN

SELECT *
FROM estancia
LEFT JOIN habitacion
ON estancia.cod_estancia = habitacion.cod_estancia
WHERE habitacion.cod_estancia IS NULL;

SELECT que saca las estancias que no estan siendo usadas en la tabla de salas

subconsultas

SELECT *
FROM estancia
WHERE estancia.cod_estancia NOT IN (SELECT cod_estancia FROM habitacion);

JOIN

SELECT *
FROM estancia
LEFT JOIN sala
ON estancia.cod_estancia = sala.cod_estancia
WHERE sala.cod_estancia IS NULL;

SQL que muestra las estancias que no estan siendo usadas ni en habitaciones ni en salas
SELECT *
FROM estancia
WHERE NOT EXISTS (
  SELECT *
  FROM habitacion
  WHERE habitacion.cod_estancia = estancia.cod_estancia
)
AND NOT EXISTS (
  SELECT *
  FROM sala
  WHERE sala.cod_estancia = estancia.cod_estancia
);
        */
        function modificarEstancia($cod_estancia, $estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad) 
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA ." SET estado='$estado', descripcion='$descripcion', ubicacion='$ubicacion', planta='$planta', 
                tipo_estancia='$tipo_estancia',
                 precio='$precio', descuento='$descuento', localidad='$localidad' WHERE cod_estancia='$cod_estancia'";
                $cone->exec($sql);
                echo "<br/>modificado estancia";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR ESTANCIA " . $e->getMessage();
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
?>