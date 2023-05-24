<?php
    require_once "CRUD.php";

    class Foto extends CRUD {

        private $conexion, $cod_estancia, $foto;
        //  $estado, $descripcion, $ubicacion, $planta, $tipo_estancia, $precio, $descuento, $localidad;
        public static $TABLA = 'foto';

        function __construct($cod_estancia, $foto)
        {
            parent::__construct(self::$TABLA);
            $this->conexion = parent::conectar();
            $this->cod_estancia = $cod_estancia;
            $this->foto = $foto;
        }

        /*

        */
        function crearFoto()
        {
            try {
                $a1 = $this->__get('cod_estancia');
                $a2 = $this->__get('foto');

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_estancia, foto) 
                    VALUES (:B, :C)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $a1);
                $stmt->bindParam(':C', $a2);
                $stmt->execute();
                echo '<br/>insertado';
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR FOTO " . $e->getMessage();
            }
        }


        /*

        */
        function modificarFoto($cod_foto, $cod_estancia, $foto)
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA . " SET cod_estancia='$cod_estancia', foto='$foto' WHERE cod_foto='$cod_foto'";
                $cone->exec($sql);
                echo "<br/>modificado foto";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR FOTO " . $e->getMessage();
            }
        }

        /*

        

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