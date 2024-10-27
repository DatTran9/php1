<?
class Car
{
    public $conn;
    public function __construct()
    {

        $this->conn = connectDB();
    }

    public function getAllCars(){
        $sql = "SELECT * FROM cars";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
