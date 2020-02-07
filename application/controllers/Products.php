<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public $per_page = 3;
    public $page;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    } 

	public function index()
	{
        $this->page = ($this->input->get('page')) ? $this->input->get('page') : 0;
        

        $data_list_product = $this->data_list_product();
        
        $data['product_total'] = $data_list_product['product_total'];

        // Load Pagination
        $this->load->library('pagination');

        // Design Pagination Bootstrap
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        // End Design Pagination Bootstrap
        $config['base_url'] = base_url('products/');
        $config['total_rows'] = $data['product_total'] / $this->per_page;
        $config['per_page'] = $this->per_page;
        $config["page_query_string"] = true;
        $config["query_string_segment"] = 'page';
        
        $this->pagination->initialize($config);

        $data['products'] = $data_list_product['data'];        
     
        $this->load->view('products/show-list', $data);
    }
    
    // Function Load Data
    public function data_list_product()
    {
        $products = $this->Product_model->get_list_product($this->per_page, $this->page);
        $data['product_total'] = $this->Product_model->get_all_count_product();

        $data['data'] = [];
        foreach ($products as $product) {
            $data['data'][] = [
                'product_id' => $product['product_id'],
                'title' => $product['title'],
                'category_name' => $product['category_name'],
                'price' => $product['price']
            ];
        }

        return $data;
    }

    public function tes()
    {
        echo "tes ".$this->input->get('id');
    }
}
