<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_details_clt extends CI_Controller {

	function Product_details_clt()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_mdl');
		
	}
	
	public function index()
	{
		//$data['current_page'] = "Home";
		
		
		$this->load->library('../controllers/admin/category_ctl');
		$data['category'] = $this->category_ctl->menu_categories();//$category;
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('product_details');
		$this->load->view('footer');
	}
	
	public function product($productCode = '')
	{
		$result = $this->product_mdl->fetchproduct($productCode);
		if(!$result)
		{
			$data['error'] = 'Invalid Product code' ;
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('product_details',$data);
			$this->load->view('footer');
		}
		else
		{
			$data['details'] = $result ;
			
			$this->load->view('header');
			$this->load->view('menu');
			
			$data['products'] = $this->db->query("select * from product ORDER BY created DESC limit 5");
			$this->load->view('product_details',$data);
			$this->load->view('footer');
		}
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */