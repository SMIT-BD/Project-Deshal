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
						'id' => $row->id,
						'name' => $row->name,
						'price' => $row->price,
						'rate' => $row->rate,
						'amount' => $row->amount,
						'code' => $row->code,
						'created' => $row->created,
						'mainImageUrl' => $row->mainImageUrl,
					 );
			return $data;
		}
		
		// $this->db->where('productId',$data['id']);
		// $query2 = $this->db->get('productavaiableartist');
			
		// foreach($query2 as $row)
		// {
			// $data = array(
							// 'productArtistid' => $row->id
						 // );
		// }
	}
}
?>