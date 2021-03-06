<?PHP
	$root_dir = dirname($_SERVER['SCRIPT_FILENAME']);
 	include_once $root_dir . "/controllers/Controller.php";
	include_once $root_dir . "/views/StatusView.php";
	include_once $root_dir . "/models/StatusModel.php";
	class StatusController extends Controller {
		function __construct() {
			$this->view = new StatusView();
			$this->model = new StatusModel();
		}
		function run() {
			$this->view->render();
		}
	}
?>