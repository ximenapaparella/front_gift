<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		$this->load->model('servicios_model');
		$this->load->model('gift_model');
		$this->load->model('ventas_model');
	}



	/**
	 * Formulario para el completado de las tarjetas gifts
	 *
	 * @author 	Juan Pablo Sosa <jpasosa@gmail.com>
	 * @date 	22 de Enero del 2014
	 **/
	public function index()
	{


		if($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$gift 	= $this->get_data_post();


			if ($gift['IdVenta'] == 0) // Debe hacer el primer insert en registro ventas
			{
				$insert_venta = $this->ventas_model->primer_insert(); // Lo va a poner en estado de espera y la fecha de creación, fecha actual.

				if ( $insert_venta > 0) // Pudo insertar la venta correctamente.
				{
					$gift['IdVenta']	= $insert_venta;
					$insert_gift 	= $this->gift_model->insert($gift);
					if ( $insert_gift > 0) // Insertó correctamente los datos del voucher.
					{
						$this->session->set_userdata('cantidad_restan', $gift['cantidad'] );
						$gift = $this->_limpiar_gift($gift);



					}
				} else {
					// ERROR. no pudo insertar la venta.
				}
			}
			else {
				$insert_gift 	= $this->gift_model->insert($gift); // Puede ser el segundo voucher que inserta.

				if ( $insert_gift > 0) // Insertó correctamente los datos del voucher.
				{
					$restan_tarjetas = $this->session->userdata('cantidad_restan');
					$this->session->set_userdata('cantidad_restan', ($restan_tarjetas - 1) );
					$cantidad_restan = $gift['cantidad'] - 1;
					$this->session->set_userdata('cantidad', ($gift['cantidad'] - 1));
					$gift = $this->_limpiar_gift($gift);
				}
			}

		} else {
			$this->session->unset_userdata('cantidad_restan');
			$gift = array();

		}

		$data['gift'] 		= $gift;
		$data['servicios'] 	= $this->servicios_model->get_all();


		$this->load->view('home', $data);
	}





	/**
	 * Agarro datos por POST()
	 **/
	private function get_data_post()
	{

		$gift = array();

		if($this->input->post('IdVenta') != 0)
		{
			$gift['IdVenta'] = $this->input->post('IdVenta');
		} else {
			$gift['IdVenta'] = 0;
		}

		if($this->input->post('cantidad'))
		{
			$gift['cantidad'] = $this->input->post('cantidad');
		} else {
			$gift['cantidad'] = 2;
		}

		if($this->input->post('IdServicio'))
		{
			$gift['IdServicio'] = $this->input->post('IdServicio');
		} else {
			$gift['IdServicio'] = 1;
		}

		if($this->input->post('NombreComprador'))
		{
			$gift['NombreComprador'] = $this->input->post('NombreComprador');
		} else {
			$gift['NombreComprador'] = '';
		}

		if($this->input->post('ApellidoComprador'))
		{
			$gift['ApellidoComprador'] = $this->input->post('ApellidoComprador');
		} else {
			$gift['ApellidoComprador'] = '';
		}

		if($this->input->post('EmailComprador'))
		{
			$gift['EmailComprador'] = $this->input->post('EmailComprador');
		} else {
			$gift['EmailComprador'] = '';
		}

		if($this->input->post('TelefonoComprador'))
		{
			$gift['TelefonoComprador'] = $this->input->post('TelefonoComprador');
		} else {
			$gift['TelefonoComprador'] = '';
		}

		if($this->input->post('NombreAgasajado'))
		{
			$gift['NombreAgasajado'] = $this->input->post('NombreAgasajado');
		} else {
			$gift['NombreAgasajado'] = '';
		}

		if($this->input->post('ApellidoAgasajado'))
		{
			$gift['ApellidoAgasajado'] = $this->input->post('ApellidoAgasajado');
		} else {
			$gift['ApellidoAgasajado'] = '';
		}

		if($this->input->post('MensajePersonalizado'))
		{
			$gift['MensajePersonalizado'] = $this->input->post('MensajePersonalizado');
		} else {
			$gift['MensajePersonalizado'] = '';
		}

		return $gift;
	}



	/**
	 * Vacia el array gift para pasarselo a la siguiente vista,
	 * así puede continuar enviandos gifts, pero mantiene el id_venta
	 * el nombre, apellido, email y teléfono del comprador
	 *
	 * @author 	Juan Pablo Sosa <jpasosa@gmail.com>
	 * @date 	22 de Enero del 2014
	 *
	 * @param       int
	 * @return      array()
	 **/
	private function _limpiar_gift( $gift )
	{
		unset($gift['MensajePersonalizado'], $gift['IdServicio'], $gift['ApellidoAgasajado'], $gift['NombreAgasajado']);

		return $gift;
	}







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */