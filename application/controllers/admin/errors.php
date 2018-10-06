<?php
class Errors extends CI_Model 
{
    public function index()
    {
        $this->load->model('Error_model', 'error');
        $data = $this->error->getAll();

        $this->load->view('error_reporting', $data);
    }
}