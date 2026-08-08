<?php
namespace Modules\Home\Controllers;
use App\Controllers\FrontendController;
use App\Libraries\MyLibrary;
use Modules\Pages\Models\PagesModel;
use Modules\Products\Models\ProductsModel;

class Home extends FrontendController {

    protected $viewDirectory;
    protected $pages_model;
    protected $products_model;
    protected $mylib;
    protected $helpers = ['form'];

    public function __construct(){
        $this->pages_model = new PagesModel();
        $this->products_model = new ProductsModel();
        $this->mylib = new MyLibrary();

        $uri = current_url(true);
        $module_name = ucfirst($uri->getSegment(1));
        if(empty($module_name)){
            $module_name = 'Home';
        }
        $this->viewDirectory = 'Modules/'. $module_name.'/Views';
    }

    public function index() {
        $cond=" AND `page_id` = '1' ";
        $select_fld = "p.`page_title`,p.`page_content`,p.`meta_title`,p.`meta_desc`,p.`meta_keyword`,p.`is_main_page`,c.`cat_name`";
        $pg_data = $this->pages_model->getCmsPageContent($select_fld, $cond);

        if (is_object($pg_data)) {
            $data['meta_title'] = $pg_data->meta_title;
            $data['meta_desc'] = $pg_data->meta_desc;
            $data['meta_keyword'] = $pg_data->meta_keyword;
            $data['page_title'] = $pg_data->page_title;
            $data['page_content'] = str_replace('{{img_path}}', base_url().'/public/assets/', $pg_data->page_content);
        } else {
            $data['meta_title'] = 'Sirius Motorsports Inc. | Premium Luxury Used Cars in Ontario';
            $data['meta_desc'] = 'Premium pre-owned luxury vehicles in Tillsonburg, Ontario.';
            $data['meta_keyword'] = 'Luxury Used Cars, Used Cars Ontario';
        }

        $data['products'] = $this->products_model->getRecords('*', ' AND `is_featured` = 1 ', 6);
        if (empty($data['products'])) {
            $data['products'] = $this->products_model->getRecords('*', '', 6);
        }

        $data['mylib'] = $this->mylib;
        $data['include'] = $this->viewDirectory . '\home_views';
        return view('container', $data);
    }
}
