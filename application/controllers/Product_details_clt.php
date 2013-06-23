<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_details_clt extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$data['current_page'] = "Home";
		
		$this->load->view('header');
			$this->load->library('../controllers/admin/category_ctl');
			$data['category'] = $this->category_ctl->menu_categories();//$category;
		$this->load->view('menu');
		$this->load->view('Product_details');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */