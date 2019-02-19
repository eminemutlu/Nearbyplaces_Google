<?php
class Area{
 
    private $conn;
    private $table_name = "area";

    public $latitude;
    public $longitude;
    public $radius;
    public $typesty;
    public $nearby_places;
 
    public function __construct($db){
        $this->conn = $db;
    }

    function readOne(){
     

        $query = "SELECT
                    *
                FROM
                    ".$this->table_name."
                WHERE
                    latitude = ".$this->latitude." 
                    AND longitude = ".$this->longitude." 
                    AND radius = ".$this->radius."
                    AND typesty = '".$this->typesty."' 
                    
                LIMIT
                    0,1";
     
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->id = $row['id'];
        $this->latitude = $row['latitude'];
        $this->longitude = $row['longitude'];
        $this->radius = $row['radius'];
        $this->typesty = $row['typesty'];
        $this->nearby_places = $row['nearby_places'];
    }

    function create(){
     
        $query = "INSERT INTO
                    ". $this->table_name ."
                SET
                    latitude=:latitude, longitude=:longitude, radius=:radius, typesty=:typesty, nearby_places=:nearby_places";
     
        $stmt = $this->conn->prepare($query);
     
        $this->latitude=htmlspecialchars(strip_tags($this->latitude));
        $this->longitude=htmlspecialchars(strip_tags($this->longitude));
        $this->radius=htmlspecialchars(strip_tags($this->radius));
        $this->typesty=($this->typesty);
        $this->nearby_places=($this->nearby_places);
     
        $stmt->bindParam(":latitude", $this->latitude);
        $stmt->bindParam(":longitude", $this->longitude);
        $stmt->bindParam(":radius", $this->radius);
        $stmt->bindParam(":typesty", $this->typesty);
        $stmt->bindParam(":nearby_places", $this->nearby_places);
     
       
        if($stmt->execute()){
            return true;
        }
        return false;
         
    }
   

}
