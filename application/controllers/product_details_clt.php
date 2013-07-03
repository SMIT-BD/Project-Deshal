<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_details_clt extends CI_Controller {

	function Product_details_clt()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('product_mdl');
		$this->load->model('admin_login_model');
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
	
	public function product($pid = '')
	{
		$result = $this->product_mdl->fetchproduct($pid);
		//print_r($result);
		//echo $result['id'];exit;
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
			//echo $pid;exit;
			$data['getreview'] = $this->db->query("SELECT * FROM customerreview where productId=".$result['id']." ");
			//echo $data['getreview'];exit;
			
			$data['products'] = $this->db->query("select * from product ORDER BY created DESC limit 5");
			
			$this->load->view('product_details',$data);
			$this->load->view('footer');
		}
		
		
		
	}
	public function insert_review()
	{
		
		$this->load->model('review_mdl');
		$this->load->model('product_mdl');
		$this->review_mdl->insert_review();
		
		//$data['query']=$this->db->get('customerreview','customerrate');
		//$data1['query1']=$this->db->get('customerrate');
		
		
		
		$result = $this->product_mdl->fetchproduct($_POST['p_id']);
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
			
			//$this->load->view('header');
			// $this->load->view('menu');
			$data['getreview'] = $this->db->query("SELECT * FROM customerreview where productId=".$_POST['p_id']." ");
			//echo $data['getreview'];exit;
			
			$data['products'] = $this->db->query("select * from product ORDER BY created DESC limit 5");
			//$this->product($_POST['p_id']);
			// $this->load->view('product_details',$data);
			// $this->load->view('footer');
			
			//redirect(base_url());
			redirect(base_url('/index.php/product_details_clt/product/'.$_POST['p_id']));
		}
		

		
		//$this->load->view('product_details');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */