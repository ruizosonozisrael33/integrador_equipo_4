<?php
include ('../../BD/conexion.php'); 

  $request = ($_POST);


 $nomjuego=$_POST['nomjuego'];
 $versionjuego=$_POST['versionjuego'];
 $consola=$_POST['consola'];
 $añodejuego=$_POST['añodejuego'];
 $idcategoria=$_POST['idcategoria'];



 $sqlQuery= "INSERT INTO juegos (nomjuego, versionjuego, consola, añodejuego, idcategoria) VALUES('$nomjuego','$versionjuego','$consola','$añodejuego','$idcategoria')";
 
 $result = mysqli_query($conexion,$sqlQuery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
 if($result == 1){
    echo "Se dio de alta de manera existo";
 }else{
    echo"ocurrio un error al realizar el registro";
 }
    class juegos{

        // Connection
        private $conn;
        // Table
        private $db_table = "juegos";
        // Columns
        private $nomjuego;
        private $versionjuego; 
        private $consola;
        private $añodejuego;
        private $idcategoria;


        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getJuego(){
            $sqlQuery = "SELECT idjuego, nomjuego, versionjuego, consola, añodejuego, idcategoria FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createJuego($request ){

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        idjuego = :null, 
                        nomjuego = :nomjuego,
                        versionjuego = :versionjuego,
                        consola = :consola,
                        añodejuego = :añodejuego,
                        idcategoria = :idcategoria,
                                                  
                        ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nomjuego=htmlspecialchars(strip_tags($this->nomjuego));
            $this->versionjuego=htmlspecialchars(strip_tags($this->versionjuego));
            $this->consola=htmlspecialchars(strip_tags($this->consola));
            $this->añodejuego=htmlspecialchars(strip_tags($this->añodejuego));
            $this->idcategoria=htmlspecialchars(strip_tags($this->idcategoria));



        
            // bind data
            $stmt->bindParam(":nomjuego", $this->nomjuego);
            $stmt->bindParam(":versionjuego", $this->versionjuego);
            $stmt->bindParam(":consola", $this->consola);
            $stmt->bindParam(":añodejuego", $this->añodejuego);
            $stmt->bindParam(":idcategoria", $this->idcategoria);
 

        
            if($stmt->execute()){
                echo 'Creado exitosamente';
             }
                echo 'No se pudo crear.';
            }
        // READ single
        public function getSingleJuego(){
            $sqlQuery = "SELECT
                        idjuego, 
                        nomjuego, 
                        versionjuego, 
                        consola, 
                        añodejuego, 
                        idcategoria,
                       
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       idjuego = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->idjuego);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->idjuego = $dataRow['idjuego'];
            $this->nomjuego = $dataRow['nomjuego'];
            $this->versionjuego = $dataRow['versionjuego'];
            $this->consola = $dataRow['consola'];
            $this->añodejuego = $dataRow['añodejuego'];
            $this->idcategoria = $dataRow['idcategoria'];
      


        }        
        // UPDATE
        public function updateJuego(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    idjuego = :null, 
                    nomjuego = :nomjuego,
                    versionjuego = :versionjuego,
                    consola = :consola,
                    añodejuego = :añodejuego,
                    idcategoria = :idcategoria,
               
                    WHERE 
                        nomjuego = :nomjuego";
        
            $stmt = $this->conn->prepare($sqlQuery);
    
            $this->nomjuego=htmlspecialchars(strip_tags($this->nomjuego));
            $this->versionjuego=htmlspecialchars(strip_tags($this->versionjuego));
            $this->consola=htmlspecialchars(strip_tags($this->consola));
            $this->añodejuego=htmlspecialchars(strip_tags($this->añodejuego));
            $this->idcategoria=htmlspecialchars(strip_tags($this->idcategoria));
     

        
            // bind data
            $stmt->bindParam(":nomjuego", $this->nomjuego);
            $stmt->bindParam(":versionjuego", $this->versionjuego);
            $stmt->bindParam(":consola", $this->consola);
            $stmt->bindParam(":añodejuego", $this->añodejuego);
            $stmt->bindParam(":idcategoria", $this->idcategoria);
       
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteJuego(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE idjuego = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->idjuego=htmlspecialchars(strip_tags($this->idjuego));
        
            $stmt->bindParam(1, $this->idjuego);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  

?>


