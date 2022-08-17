<?php
include ('../../BD/conexion.php'); 

  $request = ($_POST);


 $nombreus=$_POST['nombreus'];
 $apellidopatus=$_POST['apellidopatus'];
 $apellidomatus=$_POST['apellidomatus'];
 $cuatri=$_POST['cuatri'];
 $correo=$_POST['correo'];
 $contraseña=$_POST['contraseña'];
 $carrera=$_POST['carrera'];
 $usuario=$_POST['usuario'];


 $sqlQuery= "INSERT INTO usuarios (nombreus, apellidopatus, apellidomatus, cuatri, correo, contraseña, carrera, usuario) VALUES('$nombreus','$apellidopatus','$apellidomatus','$cuatri','$correo','$contraseña','$carrera','$usuario')";
 
 $result = mysqli_query($conexion,$sqlQuery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
 if($result == 1){
    echo "Se dio de alta de manera existo";
 }else{
    echo"ocurrio un error al realizar el registro";
 }
    class usuario{

        // Connection
        private $conn;
        // Table
        private $db_table = "usuarios";
        // Columns
        private $nombreus;
        private $apellidopatus; 
        private $apellidomatus;
        private $cuatri;
        private $correo;
        private $contraseña;
        private $carrera;
        private $usuario;

        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getUsuario(){
            $sqlQuery = "SELECT idusuario, nombreus, apellidopatus, apellidomatus, cuatri, correo, contrsaeña, carrera, usuario FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createUsuario($request ){

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        idusuario = :null, 
                        nombreus = :nombreus,
                        apellidopatus = :apellidopatus,
                        apellidomatus = :apellidomatus,
                        cuatri = :cuatri,
                        correo = :correo,
                        contraseña = :contraseña,
                        carrera = :carrera,
                        usuario = :usuario                               
                        ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nombreus=htmlspecialchars(strip_tags($this->nombreus));
            $this->apellidopatus=htmlspecialchars(strip_tags($this->apellidopatus));
            $this->apellidomatus=htmlspecialchars(strip_tags($this->apellidomatus));
            $this->cuatri=htmlspecialchars(strip_tags($this->cuatri));
            $this->correo=htmlspecialchars(strip_tags($this->correo));
            $this->contraseña=htmlspecialchars(strip_tags($this->contraseña));
            $this->carrera=htmlspecialchars(strip_tags($this->carrera));
            $this->usuario=htmlspecialchars(strip_tags($this->usuario));


        
            // bind data
            $stmt->bindParam(":nombreus", $this->nombreus);
            $stmt->bindParam(":apellidopatus", $this->apellidopatus);
            $stmt->bindParam(":apellidomatus", $this->apellidomatus);
            $stmt->bindParam(":cuatri", $this->cuatri);
            $stmt->bindParam(":correo", $this->correo);
            $stmt->bindParam(":contraseña", $this->contraseña);
            $stmt->bindParam(":carrera", $this->carrera);
            $stmt->bindParam(":usuario", $this->usuario);

        
            if($stmt->execute()){
                echo 'Creado exitosamente';
             }
                echo 'No se pudo crear.';
            }
        // READ single
        public function getSingleUsuario(){
            $sqlQuery = "SELECT
                        idusuario, 
                        nombreus, 
                        apellidopatus, 
                        apellidomatus, 
                        cuatri, 
                        correo,
                        contraseña,
                        carrera,
                        usuario
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       idusuario = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->idusuario);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->idusuario = $dataRow['idusuario'];
            $this->nombreus = $dataRow['nombreus'];
            $this->apellidopatus = $dataRow['apellidopatus'];
            $this->apellidomatus = $dataRow['apellidomatus'];
            $this->cuatri = $dataRow['cuatri'];
            $this->correo = $dataRow['correo'];
            $this->contraseña = $dataRow['contraseña'];
            $this->carrera = $dataRow['carrera'];
            $this->usuario = $dataRow['usuario'];


        }        
        // UPDATE
        public function updateUsuario(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    idusuario = :null, 
                    nombreus = :nombreus,
                    apellidopatus = :apellidopatus,
                    apellidomatus = :apellidomatus,
                    cuatri = :cuatri,
                    correo = :correo,
                    contraseña = :contraseña,
                    carrera = :carrera,
                    usuario = :usuario  
                    WHERE 
                        usuario = :usuario";
        
            $stmt = $this->conn->prepare($sqlQuery);
    
            $this->nombreus=htmlspecialchars(strip_tags($this->nombreus));
            $this->apellidopatus=htmlspecialchars(strip_tags($this->apellidopatus));
            $this->apellidomatus=htmlspecialchars(strip_tags($this->apellidomatus));
            $this->cuatri=htmlspecialchars(strip_tags($this->cuatri));
            $this->correo=htmlspecialchars(strip_tags($this->correo));
            $this->contraseña=htmlspecialchars(strip_tags($this->contraseña));
            $this->carrera=htmlspecialchars(strip_tags($this->carrera));
            $this->usuario=htmlspecialchars(strip_tags($this->usuario));

        
            // bind data
            $stmt->bindParam(":nombreus", $this->nombreus);
            $stmt->bindParam(":apellidopatus", $this->apellidopatus);
            $stmt->bindParam(":apellidomatus", $this->apellidomatus);
            $stmt->bindParam(":cuatri", $this->cuatri);
            $stmt->bindParam(":correo", $this->correo);
            $stmt->bindParam(":contraseña", $this->contraseña);
            $stmt->bindParam(":carrera", $this->carrera);
            $stmt->bindParam(":usuario", $this->usuario);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteUsuario(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE idusuario = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->idusuario=htmlspecialchars(strip_tags($this->idusuario));
        
            $stmt->bindParam(1, $this->idusuario);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  

?>


