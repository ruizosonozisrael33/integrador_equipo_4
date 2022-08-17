<?php
include ('../../BD/conexion.php'); 

  $request = ($_POST);


 $nombreeve=$_POST['nombreeve'];
 $lugareve=$_POST['lugareve'];
 $fecha=$_POST['fecha'];
 $nomjuego=$_POST['nomjuego'];



 $sqlQuery= "INSERT INTO eventos (nombreeve, lugareve, fecha, nomjuego) VALUES('$nombreeve','$lugareve','$fecha','$nomjuego')";
 
 $result = mysqli_query($conexion,$sqlQuery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
 if($result == 1){
    echo "Se dio de alta de manera existo";
 }else{
    echo"ocurrio un error al realizar el registro";
 }
    class evento{

        // Connection
        private $conn;
        // Table
        private $db_table = "eventos";
        // Columns
        private $nombreeve;
        private $lugareve; 
        private $fecha;
        private $nomjuego;
    

        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getEvento(){
            $sqlQuery = "SELECT idevento, nombreeve, lugareve, fecha, nomjuego FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createEvento($request ){

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        idevento = :null, 
                        nombreeve = :nombreeve,
                        lugareve = :lugareve,
                        fecha = :fecha,
                        nomjuego = :nomjuego,
                                                  
                        ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nombreeve=htmlspecialchars(strip_tags($this->nombreeve));
            $this->lugareve=htmlspecialchars(strip_tags($this->lugareve));
            $this->fecha=htmlspecialchars(strip_tags($this->fecha));
            $this->nomjuego=htmlspecialchars(strip_tags($this->nomjuego));


        
            // bind data
            $stmt->bindParam(":nombreeve", $this->nombreeve);
            $stmt->bindParam(":lugareve", $this->lugareve);
            $stmt->bindParam(":fecha", $this->fecha);
            $stmt->bindParam(":nomjuego", $this->nomjuego);
            $stmt->bindParam(":correo", $this->correo);


        
            if($stmt->execute()){
                echo 'Creado exitosamente';
             }
                echo 'No se pudo crear.';
            }
        // READ single
        public function getSingleEvento(){
            $sqlQuery = "SELECT
                        idevento, 
                        nombreeve, 
                        lugareve, 
                        fecha, 
                        nomjuego, 
                      
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       idevento = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->idevento);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->idevento = $dataRow['idevento'];
            $this->nombreeve = $dataRow['nombreeve'];
            $this->lugareve = $dataRow['lugareve'];
            $this->fecha = $dataRow['fecha'];
            $this->nomjuego = $dataRow['nomjuego'];



        }        
        // UPDATE
        public function updateEvento(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    idevento = :null, 
                    nombreeve = :nombreeve,
                    lugareve = :lugareve,
                    fecha = :fecha,
                    nomjuego = :nomjuego,
                 
                    WHERE 
                        nombreeve = :nombreeve";
        
            $stmt = $this->conn->prepare($sqlQuery);
    
            $this->nombreeve=htmlspecialchars(strip_tags($this->nombreeve));
            $this->lugareve=htmlspecialchars(strip_tags($this->lugareve));
            $this->fecha=htmlspecialchars(strip_tags($this->fecha));
            $this->nomjuego=htmlspecialchars(strip_tags($this->nomjuego));


        
            // bind data
            $stmt->bindParam(":nombreeve", $this->nombreeve);
            $stmt->bindParam(":lugareve", $this->lugareve);
            $stmt->bindParam(":fecha", $this->fecha);
            $stmt->bindParam(":nomjuego", $this->nomjuego);

        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteEvento(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE idevento = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->idevento=htmlspecialchars(strip_tags($this->idevento));
        
            $stmt->bindParam(1, $this->idevento);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  

?>


