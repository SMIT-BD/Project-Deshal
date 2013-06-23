<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_add_mdl extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }
	function datacheck($value,$table)
	{
		$this->db->where('name',$value);
		$query = $this->db->get($table);
        
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
			return $data;

		}
	}
}
?>