<?php
    require_once "conexion.php";

    class CRUD extends Conexion {
        private $conexion;
        private $tabla;
        

        function __construct($tabla)
        {
            parent::__construct();
            $this->conexion = parent::conectar();
            $this->tabla=$tabla;
        }

        /*

        */
        function borrar($cod)
        {
            try {
                $cone = $this->conexion;
                $sql = "DELETE FROM $this->tabla WHERE cod_".$this->tabla." = :A";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':A', $cod);
                $stmt->execute();
                // echo "<br/>eliminado";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL ELIMINAR " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerTodo()
        {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM $this->tabla");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
            }
        }

        /*

        */
        function obtenerId($id)
        {
            try {
                $sql = $this->conexion->prepare("SELECT * FROM $this->tabla WHERE cod_".$this->tabla." = $id");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER POR ID " . $e->getMessage();
            }
        }
    }
    
?>