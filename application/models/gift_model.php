<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Gift_model extends CI_Model
{

	public function __contruct()
	{
		parent::__construct();
	}


	/**
	 * Get all servicios
	 **/
	public function insert($gift)
	{

		try {

			unset($gift['cantidad']);

			$insert_gift = $this->db->insert('Voucher', $gift);

			if ( $insert_gift )
			{
				return $this->db->insert_id();
			} else {
				return 0;
			}



		} catch (Exception $e) {
			echo $e->getMessage();
			exit(1);
		}

	}




}


?>