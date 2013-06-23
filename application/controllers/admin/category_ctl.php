<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category_ctl extends CI_Controller {

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
		if($this->session->userdata('admin_logged_in'))
		{
			$this->load->view('admin/header');
			//$this->load->view('menu');
			$this->load->view('admin/category');
			//$this->load->view('footer');
		}
		else
		{
			redirect('adminlog');
		}
	}
	
	function subcat()
	{
		//$data['current_page'] = "Home";
		
		$this->load->view('admin/header');
		//$this->load->view('menu');
		
		$data['categoryList'] = $this->category_mdl->catList();
		
		$this->load->view('admin/subcategory', $data);
		//$this->load->view('footer');
		
	}
	
	function addCategory()
	{
		if(isset($_POST['catname']) && isset($_POST['desc']))
		{
			$data['name'] = $_POST['catname'];
			$data['discription'] = $_POST['desc'];
			$data['rootCategoryId'] = 0;	//grandmother
			
			echo $this->category_mdl->addCategory($data);  /// 0/1
		}
	}
	
	function addSubCategory()
	{
		if(isset($_POST['name']))
			echo $this->category_mdl->addSubcategory($_POST);  /// 0/1
		
	}
	
	
	
	function getSubcatList() //AJAX
	{
		if( isset($_POST['catId']) )
		{
			$response['catId'] = $_POST['catId']; //hudai
			
			$result = $this->category_mdl->subcatList($_POST['catId']); // 0/rows
			if( $result )
			{
				$response['result'] = json_encode($result);
				$response['status'] = 1;
			}
			else
				$response['status'] = 0;
				
			echo json_encode($response);
		}
	}
	
	function menu_categories()
	{
		$categoryAr = $this->category_mdl->catListRaw();
		$category = array();
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
		return $category;
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */