<?php
include ('../../BD/conexion.php'); 

  $request = ($_POST);


 $nombrejuego=$_POST['nombrejuego'];
 $nombreus=$_POST['nombreus'];
 $nombreeve=$_POST['nombreeve'];
 $fecha=$_POST['fecha'];
 $idjuego=$_POST['idjuego'];



 $sqlQuery= "INSERT INTO participantes (nombrejuego, nombreus, nombreeve, fecha, idjuego) VALUES('$nombrejuego','$nombreus','$nombreeve','$fecha','$idjuego')";
 
 $result = mysqli_query($conexion,$sqlQuery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
 if($result == 1){
    echo "Se dio de alta de manera existo";
 }else{
    echo"ocurrio un error al realizar el registro";
 }
    class participantes{

        // Connection
        private $conn;
        // Table
        private $db_table = "participantes";
        // Columns
        private $nombrejuego;
        private $nombreus; 
        private $nombreeve;
        private $fecha;
        private $idjuego;


        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getParticipante(){
            $sqlQuery = "SELECT idparticipante, nombrejuego, nombreus, nombreeve, fecha, idjuego FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createParticipante($request ){

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        idparticipante = :null, 
                        nombrejuego = :nombrejuego,
                        nombreus = :nombreus,
                        nombreeve = :nombreeve,
                        fecha = :fecha,
                        idjuego = :idjuego,
                                                     
                        ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nombrejuego=htmlspecialchars(strip_tags($this->nombrejuego));
            $this->nombreus=htmlspecialchars(strip_tags($this->nombreus));
            $this->nombreeve=htmlspecialchars(strip_tags($this->nombreeve));
            $this->fecha=htmlspecialchars(strip_tags($this->fecha));
            $this->idjuego=htmlspecialchars(strip_tags($this->idjuego));
       


        
            // bind data
            $stmt->bindParam(":nombrejuego", $this->nombrejuego);
            $stmt->bindParam(":nombreus", $this->nombreus);
            $stmt->bindParam(":nombreeve", $this->nombreeve);
            $stmt->bindParam(":fecha", $this->fecha);
            $stmt->bindParam(":idjuego", $this->idjuego);
       

        
            if($stmt->execute()){
                echo 'Creado exitosamente';
             }
                echo 'No se pudo crear.';
            }
        // READ single
        public function getSingleParticipante(){
            $sqlQuery = "SELECT
                        idparticipante, 
                        nombrejuego, 
                        nombreus, 
                        nombreeve, 
                        fecha, 
                        idjuego
                        
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       idparticipante = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->idparticipante);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->idparticipante = $dataRow['idparticipante'];
            $this->nombrejuego = $dataRow['nombrejuego'];
            $this->nombreus = $dataRow['nombreus'];
            $this->nombreeve = $dataRow['nombreeve'];
            $this->fecha = $dataRow['fecha'];
            $this->idjuego = $dataRow['idjuego'];
        


        }        
        // UPDATE
        public function updateParticipante(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    idparticipante = :null, 
                    nombrejuego = :nombrejuego,
                    nombreus = :nombreus,
                    nombreeve = :nombreeve,
                    fecha = :fecha,
                    idjuego = :idjuego
                  
                    WHERE 
                        usuario = :usuario";
        
            $stmt = $this->conn->prepare($sqlQuery);
    
            $this->nombrejuego=htmlspecialchars(strip_tags($this->nombrejuego));
            $this->nombreus=htmlspecialchars(strip_tags($this->nombreus));
            $this->nombreeve=htmlspecialchars(strip_tags($this->nombreeve));
            $this->fecha=htmlspecialchars(strip_tags($this->fecha));
            $this->idjuego=htmlspecialchars(strip_tags($this->idjuego));
          

        
            // bind data
            $stmt->bindParam(":nombrejuego", $this->nombrejuego);
            $stmt->bindParam(":nombreus", $this->nombreus);
            $stmt->bindParam(":nombreeve", $this->nombreeve);
            $stmt->bindParam(":fecha", $this->fecha);
            $stmt->bindParam(":idjuego", $this->idjuego);
     
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteParticipante(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE idparticipante = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->idparticipante=htmlspecialchars(strip_tags($this->idparticipante));
        
            $stmt->bindParam(1, $this->idparticipante);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  

?>


