<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function get_all_count_product()
    {
        $this->db->from('test_1_product');
        return $this->db->count_all_results();
    }
        
    function get_list_product($limit, $start)
    {   
        $this->db->limit($limit, $start);
        $this->db->select('p.id as product_id, p.category_id, p.title, p.price, c.name as category_name');
        $this->db->from('test_1_product p');
        $this->db->join('test_1_category c', 'c.category_id = p.category_id');
        return $this->db->get()->result_array();
    }
}
