<?php

namespace Modules\Admin\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $db;
    protected $tbl_name;

    public function __construct(){
        $this->db = \Config\Database::connect();
        $this->tbl_name = 'tbl_products';
    }

    public function getRecord($condition=[], $like_con_arr=[], $perPage=2){

        $pager = service('pager');
        $page = (@$_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page-1) * $perPage;

        $builder = $this->db->table($this->tbl_name);
        $data = $builder
            ->where($condition)
            ->like($like_con_arr)
            ->select('tbl_products.*')
            ->orderBy('tbl_products.id', 'DESC')
            ->get($perPage,$offset)
            ->getResult();

        $total = $builder->where($condition)->like($like_con_arr)->countAllResults();

        return [
            'data'=>$data,
            'links' => $pager->makeLinks($page,$perPage,$total,'admin_full')
        ];
    }

    public function addRecord($data){
         return $this->db->table($this->tbl_name)->insert($data);
    }

    public function updateRecord($data,$id){
         return $this->db->table($this->tbl_name)->where(["id" => $id])->set($data)->update();
    }

    public function updateStatus($section,$arr_ids){
        $status_id = '';
        if($section=='enable'){
            $status_id=1;
        }elseif($section=='disable'){
            $status_id=0;
        }elseif($section=='delete'){
            $status_id=2;
        }

        if($status_id !=='' && is_array($arr_ids) && count($arr_ids)>0){
            foreach($arr_ids as $v){
                $this->db->table($this->tbl_name)->where(["id" => $v])->set(['status'=>$status_id])->update();
            }
        }
    }

    public function getSingleRecord($id){
         return $this->db->table($this->tbl_name)->where(["id" => $id])->get()->getRow();
    }

    public function deleteRecord($id){
        return $this->db->table($this->tbl_name)->where('id',$id)->delete();
    }

    public function getDisplayOrder(){
        $disp_order = 1;
        $row = $this->db
                        ->table($this->tbl_name)
                        ->selectMax('disp_order','max_disp_order')
                        ->where(["status <>" => 2])
                        ->get()
                        ->getRow();

        if(!empty($row)){
            $disp_order = $row->max_disp_order;
        }
        return $disp_order;
    }
}
