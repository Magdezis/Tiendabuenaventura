<?php 

class Conexion{
private $host = "localhost"; 
private $user  = "root";
private $ps = "";
private $dbname = "personas";

public function conexion (){
$conn = mysqli_connect($this->host, $this->user, $this->ps, $this->dbname);
if($conn){
    echo("conectado.");
}else{
    echo "error en la conexion.l";
}
return $conn; 

}


}




?>