<?php
include ('../../BD/conexion.php'); 

  $request = ($_POST);


 $nombreeve=$_POST['nombreeve'];
 $usuario=$_POST['usuario'];
 $fecha=$_POST['fecha'];
 $idevento=$_POST['idevento'];
 


 $sqlQuery= "INSERT INTO resultados (nombreeve, usuario, fecha, idevento) VALUES('$nombreeve','$usuario','$fecha','$idevento')";
 
 $result = mysqli_query($conexion,$sqlQuery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
 if($result == 1){
    echo "Se dio de alta de manera existo";
 }else{
    echo"ocurrio un error al realizar el registro";
 }
    class resultados{

        // Connection
        private $conn;
        // Table
        private $db_table = "resultados";
        // Columns
        private $nombreeve;
        private $usuario; 
        private $fecha;
        private $idevento;
        

        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getResultados(){
            $sqlQuery = "SELECT idresul, nombreeve, usuario, fecha, idevento FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createResultado($request ){

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        idresul = :null, 
                        nombreeve = :nombreeve,
                        usuario = :usuario,
                        fecha = :fecha,
                        idevento = :idevento,
                                                     
                        ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nombreeve=htmlspecialchars(strip_tags($this->nombreeve));
            $this->usuario=htmlspecialchars(strip_tags($this->usuario));
            $this->fecha=htmlspecialchars(strip_tags($this->fecha));
            $this->idevento=htmlspecialchars(strip_tags($this->idevento));



        
            // bind data
            $stmt->bindParam(":nombreeve", $this->nombreeve);
            $stmt->bindParam(":usuario", $this->usuario);
            $stmt->bindParam(":fecha", $this->fecha);
            $stmt->bindParam(":idevento", $this->idevento);
            

        
            if($stmt->execute()){
                echo 'Creado exitosamente';
             }
                echo 'No se pudo crear.';
            }
        // READ single
        public function getSingleResultados(){
            $sqlQuery = "SELECT
                        idresul, 
                        nombreeve, 
                        usuario, 
                        fecha, 
                        idevento, 
                       
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       idresul = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->idresul);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->idresul = $dataRow['idresul'];
            $this->nombreeve = $dataRow['nombreeve'];
            $this->usuario = $dataRow['usuario'];
            $this->fecha = $dataRow['fecha'];
            $this->idevento = $dataRow['idevento'];
 


        }        
        // UPDATE
        public function updateResultados(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    idresul = :null, 
                    nombreeve = :nombreeve,
                    usuario = :usuario,
                    fecha = :fecha,
                    idevento = :idevento
                    
                    WHERE 
                        usuario = :usuario";
        
            $stmt = $this->conn->prepare($sqlQuery);
    
            $this->nombreeve=htmlspecialchars(strip_tags($this->nombreeve));
            $this->usuario=htmlspecialchars(strip_tags($this->usuario));
            $this->fecha=htmlspecialchars(strip_tags($this->fecha));
            $this->idevento=htmlspecialchars(strip_tags($this->idevento));
       

        
            // bind data
            $stmt->bindParam(":nombreeve", $this->nombreeve);
            $stmt->bindParam(":usuario", $this->usuario);
            $stmt->bindParam(":fecha", $this->fecha);
            $stmt->bindParam(":idevento", $this->idevento);
           
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteResult(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE idresul = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->idresul=htmlspecialchars(strip_tags($this->idresul));
        
            $stmt->bindParam(1, $this->idresul);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  
    ?>
