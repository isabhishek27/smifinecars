<?php
namespace Modules\Admin\Controllers;

use App\Controllers\BackendController;
use Modules\Admin\Libraries\Adminauth;

// use Config\Email;

use Config\Services;

class Dashboard extends BackendController {
    
    protected $viewDirectory;
    protected $my_model;

    protected $helpers = ['form'];

    public function __construct(){

        // start session
		$this->session = Services::session();

        $admin_auth = new Adminauth(); // loads and creates instance
        $admin_auth->isAdminLoggedIn();
        
        $uri = current_url(true); 
        $module_name = ucfirst($uri->getSegment(1));

        $this->viewDirectory = 'Modules/'. $module_name.'/Views';
    }

    public function index() {  
        //phpinfo();die;
        $data['meta_title']		= 'Dashboard';
		return view($this->viewDirectory . '\dashboard\dashboard_view', $data);
    }   


}