<?php
include ('../../BD/conexion.php'); 

 //$request = ($_POST);


 $id = $_POST['idusuario'];
 $name = $_POST['nombreus'];
 $appaterno = $_POST['apellidopatus'];
 $apmaterno = $_POST['apellidomatus'];
 $cuatimestre = $_POST['cuatri'];
 $correo = $_POST['correo'];
 $contraseña = $_POST['contraseña'];
 $carrera = $_POST['carrera'];
 $usuario = $_POST['usuario'];



 $sqlquery = "INSERT INTO usuarios (nombreus, apellidopatus, apellidomatus, cuatri, correo, contrsaeña, carrera, usuario) VALUES('NULL','$name','$appaterno','$apmaterno','$cuatimestre','$correo','$contraseña','$carrera','$usuario')";
 
 $result = mysqli_query($conexion,$sqlquery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
 if($result == 1){
    echo "La direccion se dio de alta de manera existos";
 }else{
    echo"ocurrio un error al realizar el registro";
 }
    class usuario{

        // Connection
        private $conn;
        // Table
        private $db_table = "usuarios";
        // Columns
        private $id; 
        private $name;
        private $appaterno; 
        private $apmaterno;
        private $cuatimestre;
        private $correo;
        private $contraseña;
        private $carrera;
        private $usuario;

        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getusuario(){
            $sqlQuery = "SELECT idusuario, nombreus, apellidopatus, apellidomatus, cuatri, correo, contrsaeña, carrera, usuario FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createusuario($request ){

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        email = :description
                        
                        
                        
                        
                        
                        
                        
                        ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->appaterno=htmlspecialchars(strip_tags($this->appaterno));
            $this->appaterno=htmlspecialchars(strip_tags($this->appaterno));
            $this->appaterno=htmlspecialchars(strip_tags($this->appaterno));
            $this->appaterno=htmlspecialchars(strip_tags($this->appaterno));

        
            // bind data
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":email", $this->description);
         
        
            if($stmt->execute()){
                echo 'Employee created successfully.';
             }
                echo 'Employee could not be created.';
            }
        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
                        id, 
                        name, 
                        email, 
                        age, 
                        designation, 
                        created
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->name = $dataRow['name'];
            $this->email = $dataRow['email'];
            $this->age = $dataRow['age'];
            $this->designation = $dataRow['designation'];
            $this->created = $dataRow['created'];
        }        
        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        email = :email, 
                        age = :age, 
                        designation = :designation, 
                        created = :created
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->age=htmlspecialchars(strip_tags($this->age));
            $this->designation=htmlspecialchars(strip_tags($this->designation));
            $this->created=htmlspecialchars(strip_tags($this->created));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":age", $this->age);
            $stmt->bindParam(":designation", $this->designation);
            $stmt->bindParam(":created", $this->created);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteEmployee(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  

?>


