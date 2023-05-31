<?php
    require_once "CRUD.php";

    class Usuario extends CRUD {

            private $conexion, $nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña, $rol;
            public static $TABLA = 'usuario';

            function __construct($nombre, $primer_apellido, $segundo_apellido, $telefono, $correo,  $contraseña, $rol)
            {
                parent::__construct(self::$TABLA);
                $this->conexion = parent::conectar();
                $this->nombre = $nombre;
                $this->primer_apellido = $primer_apellido;
                $this->segundo_apellido = $segundo_apellido;
                $this->telefono = $telefono;
                $this->correo = $correo;
            
                $this->contraseña = $contraseña;
                $this->rol = $rol;

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
            Método que permite crear un usuario
        */
        function crearUsuario() 
        {
            try {
                $nombre = $this->__get('nombre');
                $primer_Ape = $this->__get('primer_apellido');
                $segundo_Ape = $this->__get('segundo_apellido');
                $tel = $this->__get('telefono');
                $email = $this->__get('correo');
                $contraseña = password_hash($this->__get('contraseña'),PASSWORD_DEFAULT);
                $rol = $this->__get('rol');
                

                $cone = $this->conexion;
                $sql = "INSERT INTO " . self::$TABLA . "(cod_usuario, nombre, primer_apellido, segundo_apellido, telefono, correo, contraseña,rol) 
                    VALUES ('', :B, :C, :D, :E, :F, :H, :I)";
                $stmt = $cone->prepare($sql);
                $stmt->bindParam(':B', $nombre);
                $stmt->bindParam(':C', $primer_Ape);
                $stmt->bindParam(':D', $segundo_Ape);
                $stmt->bindParam(':E', $tel);
                $stmt->bindParam(':F', $email);
                $stmt->bindParam(':H', $contraseña);
                $stmt->bindParam(':I', $rol);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL CREAR USUARIO " . $e->getMessage();
                return false;
            }
        }   


        /*
        Método que permite modificar una tupla de usuario
        */
        function modificarUsuario($cod_usuario, $nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $usuario, $contraseña) 
        {
            try {
                $cone = $this->conexion;
                $sql = "UPDATE " . self::$TABLA ." SET nombre='$nombre', primer_apellido='$primer_apellido', segundo_apellido='$segundo_apellido', telefono='$telefono',
                    correo='$correo', usuario='$usuario', contraseña='$contraseña' WHERE cod_usuario='$cod_usuario'";
                $cone->exec($sql);
                echo "<br/>modificado usuario";
            } catch (PDOException $e) {
                echo "<br/>ERROR AL MODIFICAR USUARIO " . $e->getMessage();
            }
        }


        /*
        Método que permite comprobar si un usuario existe otorgando su email y su contraseña
        */
        function comprobarUsuarioBD($id,$contrasenia){

            try {
                $sql = $this->conexion->prepare("SELECT * FROM usuario WHERE correo LIKE '$id' ");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
                
                if(!empty($resultado[0])){
                    //contraseña y comparamos si coincide
                    if(password_verify($contrasenia, $resultado[0]['contraseña'])){
                        // echo "si";
                        return true;
                    }else{
                         echo "<p style='color: red; text-align: center; font-weight: bold;'>Contraseña no válida</p>";
                        return false;
                        
                    }
                    
                }else
                echo "<p style='color: red; text-align: center; font-weight: bold;'>Correo no válido</p>";
                return false;
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER POR ID " . $e->getMessage();
                
            }


        }

        /*
        Método que permite saber si un correo electrónico ya existe en la tabla usuarios
        */
        function comprobarCorreoExistente($correo){
           
            try {
                $sql = $this->conexion->prepare("SELECT * FROM usuario WHERE correo LIKE '$correo' ");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
                
                if(sizeof($resultado) > 0){
                    
                    return true;
                } else return false;

            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER POR ID " . $e->getMessage();
                
            }


        }

        /*
        Método que permite saber si un usuario es de tipo administrador o cliente
        */
        function comprobarTipoUsuario($id,$contrasenia){
           
            //Comprueba de que tipo es el usuairo que inicia sesión, si cliente o administrador

            try {
                $sql = $this->conexion->prepare("SELECT * FROM usuario WHERE correo LIKE '$id' ");
                $sql->execute();
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
              
                    //contraseña y comparamos si coincide
                    if(password_verify($contrasenia, $resultado[0]['contraseña'])){
                        
                        return $resultado;
                    }
              
            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER POR ID " . $e->getMessage();
                
            }

        }

        /*
        Método que que devuelve una tabla de los usuarios administradores
        */
        function obtieneTodosAdmin () {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM usuario WHERE usuario.rol LIKE 'admin'");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);

                    foreach($resultado as $x){
                        echo "<tr>
                        <td>". $x->nombre . "</td>
                        <td>". $x->primer_apellido . "</td>
                        <td>". $x->segundo_apellido ."</td>
                        <td>". $x->telefono . "</td>
                        <td>". $x->correo ."</td>";
                        if( $x->correo != "contacto@imperialretreat.com"){
                            echo " <td><form method='post'> <button name=borrarAdmin value='$x->cod_usuario]'>Borrar</button></form></td>
                            </tr>";
                        } else {
                            echo " <td><form method='post'> <button name=borrarAdmin value='$x->cod_usuario]' disabled>Borrar</button></form></td>
                            </tr>";
                        }
                       
                    }

            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
            }

        }

        /*
        Método que permite obtener la información de un usuario con su correo electrónico
        */
        function obtieneInfoUsuario ($nombreCorreo) {
            try {
                $stmt = $this->conexion->prepare("SELECT * FROM usuario WHERE usuario.correo LIKE '$nombreCorreo'");
                $stmt->execute();
                $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
                
                 return $resultado;

            } catch (PDOException $e) {
                echo "<br/>ERROR AL OBTENER TODOS " . $e->getMessage();
            }

        }

    }
