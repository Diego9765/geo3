<?php
  class Cliente extends CI_Model
  {

    function __construct()
    {
      parent::__construct(); //invoca a la clase padre
    }
    // funcion para consultar los datos de la tabla
    function obtenerTodos(){
      $clientes=$this->db->get("clientes");
      if ($clientes->num_rows()>0) {// si hay clientes
        return $clientes;
      } else {
        return false;// cuando no hay clientes
      }
      function insertar($datos){
        return $this->db->insert("clientes",$datos);
      }
    }
  }
