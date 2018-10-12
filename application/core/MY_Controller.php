<?php

class MY_Controller extends CI_Controller
{
    protected $_categories;
    protected $_bagCount;

    public function __construct()
    {
		parent::__construct();

        $data = array();
        $this->load->helper('asset');
        
        /**
		 * Load relevant models.
		 */
		$this->load->model('categories_model', 'categories');

        /**
		 * Get main navigation items displayed in the shared header.
		 */	 
        $this->_categories = $this->categories->getAll();
        $this->_bagCount = 0;
    }
}