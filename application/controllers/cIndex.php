<?php
/**
 *
 */
class Cindex extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function Index()
  {
    $this->load->view('Marcos/Encabezado');
    $this->load->view('Marcos/Menu');
    $this->load->view('Frontend/vInicial');
    $this->load->view('Marcos/Piepagina');
  }
}


 ?>
