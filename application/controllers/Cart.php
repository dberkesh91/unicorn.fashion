<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Cart extends MY_Controller {

    private $_cartCookieName = 'cart_items';

    public function __construct() {
        parent::__construct();

        $this->load->helper('cookie');
    }
	public function index()
	{
        $cartItemIds = json_decode(get_cookie($this->_cartCookieName));
        
        $occurences = array_count_values($cartItemIds);
        print_r($occurences); die();
	}
}