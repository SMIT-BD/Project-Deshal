<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_ctl extends CI_Controller {

	function product_ctl()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('url');
		$this->load->model('product_add_mdl');
	}
	
	
	public function index()
	{
		//$data['current_page'] = "Home";
		$this->load->view('admin/header');
		$this->load->view('admin/product/addproduct');
		//$this->load->view('menu');
		//$this->load->view('admin/product/addproduct');
		//$this->load->view('footer');
	}
	
	function getAddForm()
	{
		$product_id;
		$product_image_thumb = true;

		$data['status'] = 1;
		$name = $this->input->post("name");
		$price = $this->input->post("price");
		$amount = $this->input->post("amount");
		$productparts = $this->input->post("productparts");
		$artist = $this->input->post("artist");
		$ingredient = $this->input->post("ingredient");
		$color = $this->input->post("color");
		$size = $this->input->post("size");
		
		$img_date = date("Y_m_d_H_i_s");
		$product_image = $name.$img_date;
		
		///////////////
			if(!empty($_FILES["userfile"]["name"]))
				{//////////////////////////////////
					$userfile = $this->input->post('userfile');
					
					$config['upload_path'] = '.productimages/';
					$config['allowed_types'] = 'jpg|jpeg|png';
					//$config['max_size'] = '1000';
					//$config['max_width'] = '1360';
					//$config['max_height'] = '768';
					$config['file_name'] = $product_image;
					$this->load->library('upload', $config);
					
					if(!$this->upload->do_upload())
					{
						$data['status'] = 0;
						$data['error'] = $this->upload->display_errors();
						echo json_encode($data);
					}
					else
					{
						$fileInfo = $this->upload->data();

						$imname=$fileInfo['file_name'];

						$w = $fileInfo['image_width'];
						$h = $fileInfo['image_height'];
						$make_h = (100*$h)/$w;
						//echo $make_width;exit;
						$product_image_thumb = $this->creatthumb($imname,$make_h);
						
					}
				//////////////////////////////////
				}
				else
				{
					$imname = 'no_image.jpg';
				}
				
				if($product_image_thumb)
					{
						$insrtProduct = $this->db->insert('product',
												array	(
												'name'=>$name ,											 
												'price'=>$price	,											 
												'amount'=>$amount,
												'mainImageUrl'=>$imname,
													)
										);
										
						if(!$insrtProduct)
						{
							$data['status'] = 0;
							$data['error'] = $name.' Not Added';
							echo json_encode($data);
						}
						else
						{
							$product_id = $this->db->insert_id();
						}
					}
					else
					{
						$data['status'] = 0;
						$data['error'] = $name.' Not Thumbed';
						echo json_encode($data);
					}
					
		//////////////
					if(isset($productparts))
					{
						$parts = explode(",", $productparts);
						
						$tablename = 'productpart' ;
						//insert productpart and productavaiablepart
						foreach($parts as $row)
						{
							$check = $this->product_add_mdl->datacheck($row,$tablename);
							if($check)
							{
								$part_id = $check['id'];
							}
							else
							{
								$insrt = $this->db->insert('productpart',
																	array	(
																	'name'=>$row												 
																		)
															);
								$part_id = $this->db->insert_id();
							}
							$insrt2 = $this->db->insert('productavaiablepart',
																array	(
																'productId'=>$product_id,
																'productPartId'=>$part_id
																	)
														);
						}
					}
					
					if(isset($ingredient))
					{
						$ingredients = explode(",", $ingredient);
						
						$tablename = 'productingredient';
						//insert productingredient and productavaiableiningredient
						foreach($ingredients as $row)
						{
							$check = $this->product_add_mdl->datacheck($row,$tablename);
							if($check)
							{
								$ingredient_id = $check['id'];
							}
							else
							{
								$insrt = $this->db->insert('productingredient',
																array	(
																'name'=>$row												 
																	)
														);
								$ingredient_id = $this->db->insert_id();
							}
							$insrt2 = $this->db->insert('productavaiableiningredient',
																array	(
																'productId'=>$product_id,
																'productInGredientId'=>$ingredient_id
																	)
														);
						}
					}
					
					
					if(isset($color))
					{
						$colors = explode(",", $color);
						
						$tablename = 'productcolor' ;
						//insert productcolor and productavailablecolor
						foreach($colors as $row)
						{
							$check = $this->product_add_mdl->datacheck($row,$tablename);
							if($check)
							{
								$color_id = $check['id'];
							}
							else
							{
								$insrt = $this->db->insert('productcolor',
																	array	(
																	'name'=>$row												 
																		)
															);
								$color_id = $this->db->insert_id();
							}
							$insrt2 = $this->db->insert('productavailablecolor',
																array	(
																'productId'=>$product_id,
																'productColorId'=>$color_id
																	)
														);
						}

					}
					
					if(isset($size))
					{
						$sizes = explode(",", $size);
						
						$tablename = 'productsize' ;
						//insert productsize and productavaiablesize
						foreach($sizes as $row)
						{
							$check = $this->product_add_mdl->datacheck($row,$tablename);
							if($check)
							{
								$size_id = $check['id'];
							}
							else
							{
								$insrt = $this->db->insert('productsize',
																	array	(
																	'name'=>$row												 
																		)
															);
								$size_id = $this->db->insert_id();
							}
							$insrt2 = $this->db->insert('productavaiablesize',
																array	(
																'productId'=>$product_id,
																'productSizeId'=>$size_id
																	)
														);
						}
					}
							$data['success'] = $name.' Added Successfully';
							echo json_encode($data);
							//$this->load->view('admin/header');
							//$this->load->view('admin/product/addproduct',$data);
	}
	
	function creatthumb($imname,$make_h)
	{	
		
		$config['image_library'] = 'gd2';
		$config['source_image']	= 'productimages/'.$imname;
		$config['new_image']    = 'productimages/thumbs/'.$imname;
		$config['create_thumb'] = False;
		$config['maintain_ratio'] = False;
		$config['width']	 = 100;
		$config['height']	= $make_h;
		
		$this->load->library('image_lib', $config); 

		$this->image_lib->resize();
		
		if ( ! $this->image_lib->resize())
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */