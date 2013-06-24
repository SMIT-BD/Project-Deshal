<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_mdl extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
	function fetchproduct($value)
	{
		$this->db->where('code',$value);
		$query = $this->db->get('product');
		
		if($query->num_rows()<1)
		{
			return false;
		}
		else
		{
			$row = $query->row();
			$data = array(
							'id' => $row->id
						 );
			//return $data;
			$this->db->query('select * from productavaiableartist,productavaiableiningredient,productavaiablepart,productavaiablesize,productavailablecolor
			where productId = "'.$data['id'].'"');
		}
		
	}
}
?>