<?php
namespace Modules\Admin\Controllers;

use App\Controllers\BackendController;
use Modules\Admin\Libraries\Adminauth;
use Config\Services;
use Modules\Admin\Models\ProductModel;

class Product extends BackendController {

    protected $viewDirectory;
    protected $my_model;
    protected $helpers = ['form'];
    protected $login_admin_id;
    protected $current_date_time;

    public function __construct(){
        $this->session = Services::session();
        $admin_auth = new Adminauth();
        $admin_auth->isAdminLoggedIn();
        $this->login_admin_id = session()->get('admin_id');
        $this->current_date_time = date('Y-m-d H:i:s');
        $this->my_model = new ProductModel();

        $uri = current_url(true);
        $module_name = ucfirst($uri->getSegment(1));
        $module_view_folder = ucfirst($uri->getSegment(2));
        $this->viewDirectory = 'Modules/'. $module_name.'/Views/'.$module_view_folder;
    }

    public function index() {
        $data['pager'] = $this->my_model->pager;
        $data['curr_paging'] = $this->request->getVar('page');
        $data['meta_title'] = 'Inventory / Products';
        $data['meta_desc'] = 'Inventory / Products';
        $data['meta_keyword'] = 'Inventory / Products';

        $arr_ids = $this->request->getPost('arr_ids');
        $action_type = $this->request->getPost('action_type');
        if($action_type !=NULL && $arr_ids !=NULL && is_array($arr_ids) && count($arr_ids)>0){
            $this->my_model->updateStatus($action_type,$arr_ids);
            $this->session->setFlashData("success", "Record has been ".$action_type."d successfully.");
            return redirect()->to(site_url('admin/product'));
        }

        $keyword = '';
        $status = '';
        $stock_status = '';
        $like_cond =[];
        if($this->request->getVar('keyword')!=NULL){
            $like_cond['tbl_products.name'] = $keyword = $this->request->getVar('keyword');
        }
        $cond['tbl_products.status !='] = 2;

        if($this->request->getVar('status')!=NULL){
            $cond['tbl_products.status'] = $status = $this->request->getVar('status');
        }
        if($this->request->getVar('stock_status')!=NULL){
            $cond['tbl_products.stock_status'] = $stock_status = $this->request->getVar('stock_status');
        }

        $data['keyword'] = $keyword;
        $data['status'] = $status;
        $data['stock_status'] = $stock_status;

        $per_page = config('MyApplication')->admin_per_page;
        $results = $this->my_model->getRecord($cond,$like_cond,$per_page);
        $data['result'] = $results['data'];
        $data['links'] = $results['links'];
        $data['page_heading'] = 'Inventory / Products';

        return view($this->viewDirectory . '\list_view', $data);
    }

    public function edit($id = null){
        $uri = current_url(true);
        $id = (int)($id !== null ? $id : $uri->getSegment(4));
        $row = $this->my_model->getSingleRecord($id);
        $data['row'] = $row;
        $data['curr_page'] = ($this->request->getVar('page')!=NULL)?$this->request->getVar('page'):'';
        $data['validation'] = [];

        if(!is_object($row)){
            $this->session->setFlashData("error", "Invalid Id.");
            return redirect()->to(site_url('admin/product'));
        }

        if ($this->request->is('post')) {
            $validation = service('validation');
            $rules = [
                "id" => ["label" => "Id", "rules" => "max_length[19]|is_natural_no_zero"],
                "name" => ["label" => "Vehicle title", "rules" => "required|min_length[3]|max_length[200]|is_unique[tbl_products.name,tbl_products.id,{id}]"],
                "price" => ["label" => "Price", "rules" => "required|decimal|greater_than_equal_to[0]"],
                "stock_status" => ["label" => "Stock status", "rules" => "required|in_list[available,sold]"],
                "transmission" => ["label" => "Transmission", "rules" => "permit_empty|max_length[50]"],
                "mileage" => ["label" => "Mileage", "rules" => "permit_empty|max_length[50]"],
                "meta_title" => ["label" => "Meta title", "rules" => "max_length[200]"],
                "meta_desc" => ["label" => "Meta description", "rules" => "max_length[250]"],
                "meta_keyword" => ["label" => "Meta keyword", "rules" => "max_length[200]"],
            ];

            $photo = $this->request->getFile('photo');
            if ($photo && $photo->isValid() && $photo->getError() === UPLOAD_ERR_OK) {
                $rules['photo'] = ["label" => "Photo", "rules" => "uploaded[photo]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]"];
            }

            if ($this->validate($rules)) {
                $postdata = [
                    "name" => $this->request->getPost("name"),
                    "url_slug" => url_title($this->request->getPost("name"),'-',true),
                    "subtitle" => $this->request->getPost("subtitle"),
                    "price" => $this->request->getPost("price"),
                    "price_note" => $this->request->getPost("price_note"),
                    "mileage" => $this->request->getPost("mileage"),
                    "exterior_color" => $this->request->getPost("exterior_color"),
                    "interior_color" => $this->request->getPost("interior_color"),
                    "transmission" => $this->request->getPost("transmission"),
                    "stock_status" => $this->request->getPost("stock_status"),
                    "is_featured" => (int)$this->request->getPost("is_featured"),
                    "is_certified" => (int)$this->request->getPost("is_certified"),
                    "year" => $this->request->getPost("year"),
                    "make" => $this->request->getPost("make"),
                    "model" => $this->request->getPost("model"),
                    "product_desc" => $this->request->getPost("product_desc"),
                    "meta_title" => $this->request->getPost("meta_title"),
                    "meta_desc" => $this->request->getPost("meta_desc"),
                    "meta_keyword" => $this->request->getPost("meta_keyword"),
                ];

                $img = $this->request->getFile('photo');
                if ($img && $img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $img->move(FCPATH . 'uploads/products/', $newName);
                    $postdata['photo'] = $newName;
                    $old_img_path = FCPATH . 'uploads/products/'.$row->photo;
                    if(!empty($row->photo) && is_file($old_img_path)){
                        unlink($old_img_path);
                    }
                }

                $this->my_model->updateRecord($postdata,$row->id);
                $this->session->setFlashData("success", "Record has been updated successfully.");
                $redirect_url = site_url('admin/product');
                if($this->request->getPost('page')!=NULL){
                    $redirect_url .='?page='.$this->request->getPost('page');
                }
                return redirect()->to($redirect_url);
            }else{
                $data["validation"] = $validation->getErrors();
            }
        }

        $data['meta_title'] = 'Edit Product';
        $data['meta_desc'] = 'Edit Product';
        $data['meta_keyword'] = 'Edit Product';
        $data['page_heading'] = 'Edit Product';
        return view($this->viewDirectory . '\edit_view', $data);
    }

