<?php

require_once APPPATH . 'core/MY_Controller.php';

class Product_single extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($productId = false)
    {
        // No productId sent through the request - throw a 404.
        if (!$productId)
        {
            print_r('404');
            die();
        } 
        else 
        {
            $this->load->model('Products_model', 'products');
            $data['product'] = $this->products->getOneById((int)$productId);

            // We found a product with the sent productId so we can go on generating the rest of the page.
            if (!empty($data['product']))
            {
                $data['categories'] = $this->_categories;
                $data['content'] = $this->load->view('product_single', $data, true);

                addJs(array(
                    'js/cookie.js',
                    'js/tempCart.js'
                ));
                
                $this->load->view('main', $data);
            }

            
        }
        
    }
}