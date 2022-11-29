<?php
  /**
   *
   */
  class Clientes extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('cliente');//llamamos al modelo
    }
    public function index(){
      $data["listadoClientes"]=$listadoClientes = $this->cliente->obtenerTodos();
      // print_r($listadoClientes->result());
      $this->load->view("clientes/index",$data);
    }

    //creacion de nueva function
    public function guardarCliente(){
		$datosNuevoCliente=array(
			"nombre_cli"=>$this->input->post('nombre_cli'),
			"apellido_cli"=>$this->input->post('apellido_cli'),
			"edad_cli"=>$this->input->post('edad_cli'),
			"genero_cli"=>$this->input->post('genero_cli'),
			"latitud_cli"=>$this->input->post('latitud_cli'),
			"longitud_cli"=>$this->input->post('longitud_cli')
		);
		print_r($datosNuevoCliente);
		if ($this->cliente->insertar($datosNuevoCliente)) {
			redirect('clientes/index');
		} else {
			echo "<h1>ERROR</h1>";
		}
}
  } //cierre total
