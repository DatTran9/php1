<?
class bookController{

    public $bookModel;
    public function __construct()
    {
        $this->bookModel = new Car();
    }
    public function getList(){
        $books = $this->bookModel->getAllCars();
        require_once './views/list.php';
    }
}
?>