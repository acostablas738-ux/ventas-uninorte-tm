<?php
class Conectar{
    protected $dbh;
    public function Conexion(){
        try{
            $this->dbh = new PDO("mysql:host=localhost;dbname=ventas;charset=utf8","root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
            echo "conexion exitosa";
            return $this->dbh;
        }catch(Exception $e){
            echo "Error de conexion de la bd".$e->getMessage();
            die();
        }
    }
    public function set_names(){
        return $this->dbh->query("SET NAME 'utf8'");
    }
}
$conexion = new Conectar;
$conexion->Conexion();

?>
