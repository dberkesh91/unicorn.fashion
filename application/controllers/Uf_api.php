<?php

require APPPATH . 'libraries/vendor/autoload.php';

class Uf_api extends REST_Controller 
{
    public $CI;

    public function __construct()
    {
        parent::__construct();
    }

    public function products_get()
    {
        $action = $this->_get_args['action'];
        
        $this->load->model('products_model');
        $data = $this->products_model->$action();
        $this->response($data);
    }

    public function products_post()
    {
        $params = $this->_post_args;

        $action = $params['action'];
        $filters = $this->_post_args['filters'];

        $this->load->model('products_model');
        $data = $this->products_model->$action($params);
        $this->response($data);
    }
}