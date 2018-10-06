<?php
class Test extends CI_Controller {

public function index()
{
    $this->load->model('Product_model', 'product');
    $this->product->get();
}
}