<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_details_clt extends CI_Controller {

	function Product_details_clt()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_mdl');
		
	}
	
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
	
	public function product($productCode = '')
	{
		$result = $this->product_mdl->fetchproduct($productCode);
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */