<?php
include ('../../BD/conexion.php'); 

  $request = ($_POST);


 $nombrecat=$_POST['nombrecat'];




 $sqlQuery= "INSERT INTO catjuegos (nombrecat) VALUES('$nombrecat')";
 
 $result = mysqli_query($conexion,$sqlQuery) or trigger_error("query fail sql-error". mysqli_error($conexion));
 
if($result == 1){
    echo "Se dio de alta de manera existo";
    echo '<a href="../tablacatjuego.php">Regresar al panel</a>';

 }else{
    echo"ocurrio un error al realizar el registro";
    echo '<a href="../tablacatjuego.php">Regresar al panel</a>';

 }
    class evento{

        // Connection
        private $conn;
        // Table
        private $db_table = "catjuegos";
        // Columns
        private $nombrecat;
  
    

        // Db connection
        public function __construct($conexion){
            $this->conn = $conexion;
        }
        // GET ALL
        public function getCategoria(){
            $sqlQuery = "SELECT idcategoria, nombrecat  FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createCategoria($request ){

            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        idcategoria = :null, 
                        nombrecat = :nombrecat,

                                                  
                        ";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->nombrecat=htmlspecialchars(strip_tags($this->nombrecat));
    


        
            // bind data
            $stmt->bindParam(":nombrecat", $this->nombrecat);



        
            if($stmt->execute()){
                echo 'Creado exitosamente';
             }
                echo 'No se pudo crear.';
            }
        // READ single
        public function getSingleCategoria(){
            $sqlQuery = "SELECT
                        idcategoria, 
                        nombrecat, 
                     
                      
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       idcategoria = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->idcategoria);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->idcategoria = $dataRow['idcategoria'];
            $this->nombrecat = $dataRow['nombrecat'];
      



        }        
        // UPDATE
        public function updateCategoria(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                    idcategoria = :null, 
                    nombrecat = :nombrecat,
                
                 
                    WHERE 
                        nombrecat = :nombrecat";
        
            $stmt = $this->conn->prepare($sqlQuery);
    
            $this->nombrecat=htmlspecialchars(strip_tags($this->nombrecat));
          


        
            // bind data
            $stmt->bindParam(":nombrecat", $this->nombrecat);
        

        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteCategoria(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE idcategoria = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->idcategoria=htmlspecialchars(strip_tags($this->idcategoria));
        
            $stmt->bindParam(1, $this->idcategoria);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
  

?>
