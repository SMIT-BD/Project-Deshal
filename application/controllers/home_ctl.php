<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_ctl extends CI_Controller {

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
	 
	function __construct()
    {
        parent::__construct();
		$this->load->model('category_mdl');
		
    } 
	
	public function index()
	{
		//$data['current_page'] = "Home";
		
		
		//vaj($bigAss);
		/*
		for($i=0; $i<count($bigAss); $i++)// $bigAss as $value)
		{
			//vaj( $value );
			foreach($bigAss[$i] as $key => $val)
			{
				//echo $key.'=>'.$val.'2<br/>';
				$category = array(  'id' => $val,
									'name'=> $val,
									'data'=> 'somethings');
				
			}
		
		}
		vaj($category);
		
				// vaj($originalSubcatAr->result_array()); exit;
		*/
		
		
		
		
		
		$categoryAr = $this->category_mdl->catListRaw();
		$category = array();  //vaj($categoryAr); exit;;
		
		if($categoryAr != false)
		{
			foreach ($categoryAr->result() as $bigCatrow)
			{
				$manWomanAr = $this->category_mdl->subcatListRaw($bigCatrow->id);
				$manWoman = array();
				foreach ($manWomanAr->result() as $SubCatrow)
				{
					$originalSubcatAr = $this->category_mdl->subcatListRaw($SubCatrow->id);
					$originalSubcat = array();
					foreach ($originalSubcatAr->result() as $row)
					{
						array_push($originalSubcat ,array(  	'id' => $row->id,
																'name'=> $row->name
														)
								);
					}
					array_push($manWoman ,array(  	'id' => $SubCatrow->id,
													'name'=> $SubCatrow->name,
													'data'=> $originalSubcat
												)
						  );
				}
				array_push($category ,array(  	'id' => $bigCatrow->id,
												'name'=> $bigCatrow->name,
												'data'=> $manWoman
											)
						  );
			}
			//vaj($category);
			//$data['category'] = $category;
			//$this->load->controller('category_ctl');
			// vaj($this->category_ctl->menu_categories());
			// echo 's'; exit;
		}
		$data['query'] = $this->db->query("select * from product ORDER BY created DESC limit 8");
		$data['products'] = $this->db->query("select * from product ORDER BY created DESC limit 20");
		
		
		$this->load->view('header');
		//echo "ok";die;
		$this->load->view('menu');//, $data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	
	function temp_grid($val)  // Home_ctl/temp_grid
	{
		/*-------------------------------( Pagination )-----------------------------------*/
			$offset = 0; $limit = 20;//20

			if(isset($_GET['offset']) && $_GET['offset'] != '')
				$offset = $_GET['offset'];
			
			$this->load->library('pagination');
			$config['page_query_string'] = TRUE;
			$config['enable_query_strings'] = TRUE;
			$config['query_string_segment'] = 'offset';
			
			$config['base_url'] = base_url().'index.php/home_ctl/temp_grid/'.$val.'?';
			//$config['total_rows'] = $this->db->query("select id from product where id in (select productId from productincatagory where categoryId = ".$val.");")->num_rows();
			$config['total_rows'] = $this->db->query("select count(*) as total from product where id in (select productId from productincatagory where categoryId = ".$val.");")->row()->total;
			$config['per_page'] = $limit;
			$config['num_links'] = 3;//4

			$this->pagination->initialize($config); 
			$data['pages'] = $this->pagination->create_links(); //echo $data['pages'];
			
		/*------------------------------( Pagination )-----------------------------------*/
		
		
		
		
		
			
		
		$data['products'] = $this->db->query("select * from product where id in (select productId from productincatagory where categoryId = ".$val.") LIMIT ".$offset.", ".$limit.";");
		$data['categoryName'] = $this->db->query("select * from category where id = ".$val.";")->row()->name;
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('product_grid', $data);
		$this->load->view('footer');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */