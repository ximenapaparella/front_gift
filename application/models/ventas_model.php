<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Ventas_model extends CI_Model
{

	public function __contruct()
	{
		parent::__construct();
	}



	public function primer_insert()
	{

		try {

			$venta['idEstado'] 			= 2;
			$venta['FechaCreacion'] 	= date('Y-m-d');

			$insert = $this->db->insert('Venta', $venta );

			if ( $insert )
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