    public function add(){
        if ($this->request->is('post')) {
            $validation = service('validation');
            $rules = [
                "name" => ["label" => "Vehicle title", "rules" => "required|min_length[3]|max_length[200]|is_unique[tbl_products.name]"],
                "price" => ["label" => "Price", "rules" => "required|decimal|greater_than_equal_to[0]"],
                "stock_status" => ["label" => "Stock status", "rules" => "required|in_list[available,sold]"],
                "photo" => ["label" => "Photo", "rules" => "uploaded[photo]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]"],
                "meta_title" => ["label" => "Meta title", "rules" => "max_length[200]"],
                "meta_desc" => ["label" => "Meta description", "rules" => "max_length[250]"],
                "meta_keyword" => ["label" => "Meta keyword", "rules" => "max_length[200]"],
            ];

            if ($this->validate($rules)) {
                $newName = '';
                $img = $this->request->getFile('photo');
                if ($img && $img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $img->move(FCPATH . 'uploads/products/', $newName);
                }

                $display_order = $this->my_model->getDisplayOrder()+1;
                $postdata = [
                    "name" => $this->request->getPost("name"),
                    "url_slug" => url_title($this->request->getPost("name"),'-',true),
                    "subtitle" => $this->request->getPost("subtitle"),
                    "photo" => $newName,
                    "price" => $this->request->getPost("price"),
                    "price_note" => $this->request->getPost("price_note"),
                    "mileage" => $this->request->getPost("mileage"),
                    "exterior_color" => $this->request->getPost("exterior_color"),
                    "interior_color" => $this->request->getPost("interior_color"),
                    "transmission" => $this->request->getPost("transmission"),
                    "stock_status" => $this->request->getPost("stock_status"),
                    "is_featured" => (int)$this->request->getPost("is_featured"),
                    "is_certified" => (int)$this->request->getPost("is_certified"),
                    "year" => $this->request->getPost("year"),
                    "make" => $this->request->getPost("make"),
                    "model" => $this->request->getPost("model"),
                    "product_desc" => $this->request->getPost("product_desc"),
                    "disp_order" => $display_order,
                    "status" => 1,
                    "created_at" => $this->current_date_time,
                    "meta_title" => $this->request->getPost("meta_title"),
                    "meta_desc" => $this->request->getPost("meta_desc"),
                    "meta_keyword" => $this->request->getPost("meta_keyword"),
                ];
                $this->my_model->addRecord($postdata);
                $this->session->setFlashData("success", "Record has been added successfully.");
                return redirect()->to(site_url('admin/product'));
            }else{
                $data["validation"] = $validation->getErrors();
            }
        }

        $data['meta_title'] = 'Add Product';
        $data['meta_desc'] = 'Add Product';
        $data['meta_keyword'] = 'Add Product';
        $data['page_heading'] = 'Add Product';
        return view($this->viewDirectory . '\add_view', $data);
    }

    public function delete($id = null){
        $uri = current_url(true);
        $id = (int)($id !== null ? $id : $uri->getSegment(4));
        $this->my_model->deleteRecord($id);
        $this->session->setFlashData("success", "Record has been deleted successfully.");
        return redirect()->to(site_url('admin/product'));
    }
}
