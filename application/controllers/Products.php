<?php

require_once APPPATH . 'core/MY_Controller.php';

class Products extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['categories'] = $this->_categories;
        $data['content'] = $this->load->view('products', '', true);
        $data['bagCount'] = $this->_bagCount;

        addCss(array(
            'css/home.css',
            'css/products.css',
            'css/rzslider.css'
        ));

        addJs(array(
            'js/libraries/angular/angular.min.js',
            'js/libraries/rzslider/rzslider.min.js',
            'js/app.js'
        ));

        $this->load->view('main', $data);
    }
}