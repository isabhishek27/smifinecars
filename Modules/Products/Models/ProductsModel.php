<?php

namespace Modules\Products\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $db;
    protected $tbl_name;

    public function __construct(){
        $this->db = \Config\Database::connect();
        $this->tbl_name = 'tbl_products';
    }

    public function getRecords($select_flds='*', $condition='', $limit=''){
        $sql = "SELECT $select_flds FROM `$this->tbl_name` WHERE 1 AND `status` = 1 ";
        if(!empty($condition)){
            $sql .= $condition;
        }
        $sql .= " ORDER BY `disp_order` ASC, `id` DESC";
        if((int)$limit > 0){
            $sql .= " LIMIT ".(int)$limit;
        }
        return $this->db->query($sql)->getResult();
    }

    public function getSingleRecord($url_slug){
        return $this->db
            ->table($this->tbl_name)
            ->where(['url_slug' => $url_slug, 'status' => 1])
            ->get()
            ->getRow();
    }

    public function getGallery($product_id){
        return $this->db
            ->table('tbl_products_gallery')
            ->where(['product_id' => $product_id, 'status' => 1])
            ->orderBy('disp_order', 'ASC')
            ->get()
            ->getResult();
    }
}
