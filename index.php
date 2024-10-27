<?
require_once './common/env.php';
require_once './common/connect.php';

require_once './controllers/bookController.php';
require_once './models/bookModel.php';

$act = $_GET['act'] ?? '/';
switch ($act) {
    case '/':
        echo "Home";
        break;
    case 'list':
       (new bookController())->getList();
        break;
    // case 'detail':
    //     (new Car())->getDetail();
    //     break;
    case 'Update':
        echo "update";
        break;

    default:
        echo "Somethng went wrong";
        break;
}
