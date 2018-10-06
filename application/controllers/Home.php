<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Home extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/**
		 * Load page specific css and js.
		 */
		addCss(array('css/home.css'));
		addJs(array('js/home.js'));
		
		$data['categories'] = $this->_categories;
		/**
		 * Content that should go into the main template.
		 */
		$data['content'] = $this->load->view('home', '', true);

		$this->load->view('main', $data);
	}
}
